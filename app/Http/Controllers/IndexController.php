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


}