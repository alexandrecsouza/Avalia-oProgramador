<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LojaController extends Controller
{
    //
    
    public function index(){
        
        $lojas =DB::select('select * from lojas');

      
        
        
        return view('loja.index',['lojas'=>$lojas]);
    }

    public function search(Request $request){

        $request->all();
        
        $search= $request->pesquisa;
        //dd($request->all());
        $lojas =DB::select('select * from lojas where id =? or nome = ? ',[$search,$search]);
        
        
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

        DB::insert('insert into lojas (id, nome , cnpj , cep, endereco, bairro, cidade, uf) values (?, ?, ?,?, ?, ?, ?, ?)', [$id,$nome,$cnpj,$cep,$endereco,$bairro,$cidade,$uf]);
    

        return view('loja.salvar_loja',['loja'=>$loja]);
    }
    
    public function edit($id){

        //dd($id);
        $loja = DB::select('select * from lojas where id = ?', [$id]);

        return view('loja.editar_loja',['loja'=>$lojas]);
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

        DB::update('update lojas set id = ?, nome= ?,cpf = ?, sexo = ?, email =? where id = ?', [$id,$nome,$cpf,$sexo,$email,$old_id]);
    

        return view('loja.salvar_loja',['loja'=>$loja]);
    }

    public function destroy($id){

        //dd($id);
        

        $deleted = DB::delete('delete from lojas where id = ?',[$id]);

        return redirect('/loja');
       }
    
}
