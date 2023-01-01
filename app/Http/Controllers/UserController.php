<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Reviews;
use App\Agencias;
use Carbon\Carbon;  
use App\UserAgency;
use App\ClaimAgency;
use App\ReviewsAnswers;
use App\Cita;
use App\Personal;
use App\PersonalReviews;

use Illuminate\Support\Facades\DB;

use App\Notifications\NewReview;

use Illuminate\Support\Facades\Mail;
use App\Mail\CitaAccept;
use App\Mail\CitaDecline;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','role:Dealer']);
    }

    public function dashboard(){
        return view('usuario.user-dashboard');
    }

    public function get_mamas(){
        echo "Aqui";
    }

    public function reviews(){
        $user_id = auth()->user()->id;

        $reviews = Reviews::where('user_id',$user_id)->get();
        return view('usuario.user-reviews',compact('reviews'));
    }

    public function agencies(){
        $user_id = auth()->user()->id;

        $agencias = UserAgency::where('user_id',$user_id)->with('agencia')->get();
        return view('usuario.user-agencies',compact('agencias'));
    }

    public function agencies_claim(){
        $user_id = auth()->user()->id;

        $claims = ClaimAgency::where('user_id',$user_id)->get();
        return view('usuario.user-agencies-claim',compact('claims'));

    }

    public function agencies_stats($agency){
        $agencia = Agencias::where('id',$agency)->with('reviews')->withCount(['reviews','fotos'])->first();

        $countAtencion = 0;
        $atencion = 0;
        $finAtencion = 0;
        $practicidad = 0;
        $countPracticidad = 0;
        $finPracticidad = 0;
        $velocidad = 0;
        $countVelocidad = 0;
        $finVelocidad = 0;
        $resultado = 0;
        $countResultado = 0;
        $finResultado = 0;
        $rating = 0;
        $countRating = 0;
        $finRating = 0;
        
        foreach($agencia->reviews as $rev){

            if($rev->atencion){
                $atencion += $rev->atencion;
                $countAtencion ++;
                $finAtencion = $atencion / $countAtencion;
            }
            if($rev->practicidad){
                $practicidad += $rev->practicidad;
                $countPracticidad ++;
                $finPracticidad = $practicidad / $countPracticidad;
            }
            if($rev->velocidad){
                $velocidad += $rev->velocidad;
                $countVelocidad ++;
                $finVelocidad = $velocidad / $countVelocidad;
            }
            if($rev->resultado){
                $resultado += $rev->resultado;
                $countResultado ++;
                $finResultado = $resultado / $countResultado;
            }
            $rating += $rev->rating;
            $countRating ++;
            $finRating = $rating / $countRating;
        }
        $finAtencion = number_format($finAtencion,2);
        $finPracticidad = number_format($finPracticidad,2);
        $finVelocidad = number_format($finVelocidad,2);
        $finResultado = number_format($finResultado,2);
        $finRating = number_format($finRating,1);

        $reviewsByDay = Reviews::where('agencia_id',$agency)->orderBy('created_at','ASC')->whereNotNull('created_at')->limit(8)->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('d M Y'); 
        });

        $reviewsByMonth = Reviews::where('agencia_id',$agency)->orderBy('created_at','ASC')->whereNotNull('created_at')->limit(12)->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('M Y'); 
        });

        $reviewsByYear = Reviews::where('agencia_id',$agency)->orderBy('created_at','ASC')->whereNotNull('created_at')->limit(10)->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y'); 
        });

        $dateIni = $agencia->created_at;

        return view('usuario.user-agency-stats',compact('agencia','finRating','countAtencion','finAtencion','finPracticidad','finVelocidad','finResultado','reviewsByDay','reviewsByMonth','reviewsByYear','dateIni'));
    }

    public function agency_qr() 
    {
        \QrCode::size(500)
        ->format('png')
        ->generate('codingdriver.com', public_path('storage/qrcode.png'));
        
        return redirect()->back()->with('status_qr','Se creo el código qr de tu agencia.');
    }

    public function claim_agency(Request $request){
        $user_id = auth()->user()->id;

        //TODO: enviar correo a usuario y administración sobre el reclamo de agencia

        $claim = ClaimAgency::create([
            'user_id' => $user_id,
            'agencia_id' => request()->agencia_id
        ]);

        return redirect()->route('agencia.detalles',$request->agencia_id)->with('status_claim','Reclamaste esta agencia con éxito. Espera una respuesta a tu correo electrónico.');

    }

    public function data_reviews(){
        $agencia_id = request()->agencia;
        $periodo = request()->periodo;
        $arraCount = [];
        
        if($periodo == 'anio'){
            
            $anio = Date('Y');
            $arraAnios = array($anio-3,$anio-2,$anio-1,$anio-0);
            
            foreach ($arraAnios as $anio){
                $count = Reviews::where('agencia_id',$agencia_id)->whereNotNull('created_at')->whereYear('created_at',$anio)->count();
                
                array_push($arraCount,$count);
            }
            return $arraCount;
            
        }else if($periodo == 'mes'){
            
            $arraMes = array(1,2,3,4,5,6,7,8,9,10,11,12);
            $anio_mes = request()->anio_mes;
            foreach($arraMes as $mes){
                $count = Reviews::where('agencia_id',$agencia_id)->whereNotNull('created_at')->whereMonth('created_at',$mes)->whereYear('created_at',$anio_mes)->count();

                array_push($arraCount,$count);
            }
            return $arraCount;
        }else if($periodo == 'range'){

            if(request()->range_in){
                $in = request()->range_in;
            }else{
                $in = Date('Y-m-d',strtotime('-1 year'));
            }
            if(request()->range_end){
                $end = Date('Y-m-d',strtotime(request()->range_end.'+1 days'));
            }else{
                $end = Date('Y-m-d',strtotime('+1 day'));
            }
            $range_period = request()->range_period;
            $range_periodo = "Y";
            if($range_period == "anio"){
                $range = Reviews::where('agencia_id',$agencia_id)->whereBetween('created_at',[$in,$end])->orderBy('created_at','ASC')->whereNotNull('created_at')->get()->groupBy(function($date) {
                    return Carbon::parse($date->created_at)->format('Y'); 
                });
            }else if ($range_period == "mes"){
                $range = Reviews::where('agencia_id',$agencia_id)->whereBetween('created_at',[$in,$end])->orderBy('created_at','ASC')->whereNotNull('created_at')->get()->groupBy(function($date) {
                    return Carbon::parse($date->created_at)->format('M Y'); 
                });
            }else if ($range_period == "day"){
                $range = Reviews::where('agencia_id',$agencia_id)->whereBetween('created_at',[$in,$end])->orderBy('created_at','ASC')->whereNotNull('created_at')->get()->groupBy(function($date) {
                    return Carbon::parse($date->created_at)->format('d M Y'); 
                });
            }   
            return $range;
        }
    }
    public function data_estandar(){
        $agencia_id = request()->agencia;

        if(request()->range_in){
            $in = request()->range_in;
        }else{
            $in = Date('Y-m-d',strtotime('-1 year'));
        }
        if(request()->range_end){
            $end = Date('Y-m-d',strtotime(request()->range_end.'+1 days'));
        }else{
            $end = Date('Y-m-d',strtotime('+1 day'));
        }

        $revs = Reviews::where('agencia_id',$agencia_id)->whereBetween('created_at',[$in,$end])->orderBy('created_at','ASC')->whereNotNull('created_at')->get();

        $countAtencion = 0;
        $atencion = 0;
        $finAtencion = 0;
        $practicidad = 0;
        $countPracticidad = 0;
        $finPracticidad = 0;
        $velocidad = 0;
        $countVelocidad = 0;
        $finVelocidad = 0;
        $resultado = 0;
        $countResultado = 0;
        $finResultado = 0;
        $rating = 0;
        $countRating = 0;
        $finRating = 0;
        
        foreach($revs as $rev){

            if($rev->atencion){
                $atencion += $rev->atencion;
                $countAtencion ++;
                $finAtencion = $atencion / $countAtencion;
            }
            if($rev->practicidad){
                $practicidad += $rev->practicidad;
                $countPracticidad ++;
                $finPracticidad = $practicidad / $countPracticidad;
            }
            if($rev->velocidad){
                $velocidad += $rev->velocidad;
                $countVelocidad ++;
                $finVelocidad = $velocidad / $countVelocidad;
            }
            if($rev->resultado){
                $resultado += $rev->resultado;
                $countResultado ++;
                $finResultado = $resultado / $countResultado;
            }
            $rating += $rev->rating;
            $countRating ++;
            $finRating = $rating / $countRating;
        }

        $finAtencion = number_format($finAtencion,2);
        $finPracticidad = number_format($finPracticidad,2);
        $finVelocidad = number_format($finVelocidad,2);
        $finResultado = number_format($finResultado,2);
        $finRating = round($finRating,1);

        $in = Date('d M Y',strtotime($in));
        $end = Date('d M Y',strtotime($end.'-1 day'));

        $array = [$finAtencion,$finPracticidad,$finVelocidad,$finResultado,$countAtencion,$in,$end,$finRating];

        return $array;
    }

    public function personal(){
        $user_id = auth()->user()->id;
        $personal = array();
        
        $agencias = UserAgency::where('user_id',$user_id)->with('agencia')->orderBy('created_at','DESC')->get();
        $finRatingPersonal = 0;
        $ratingPersonal = 0.0;
        $countRatingPersonal = 0;
        $reviews = 0;
        $atencion = 0;
        $tiempo = 0;
        $conocimiento = 0;
        foreach($agencias as $agencia){
            $person = Personal::where('agencia_id',$agencia->agencia_id)->with(['agencia','reviews'])->withCount('reviews')->get();

            foreach ($person as $p){
                if(isset($p->reviews)){
                    foreach($p->reviews as $rev){
                        $ratingPersonal += floatval($rev->rating);
                        $atencion += floatval($rev->atencion);
                        $tiempo += floatval($rev->tiempo);
                        $conocimiento += floatval($rev->conocimiento);
                        $countRatingPersonal ++;
                        $finRatingPersonal = $ratingPersonal / $countRatingPersonal;
                        $finAtencion = $atencion / $countRatingPersonal;
                        $finTiempo = $tiempo / $countRatingPersonal;
                        $finConocimiento = $conocimiento / $countRatingPersonal;
                        $reviews ++;
                    }
                }
            }
            array_push($personal,$person);
        }

        $finRatingPersonal = round($finRatingPersonal,1);
        $finAtencion = round($finAtencion,1);
        $finTiempo = round($finTiempo,1);
        $finConocimiento = round($finConocimiento,1);

        $dateIni = $agencias[0]->created_at;

        return view('usuario.user-personal',compact('personal','agencias','finRatingPersonal','reviews','finAtencion','finTiempo','finConocimiento','dateIni'));
        /* $citas = Cita::with('agencia')->get(); */
    }

    public function data_reviews_personal(){
        $personal_id = request()->agencia;

        if(request()->range_in){
            $in = request()->range_in;
        }else{
            $in = Date('Y-m-d',strtotime('-1 year'));
        }
        if(request()->range_end){
            $end = Date('Y-m-d',strtotime(request()->range_end.'+1 days'));
        }else{
            $end = Date('Y-m-d',strtotime('+1 day'));
        }

        $user_id = auth()->user()->id;
        
        $agencias = UserAgency::where('user_id',$user_id)->with('agencia')->orderBy('created_at','DESC')->get();
        $finRatingPersonal = 0;
        $ratingPersonal = 0.0;
        $countRatingPersonal = 0;
        $reviews = 0;
        $atencion = 0;
        $tiempo = 0;
        $conocimiento = 0;
        $finAtencion = 0;
        $finTiempo = 0;
        $finConocimiento = 0;
        foreach($agencias as $agencia){
            $person = Personal::where('agencia_id',$agencia->agencia_id)->with(['agencia','reviews'])->withCount('reviews')->get();
            
            foreach ($person as $p){
                if(isset($p->reviews)){
                    $revs = PersonalReviews::where('personal_id',$p->id)->whereBetween('created_at',[$in,$end])->orderBy('created_at','ASC')->whereNotNull('created_at')->get();
                    
                    foreach($revs as $rev){
                        $ratingPersonal += floatval($rev->rating);
                        $atencion += floatval($rev->atencion);
                        $tiempo += floatval($rev->tiempo);
                        $conocimiento += floatval($rev->conocimiento);
                        $countRatingPersonal ++;
                        $finRatingPersonal = $ratingPersonal / $countRatingPersonal;
                        $finAtencion = $atencion / $countRatingPersonal;
                        $finTiempo = $tiempo / $countRatingPersonal;
                        $finConocimiento = $conocimiento / $countRatingPersonal;
                        $reviews ++;
                    }
                }
            }
        }

        $finRatingPersonal = round($finRatingPersonal,1);
        $finAtencion = round($finAtencion,1);
        $finTiempo = round($finTiempo,1);
        $finConocimiento = round($finConocimiento,1);

        $in = Date('d M Y',strtotime($in));
        $end = Date('d M Y',strtotime($end.'-1 day'));

        $array = [$finAtencion,$finTiempo,$finConocimiento,$in,$end,$reviews,$finRatingPersonal];

        return $array;
    }

    public function personal_ver($personal_id){

        $personal = Personal::where('id',$personal_id)->with('reviews')->withCount('reviews')->first();

        if(request()->range_in){
            $in = request()->range_in;
        }else{
            $in = Date('Y-m-d',strtotime('-1 year'));
        }
        if(request()->range_end){
            $end = Date('Y-m-d',strtotime(request()->range_end.'+1 days'));
        }else{
            $end = Date('Y-m-d',strtotime('+1 day'));
        }

        $finRatingPersonal = 0;
        $ratingPersonal = 0.0;
        $countRatingPersonal = 0;
        $reviews = 0;
        $atencion = 0;
        $tiempo = 0;
        $conocimiento = 0;
        $finAtencion = 0;
        $finTiempo = 0;
        $finConocimiento = 0;

        if(isset($personal->reviews)){

            $revs = PersonalReviews::where('personal_id',$personal->id)->whereBetween('created_at',[$in,$end])->orderBy('created_at','ASC')->whereNotNull('created_at')->get();
            
            foreach($revs as $rev){
                $ratingPersonal += floatval($rev->rating);
                $atencion += floatval($rev->atencion);
                $tiempo += floatval($rev->tiempo);
                $conocimiento += floatval($rev->conocimiento);
                $countRatingPersonal ++;
                $finRatingPersonal = $ratingPersonal / $countRatingPersonal;
                $finAtencion = $atencion / $countRatingPersonal;
                $finTiempo = $tiempo / $countRatingPersonal;
                $finConocimiento = $conocimiento / $countRatingPersonal;
                $reviews ++;
            }
        }

        $finRatingPersonal = round($finRatingPersonal,1);
        $finAtencion = round($finAtencion,1);
        $finTiempo = round($finTiempo,1);
        $finConocimiento = round($finConocimiento,1);

        $dateIni = $personal->created_at;

        return view('usuario.user-personal-ver',compact('personal','finRatingPersonal','finAtencion','finTiempo','finConocimiento','dateIni'));
    }

    public function data_reviews_personal_ver(){
        $personal_id = request()->personal_id;

        if(request()->range_in){
            $in = request()->range_in;
        }else{
            $in = Date('Y-m-d',strtotime('-1 year'));
        }
        if(request()->range_end){
            $end = Date('Y-m-d',strtotime(request()->range_end.'+1 days'));
        }else{
            $end = Date('Y-m-d',strtotime('+1 day'));
        }

        $finRatingPersonal = 0;
        $ratingPersonal = 0.0;
        $countRatingPersonal = 0;
        $reviews = 0;
        $atencion = 0;
        $tiempo = 0;
        $conocimiento = 0;
        $finAtencion = 0;
        $finTiempo = 0;
        $finConocimiento = 0;

        $personal = Personal::where('id',$personal_id)->with('reviews')->withCount('reviews')->first();
     
            
        if(isset($personal->reviews)){
            $revs = PersonalReviews::where('personal_id',$personal->id)->whereBetween('created_at',[$in,$end])->orderBy('created_at','ASC')->whereNotNull('created_at')->with('user')->get();
            
            foreach($revs as $rev){
                $ratingPersonal += floatval($rev->rating);
                $atencion += floatval($rev->atencion);
                $tiempo += floatval($rev->tiempo);
                $conocimiento += floatval($rev->conocimiento);
                $countRatingPersonal ++;
                $finRatingPersonal = $ratingPersonal / $countRatingPersonal;
                $finAtencion = $atencion / $countRatingPersonal;
                $finTiempo = $tiempo / $countRatingPersonal;
                $finConocimiento = $conocimiento / $countRatingPersonal;
                $reviews ++;
            }
        }

        $finRatingPersonal = round($finRatingPersonal,1);
        $finAtencion = round($finAtencion,1);
        $finTiempo = round($finTiempo,1);
        $finConocimiento = round($finConocimiento,1);

        $in = Date('d M Y',strtotime($in));
        $end = Date('d M Y',strtotime($end.'-1 day'));

        $array = [$finAtencion,$finTiempo,$finConocimiento,$in,$end,$reviews,$finRatingPersonal];

        return $array;
    }

   

    public function personal_add(Request $request){
        $imagen= "";

        $personal = Personal::create([
            'agencia_id' => $request->agencia_id,
            'nombre' => $request->nombre,
            'puesto' => $request->puesto,
        ]);

        if ($request->hasFile("perfil")) {
            $file = $request->file("perfil");
            $name = $file->getClientOriginalName();
            $nameResult = $this->generateNameFile($name);

            request()->file("perfil")->storeAs('public', 'personal/'. $personal->id. '/' . $nameResult);

            $imagen =  $nameResult;
            $personalU = Personal::where('id',$personal->id)->update([
                'imagen' => $imagen
            ]);
        } else {
            $imagen =  null;
        }

        return redirect()->back()->with('status_personal','Se añadio el nuevo personal.');
    }

    public function comments(){
        $user_id = auth()->user()->id;
        $reviews = array();
        
        $agencias = UserAgency::where('user_id',$user_id)->with('agencia')->get();
        foreach($agencias as $agencia){
            array_push($reviews,Reviews::where('agencia_id',$agencia->agencia_id)->with(['agencia','user'])->withCount('answers')->get());
        }

        return view('usuario.user-comments',compact('reviews','agencias'));
        /* $citas = Cita::with('agencia')->get(); */
    }

    public function comentarios_save_respuesta(){

        $answer = ReviewsAnswers::create([
            'review_id' => request()->review_id,
            'user_id' => auth()->user()->id,
            'answer' => request()->respuesta
        ]);

        $answer['review'] = Reviews::find(request()->review_id);

        $autorid = request()->autor_id;
        if($autorid != 0){
            $user = User::find($autorid);
            $user->notify(new AnswerReview($answer));
        }
        return redirect()->back()->with('status_comment','Se guardo con éxito la respuesta.');
    }

    public function comments_see($review_id){

        if(request()->noti){
            DatabaseNotification::find(request()->noti)->markAsRead();
        }

        $rev = Reviews::where('id',$review_id)->with(['answers'])->first();
        return view('usuario.user-comments-see',compact('rev'));
    }

    public function citas(){
        $user_id = auth()->user()->id;
        $citas = array();
        
        $agencias = UserAgency::where('user_id',$user_id)->with('agencia')->get();
        foreach($agencias as $agencia){
            array_push($citas,Cita::where('agencia_id',$agencia->agencia_id)->get());
        }

        return view('usuario.user-citas',compact('citas','agencias'));
        /* $citas = Cita::with('agencia')->get(); */
    }

    public function citas_ver($cita_id){
        
        $cita = Cita::where('id',$cita_id)->first();

        return view('usuario.user-citas-see',compact('cita'));
        /* $citas = Cita::with('agencia')->get(); */
    }

    public function citas_ask(Request $request){

        $cita = Cita::where('id',$request->cita_id)->update([
            'accept' => $request->respond,
            'notas_dealer' => $request->nota_dealer
        ]);

        $cita = Cita::where('id',$request->cita_id)->first();
        $agencia = Agencias::where('id',$cita->agencia_id)->first();

        if($request->respond == 1){
            $msj = "Aceptaste la solicitud cita con éxito. Se envio un mensaje de correo con el estatus al correo que proporciono el cliente.";
            Mail::to($cita->email)->send(new CitaAccept($cita,$agencia));
            
        }else{
            
            $msj = "Rechazaste la solicitud de cita. Se envio un mensaje de correo con el estatus al correo que proporciono el cliente.";
            Mail::to($cita->email)->send(new CitaDecline($cita,$agencia));

        }

        return redirect()->route('user.citas')->with('status_cita',$msj);
    }

    public function notifications(){
        $notifications = auth()->user()->notifications;
        $user = auth()->user()->unreadNotifications->markAsRead();
        return view('usuario.user-notifications',compact('notifications'));
    }

    public function generateNameFile($value)
    {
        $link = html_entity_decode($value);
        $link = $this->deleteAccents($link);
        $link = strtolower($link); //paso todo a minisculas
        $link = preg_replace("/[^ A-Za-z0-9_.-]/", '', $link); //quito los caracteres que no sean letras o numeros
        $link = str_replace(' ', '-', $link);

        return $link;
    }

    public function deleteAccents($cadena)
    {
        $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ';
        $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyyby';
        $cadena = utf8_decode($cadena);
        $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
        return utf8_encode($cadena);
    }
    
}
