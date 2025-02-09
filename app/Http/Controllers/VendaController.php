<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendaController extends Controller
{
    //

    public function index(){
        
        $vendas =DB::select('select * from vendas');

        $i=0;

        $nome_loja=DB::select('select nome from lojas where id=?',[$vendas[$i]->id_loja]);
        $nome_cliente=DB::select('select nome from clientes where id=?',[$vendas[$i]->id_cliente]);
        $nome_vendedor=DB::select('select nome from vendedores where id=?',[$vendas[$i]->id_vendedor]);
        
        $relatorio=[
            "id" => $vendas[$i]->id,
            "nome_loja" =>$nome_loja,
            "nome_cliente" =>  $nome_cliente,
            "nome_vendedor" => $nome_vendedor,
            "quantidade_produtos" => 0,
            "pagamento" => $vendas[$i]->pagamento,
            "observacao" => $vendas[$i]->observacao
        ];        
        
        //dd($relatorio);
        return view('venda.index',['relatorio'=>$relatorio]);
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
        //dd($request->all());

        $request->all();        
        
        $venda=$request;
        
        /*
        $table->string('id');
        $table->string('id_cliente');
        $table->string('id_loja');
        $table->string('id_vendedor');
        $table->string('data');
        $table->string('valor');
        $table->string('observacao');
        $table->string('pagamento');
        */

        $id= $request->id;
        $id_cliente= $request->id_cliente;
        $id_loja=$request->id_loja;
        $id_vendedor=$request->id_vendedor;
        $data=$request->data;
        //$valor=$request->valor;
        $observacao=$request->observacao;
        $pagamento=$request->pagamento;
        
        $id_produto=$request->id_produto;

        $valor=0;
        
        //dd($id_produto);
        $lenght = sizeof($id_produto);
        for($i=0;$i<$lenght;$i++){

            $valor_produtos =DB::select('select valor from produtos where id =?',[$id_produto[$i]]);
        
            $valor+= $valor_produtos*$quantidade[$i];
            //dd($valor_produtos);

            DB::insert('insert into venda_produtos (id_vendas, id_produto) values (?, ?)', [$id,$id_produto[$i]]);

        }
        //dd($venda);

        //dd($id_loja);
        DB::insert('insert into vendas (id, id_cliente, id_loja , id_vendedor, data, valor, observacao, pagamento) values (?, ?, ?, ?, ?, ?, ?, ?)', [$id,$id_cliente,$id_loja,$id_vendedor,$data,$valor,$observacao,$pagamento]);
        
        //dd($venda);
        return view('venda.salvar_venda',['venda'=>$venda]);
        
       }
}
