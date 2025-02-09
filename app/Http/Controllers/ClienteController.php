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

    public function search(Request $request){

        $request->all();
        
        $search= $request->pesquisa;
        //dd($request->all());
        $clientes =DB::select('select * from clientes where id =? or nome = ? or cpf  = ?',[$search,$search,$search]);
        
        
        return view('cliente.index',['clientes'=>$clientes]);
    }

    public function create(){

        return view('cliente.criar_cliente');
       }

    function id_existe($id){

        $clientes =DB::select('select * from clientes where id =? ',[$id]);
        
        if($clientes){
            return true;
        }

        return false;
    }

    public function store(Request $request){

        $request->all();        
        
        $cliente=$request;

        $id= $request->id;
        $nome= $request->nome;
        $cpf=$request->cpf;
        $sexo=$request->sexo;
        $email=$request->email;

        /*
        if($this->id_existe($id)){
            return view('cliente.criar_cliente');
        }
        */
        DB::insert('insert into clientes (id, nome , cpf , sexo, email) values (?, ?, ?,?, ?)', [$id,$nome,$cpf,$sexo,$email]);
    

        return view('cliente.salvar_cliente',['cliente'=>$cliente]);
    }
    
    public function edit($id){

        //dd($id);
        $cliente = DB::select('select * from clientes where id = ?', [$id]);

        return view('cliente.editar_cliente',['cliente'=>$cliente]);
       }
    
    public function update($old_id){

        $request= Request ();

        $request->all();        
        
        $cliente=$request;

        $id= $request->id;
        
        $nome= $request->nome;
        $cpf=$request->cpf;
        $sexo=$request->sexo;
        $email=$request->email;

        DB::update('update clientes set id = ?, nome= ?,cpf = ?, sexo = ?, email =? where id = ?', [$id,$nome,$cpf,$sexo,$email,$old_id]);
    

        return view('cliente.salvar_cliente',['cliente'=>$cliente]);
    }

    public function destroy($id){

        //dd($id);
        

        $deleted = DB::delete('delete from clientes where id = ?',[$id]);

        return redirect('/cliente');
       }
    
    
}
