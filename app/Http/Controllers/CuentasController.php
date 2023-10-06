<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CuentaRequest;
use App\Models\Cuenta;
use Illuminate\Support\Facades\Hash;
use Gate;
use Illuminate\Support\Facades\Auth;


class CuentasController extends Controller
{

    public function index(){
        
        $cuentas = Cuenta::orderBy('user')->get();
        return view('cuentas.index',compact('cuentas'));
    }

    public function create(){
    
        $cuentas = Cuenta::orderBy('user')->get();
        return view('cuentas.create',compact('cuentas'));
        
    }

    public function store(CuentaRequest $request){
        $cuenta = new Cuenta();

        $cuenta->user = $request->user;
        $cuenta->rol = 2;
        $cuenta->nombre = $request->nombre;
        $cuenta->email = $request->email;
        $cuenta->password = Hash::make($request->password);
        $cuenta->peso = $request->peso;
        $cuenta->estatura = $request->estatura;
        $cuenta->cuerpo = $request->cuerpo;
        $cuenta->estado = $request->estado;

        $cuenta->save();
        return redirect()->route('home.login');
    }

    public function acceso(Request $request){
        $user = $request->user;
        $password = $request->password;

        if(Auth::attempt(['user'=>$user,'password'=>$password])){
            return redirect()->route('home.index');
        }

        return back()->withErrors([
            'user' => 'Datos Erroneos',
        ])->onlyInput('user');
    }


}
