<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\Contacto;

class IndexController extends Controller
{
    public function index(){
        /* $encontrados = Encontrado::all(); */
        /* return view('index',compact('encontrados')); */
        return view('index');
    }

    public function matrimonios(){
        return view('index.matrimonios');
    }

    public function mujeres(){
        return view('index.mujeres');
    }

    public function hombres(){
        return view('index.hombres');
    }

    public function kids(){
        return view('index.kids');
    }

    public function jovenes(){
        return view('index.jovenes');
    }

    public function alabanza(){
        return view('index.alabanza');
    }

    public function contacto(){
        return view('index.contacto');
    }

    public function media(){
        return view('index.media');
    }

    public function datos(){
        return view('index.datos');
    }

    public function estrategia(){
        return view('index.estrategia');
    }

    public function error_build(){
        return view('errors.build');
    }

    public function send_contact(Request $request){

       /*  $datosContacto = request()->validate([
            'nombre'   => 'required',
            'asunto'   => 'required',
            'telefono'   => 'required',
            'msj'   => 'required',
            'email'   => 'required|email'
        ]); */

        return redirect('contacto');

        //Mail::to('marco_pascual410@hotmail.com')->send(new UserRegister($user));
    }


}