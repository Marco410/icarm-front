<?php

namespace App\Http\Controllers;

use App\Agencias;
use Illuminate\Http\Request;
use App\Http\Services\BrandService;
use Illuminate\Support\Str;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

use App\Filas;
use App\Alumno;
use App\Asistencia;

class AdminController extends Controller
{
   /*  public function __construct()
    {
        $this->middleware(['auth','role:Admin']);
    } */

    public function dashboard(){

        return view('admin.index_admin');
        /* return view('admin.index_admin'); */
    }

    public function alumnos(){
        $alumnos = Alumno::with('asistencia')->get();
        return view('admin.alumnos',compact('alumnos'));
    }

    public function alumno_create(Request $request){
        $alumno = Alumno::create([
            'nombre' => $request->nombre,
            'apellido_p' => $request->apellido_p,
            'apellido_m' => $request->apellido_m,
            'telefono' => $request->telefono,
            'fecha_nacimiento' => $request->fecha_nacimiento
        ]);

        if($request->asistencia){
            $asistencia = Asistencia::create([
                'alumno_id' => $alumno->id,
                'active' => 1,
            ]);
        }

        return redirect()->route('alumnos')->with('status','Se creo el nuevo alumno');
    }

    public function alumnos_asistencia(Request $request){
        $alumno_id = $request->alumno_id;

        $asistencia = Asistencia::where('alumno_id',$alumno_id)->whereDate('created_at',date('Y-m-d'))->first();

        if($asistencia == null){
            $asistencia = Asistencia::create([
                'alumno_id' => $alumno_id,
                'active' => 1,
            ]);
        }else{
            $asistencia['listo'] = "Ya se paso lista hoy";
        }
        
        return $asistencia;
    }

    public function alumnos_add(){

        return view('admin.alumnos-add');
    }

    public function alumno_editar(Request $request){

        $alumno_id = $request->alumno_id;
        $nombre = $request->nombre_update;
        $apellido_p = $request->apellido_p_update;
        $apellido_m = $request->apellido_m_update;
        $telefono = $request->telefono_update;
        $fecha = $request->fecha_nacimiento_update;

        if($fecha == null){
            $alumno = Alumno::where('id',$alumno_id)->first();
            $fecha = $alumno->fecha_nacimiento;
        }

        $alumno = Alumno::where('id',$alumno_id)->update([
            'nombre' => $nombre,
            'apellido_p' => $apellido_p,
            'apellido_m' => $apellido_m,
            'telefono' => $telefono,
            'fecha_nacimiento' => $fecha,
        ]);

        return $alumno;
    }

    public function alumno_ver(Request $request){
        
        $alumno = Alumno::where('id',$request->alumno)->first();
        $data['alumno'] = $alumno;
        return response()->json($data);
    }

    public function alumnos_asistencia_movil(Request $request){
        $alumno_id = $request->alumno_id;

        $asistencia = Asistencia::where('alumno_id',$alumno_id)->whereDate('created_at',date('Y-m-d'))->first();

        if($asistencia == null){
            $asistencia = Asistencia::create([
                'alumno_id' => $alumno_id,
                'active' => 1,
            ]);
        }else{
            $asistencia['listo'] = "Ya se paso lista hoy";
        }
        
        return $asistencia;
    }

    public function baja_encontrado(Request $request){
        if($request->clave){
            $encontrado = Encontrado::where('clave',$request->clave)->first();
            if($encontrado != null){
                $fila = Filas::where('Clave',$request->clave)->update([
                    'Asignado' => 0,
                    'Clave' => 0
                ]);
                $encontradoba = Encontrado::where('clave',$request->clave)->update([
                    'clave' => 0
                ]);
                return redirect()->back()->with('status','¿Estás seguro que deseas dar de baja a: '.$encontrado->Nombre.' '.$encontrado->ApellidoPaterno.' '.$encontrado->ApellidoMaterno.'?')->with('clave',$encontrado->clave);
               
            }else{
            return redirect()->back()->with('error','No encontramos a nadie con esa clave');
            }
            
        }else{
            return redirect()->back()->with('error','Escribe la clave que deseas dar de baja');
            
        }

    }

    public function baja(Request $request){

        if($request->clave){
            $fila = Filas::where('Clave',$request->clave)->update([
                'Asignado' => 0,
                'Clave' => 0
            ]);
            $encontrado = Encontrado::where('clave',$request->clave)->update([
                'clave' => 0
            ]);

            return redirect()->back()->with('status_success','Encontrado dado de baja correctamente.');
        }else{
            return redirect()->back()->with('error','No se proporciono la clave correctamente.');
        }

    }

    public function baja_view(){
        return view('admin.baja');
    }

    public function encontrados(){

        $encontrados = Encontrado::where('clave','!=','0')->get();

        return view('admin.encontrados',compact('encontrados'));
    }

    public function filas(){
        $filasHombres = Filas::where('grupo','h')->get();
        $filasMujeres = Filas::where('grupo','m')->get();
        return view('admin.filas',compact('filasHombres','filasMujeres'));
    }

    public function bautizar(Request $request){
        if($request->clave){
            $encontrado = Encontrado::where('clave',$request->clave)->first();
            if($encontrado != null){
                return redirect()->route('encontrados')->with('status','Nuevo');
            }else{
                return redirect()->back()->with('error','No encontramos a nadie con esa clave');
            }
            
        }else{
            return redirect()->back()->with('error','No se recibio la clave');
            
        }
    }

    
}