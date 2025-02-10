<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LojaController extends Controller
{
    //
    function id_existe($id){

        $existe =DB::select('select * from lojas where id =? ',[$id]);
        
        if($existe){
            return true;
        }

        return false;
    }


    public function index(){
        
        $lojas =DB::select('select * from lojas');

      
        
        
        return view('loja.index',['lojas'=>$lojas]);
    }

    public function search(Request $request){

        $request->all();
        
        $search= $request->pesquisa;
        //dd($request->all());
        $lojas =DB::select('select * from lojas where id =? or nome = ? or cnpj = ?',[$search,$search,$search]);
        
        
        return view('loja.index',['lojas'=>$lojas]);
    }

    public function create(){

        return view('loja.criar_loja');
       }
    
    public function store(Request $request){

        $request->all();        
        
        $loja=$request;

        $id= $request->id;
        $nome= $request->nome;
        $cnpj=$request->cnpj;
        $cep=$request->cep;
        $endereco=$request->endereco;
        $bairro=$request->bairro;
        $cidade=$request->cidade;
        $uf=$request->uf;

        if($this->id_existe($id)){
            return view('loja.salvar_loja',['resultado'=>"erro"]);
        }


        DB::insert('insert into lojas (id, nome , cnpj , cep, endereco, bairro, cidade, uf) values (?, ?, ?,?, ?, ?, ?, ?)', [$id,$nome,$cnpj,$cep,$endereco,$bairro,$cidade,$uf]);
    

        return view('loja.salvar_loja',['resultado'=>"salvo"]);
    }
    
    public function edit($id){

        //dd($id);
        $loja = DB::select('select * from lojas where id = ?', [$id]);

        return view('loja.editar_loja',['loja'=>$loja]);
       }
    
    public function update($old_id){

        $request= Request ();

        $request->all();  
           
        
        $loja=$request;

        $id= $request->id;
        $nome= $request->nome;
        $cnpj=$request->cnpj;
        $cep=$request->cep;
        $endereco=$request->endereco;
        $bairro=$request->bairro;
        $cidade=$request->cidade;
        $uf=$request->uf;

        if($id!=$old_id){
            if($this->id_existe($id)){
                $this->edit($old_id);
                
                return view('loja.salvar_loja',['resultado'=>"erro"]);
            }
            }

        DB::update('update lojas set id = ?, nome= ?,cnpj = ?, cep = ?, endereco =?, bairro = ?, cidade = ?, uf = ? where id = ?',  [$id,$nome,$cnpj,$cep,$endereco,$bairro,$cidade,$uf,$old_id]);
    

        return view('loja.salvar_loja',['resultado'=>"salvo"]);
    }

    public function destroy($id){

        //dd($id);
        

        $deleted = DB::delete('delete from lojas where id = ?',[$id]);

        return redirect('/loja');
       }
    
}
