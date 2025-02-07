<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{
    //

    public function index(){
        
        $clientes =DB::select('select * from clientes');

      
        
        
        return view('cliente.index',['clientes'=>$clientes]);
    }
    
    public function create(){

        return view('cliente.criar_cliente');
       }
    
    public function store(){

        return view('cliente.salvar_cliente');
    }
}
