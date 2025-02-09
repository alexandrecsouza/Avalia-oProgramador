<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendaController extends Controller
{
    //

    public function index(){
        
        $vendas =DB::select('select * from vendas');

      
        
        
        return view('venda.index',['vendas'=>$vendas]);
    }

    public function search(Request $request){

        $request->all();
        
        $search= $request->pesquisa;
        
        //dd($request->all());
        $vendas =DB::select('select * from vendas where id =? or nome = ?',[$search,$search]);
        
        
        return view('venda.index',['vendas'=>$vendas]);
    }

    public function create(){

        return view('venda.criar_venda');
       }

    public function store(Request $request){

        //$request->all();
        dd($request->all());

        return view('venda.criar_venda');
       }
}
