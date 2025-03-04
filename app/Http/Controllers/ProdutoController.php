<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    //

    function id_existe($id){

        $existe =DB::select('select * from produtos where id =? ',[$id]);
        
        if($existe){
            return true;
        }

        return false;
    }
    
    public function index(){
        
        $produtos =DB::select('select * from produtos');

      
        
        
        return view('produto.index',['produtos'=>$produtos]);
    }

    public function search(Request $request){

        $request->all();
        
        $search= $request->pesquisa;
        
        //dd($request->all());
        $produtos =DB::select('select * from produtos where id =? or nome = ?',[$search,$search]);
        
        
        return view('produto.index',['produtos'=>$produtos]);
    }

    public function create(){

        return view('produto.criar_produto');
       }
    
    public function store(Request $request){

        $request->all();        
        
        $produto=$request;

        $id= $request->id;
        $nome= $request->nome;
        $cor=$request->cor;
        $valor=$request->valor;
        

        if($this->id_existe($id)){
            return view('produto.salvar_produto',['resultado'=>"erro"]);
        }


        DB::insert('insert into produtos (id, nome, cor , valor ) values (?, ?, ?,?)', [$id,$nome,$cor,$valor]);
    

        return view('produto.salvar_produto',['resultado'=>"salvo"]);
    }
    
    public function edit($id){

        //dd($id);
        $produto = DB::select('select * from produtos where id = ?', [$id]);

        return view('produto.editar_produto',['produto'=>$produto]);
       }
    
    public function update($old_id){

        $request= Request ();

        $request->all();        
        
        $produto=$request;

        $id= $request->id;
        $nome= $request->nome;
        $cor=$request->cor;
        $valor=$request->valor;

        if($id!=$old_id){
            if($this->id_existe($id)){
                $this->edit($old_id);
                
                return view('produto.salvar_produto',['resultado'=>"erro"]);
            }
            }

        DB::update('update produtos set id = ?, nome = ?, cor= ?,valor = ? where id = ?', [$id,$nome,$cor,$valor,$old_id]);
    

        return view('produto.salvar_produto',['resultado'=>"salvo"]);
    }

    public function destroy($id){

        //dd($id);
        

        $deleted = DB::delete('delete from produtos where id = ?',[$id]);

        return redirect('/produto');
       }
}
