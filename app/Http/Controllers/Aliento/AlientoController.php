<?php

namespace App\Http\Controllers\Aliento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AlientoController extends Controller
{
    public function index(){
        return view('aliento.index');
    }


}