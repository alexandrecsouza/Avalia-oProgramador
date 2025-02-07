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
    
    public function store(Request $request){

        $request->all();        
        
        $cliente=$request;

        $id= $request->id;
        $nome= $request->nome;
        $cpf=$request->cpf;
        $sexo=$request->sexo;
        $email=$request->email;

        DB::insert('insert into clientes (id, nome , cpf , sexo, email) values (?, ?, ?,?, ?)', [$id,$nome,$cpf,$sexo,$email]);
    

        return view('cliente.salvar_cliente',['cliente'=>$cliente]);
    }
}
