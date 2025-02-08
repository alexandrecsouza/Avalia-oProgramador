<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendedorController extends Controller
{
    //

    public function index(){
        
        $vendedores =DB::select('select * from vendedores');

      
        
        
        return view('vendedor.index',['vendedores'=>$vendedores]);
    }

    public function search(Request $request){

        $request->all();
        
        $search= $request->pesquisa;
        //dd($request->all());
        $vendedores =DB::select('select * from vendedores where id =? or nome = ? or cpf  = ?',[$search,$search,$search]);
        
        
        return view('vendedor.index',['vendedores'=>$vendedores]);
    }

    public function create(){

        return view('vendedor.criar_vendedor');
       }
    
    public function store(Request $request){

        $request->all();        
        
        $vendedor=$request;

        $id= $request->id;
        $id_loja= $request->id_loja;
        $nome= $request->nome;
        $cpf=$request->cpf;
        

        DB::insert('insert into vendedores (id, id_loja, nome , cpf ) values (?, ?, ?,?)', [$id,$id_loja,$nome,$cpf]);
    

        return view('vendedor.salvar_vendedor',['vendedor'=>$vendedor]);
    }
    
    public function edit($id){

        //dd($id);
        $vendedor = DB::select('select * from vendedores where id = ?', [$id]);

        return view('vendedor.editar_vendedor',['vendedor'=>$vendedor]);
       }
    
    public function update($old_id){

        $request= Request ();

        $request->all();        
        
        $vendedor=$request;

        $id= $request->id;
        $id_loja= $request->id_loja;
        $nome= $request->nome;
        $cpf=$request->cpf;


        DB::update('update vendedores set id = ?, id_loja = ?, nome= ?,cpf = ? where id = ?', [$id,$id_loja,$nome,$cpf,$old_id]);
    

        return view('vendedor.salvar_vendedor',['vendedor'=>$vendedor]);
    }

    public function destroy($id){

        //dd($id);
        

        $deleted = DB::delete('delete from vendedores where id = ?',[$id]);

        return redirect('/vendedor');
       }
    
}
