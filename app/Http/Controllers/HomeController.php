<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dieta;
use App\Models\TipoD;


class HomeController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth')->except(['login','index']);
    // }

    public function index(){
        $dietas = Dieta::orderBy('dieta_id')->get();
        $tipos = TipoD::orderBy('tipo_id')->get();

        return view('home.index', compact(['dietas','tipos']));
    }

    public function login(){
        return view('home.login');
    }

}
