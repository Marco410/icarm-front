<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encontrado;

use App\Notifications\ContactoNoti;
use Illuminate\Notifications\DatabaseNotification;

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

    public function error_build(){
        return view('errors.build');
    }


}