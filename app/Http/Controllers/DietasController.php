<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dieta;
use App\Models\TipoD;

class DietasController extends Controller
{
    public function index(){
        $dietas = Dieta::orderBy('dieta_id')->get();
        $tipos = TipoD::orderBy('tipo_id')->get();

        return view('dieta.index', compact(['dietas','tipos']));
    }

}
