<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendaController extends Controller
{
    //
  
    
    function relatorio($vendas)
    {

        



        $i=0;
        $lenght=sizeof($vendas);
            
        $relatorios=[];

        for($i=0;$i<$lenght;$i++){


        $loja=DB::select('select nome from lojas where id=?',[$vendas[$i]->id_loja]);
        $cliente=DB::select('select nome from clientes where id=?',[$vendas[$i]->id_cliente]);
        $vendedor=DB::select('select nome from vendedores where id=?',[$vendas[$i]->id_vendedor]);
        

        $nome_loja= $loja[0]->nome;
        $nome_cliente=$cliente[0]->nome;
        $nome_vendedor=$vendedor[0]->nome;

        $produto_venda=$vendedor=DB::select('select * from venda_produtos where id_vendas=?',[$vendas[$i]->id]);
        
        $quantidade=[];

        $len=sizeof($produto_venda);
        for($j=0;$j<$len;$j++){
                       

            $produto=DB::select('select nome from produtos where id=?',[$produto_venda[$j]->id_produto]);
        
            $quantidade[$j]= $produto[0]->nome . " qtd.: " . $produto_venda[$j]->quantidade ;

        }

        $relatorio=[
            "id" => $vendas[$i]->id,
            "nome_loja" =>$nome_loja,
            "nome_cliente" =>  $nome_cliente,
            "nome_vendedor" => $nome_vendedor,
            "valor"=> $vendas[$i]->valor,
            "quantidade" => $quantidade,
            "pagamento" => $vendas[$i]->pagamento,
            "observacao" => $vendas[$i]->observacao
        ];      
        
        
        $relatorios[$i]=$relatorio;
        }

        
        //dd($relatorios);

        return $relatorios;
    }




    public function index(){
        
        

        $vendas =DB::select('select * from vendas');

        $relatorios=$this->relatorio($vendas);

        //dd($relatorios);

        return view('venda.index',['relatorios'=>$relatorios]);
    }

    public function search(Request $request){

        $request->all();
        $search= $request->pesquisa;
        
        $id=$search;
        $id_cliente=$search;
        $id_loja=$search;
        $id_vendedor=$search;


        $clientes =DB::select('select id from clientes where id =? or nome = ? ',[$search,$search]);
        if($clientes)
        $id_cliente = $clientes[0]->id;

        $loja =DB::select('select id from lojas where id =? or nome = ? ',[$search,$search]);
        if($loja)
        $id_loja = $loja[0]->id;

        $vendedor =DB::select('select id from vendedores where id =? or nome = ? ',[$search,$search]);
        if($vendedor)
        $id_vendedor = $loja[0]->id;

        $vendas =DB::select('select * from vendas where id =? or id_cliente = ? or id_loja = ? or id_vendedor = ?',[$id,$id_cliente,$id_loja,$id_vendedor]);
        
        $relatorios=$this->relatorio($vendas);
        
        return view('venda.index',['relatorios'=>$relatorios]);
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
        $quantidade=$request->quantidade;

        $valor=0;
        
        //dd($id_produto);
        $lenght = sizeof($id_produto);
        for($i=0;$i<$lenght;$i++){

            $produto =DB::select('select valor from produtos where id =?',[$id_produto[$i]]);
            
            

            $val=(float)$produto[0]->valor;
            

            $qtd=(float)$quantidade[$i];
            $valor+= $val*$qtd;
            //dd($val,$qtd,$valor);

            DB::insert('insert into venda_produtos (id_vendas, id_produto, quantidade) values (?, ?, ?)', [$id,$id_produto[$i],$quantidade[$i]]);

        }
        //dd($venda);

        //dd($id_loja);
        DB::insert('insert into vendas (id, id_cliente, id_loja , id_vendedor, data, valor, observacao, pagamento) values (?, ?, ?, ?, ?, ?, ?, ?)', [$id,$id_cliente,$id_loja,$id_vendedor,$data,$valor,$observacao,$pagamento]);
        
        //dd($venda);
        return view('venda.salvar_venda',['venda'=>$venda]);
        
       }



    public function edit($id){

        //dd($id);
        $vendas = DB::select('select * from vendas where id = ?', [$id]);
        $venda=$vendas[0];
        //dd($venda);

        $produtos = DB::select('select * from venda_produtos where id_vendas = ?', [$id]);

        //dd($produtos);


        $id_produtos=[];
        $qtd_produtos=[];
        

        $lenght=sizeof($produtos);

        for($i=0;$i<$lenght;$i++){
            
            $id_produtos[$i]= $produtos[$i]->id_produto;
            $qtd_produtos[$i]= $produtos[$i]->quantidade;

            
        }

        //dd( $id_produtos,$qtd_produtos);

        $valor=[
            "id" => $venda->id,
            "id_cliente" =>$venda->id_cliente,
            "id_loja" =>  $venda->id_loja,
            "id_vendedor" => $venda->id_vendedor,
            "data" => $venda->data,
            
            "pagamento" => $venda->pagamento,
            "observacao" => $venda->observacao,


            "id_produtos"=>$id_produtos,
            "qtd_produtos"=>$qtd_produtos
        ];      
        

        //dd($valor);

        return view('venda.editar_venda',['valor'=>$valor]);
       }

    
    public function update($old_id){

        
        

        $request= Request ();

        $request->all();        
        
        $venda=$request;
        


        $id= $request->id;
        $id_cliente= $request->id_cliente;
        $id_loja=$request->id_loja;
        $id_vendedor=$request->id_vendedor;
        $data=$request->data;
        //$valor=$request->valor;
        $observacao=$request->observacao;
        $pagamento=$request->pagamento;
        
        $id_produto=$request->id_produto;
        $quantidade=$request->quantidade;

        $valor=0;
        
        //dd($id_produto);
        $lenght = sizeof($id_produto);

        $deleted = DB::delete('delete from venda_produtos where id_vendas = ?',[$old_id]);

        for($i=0;$i<$lenght;$i++){

            $produto =DB::select('select valor from produtos where id =?',[$id_produto[$i]]);
            
            

            $val=(float)$produto[0]->valor;
            

            $qtd=(float)$quantidade[$i];
            $valor+= $val*$qtd;
            //dd($val,$qtd,$valor);

            DB::insert('insert into venda_produtos (id_vendas, id_produto, quantidade) values (?, ?, ?)', [$id,$id_produto[$i],$quantidade[$i]]);
           
            
        }
        //dd($venda);

        //dd($id_loja);
        DB::update('update  vendas set id = ?, id_cliente = ?,  id_loja = ?, id_vendedor = ?, data = ?, valor = ?, observacao = ?, pagamento = ? where id = ?', [$id,$id_cliente,$id_loja,$id_vendedor,$data,$valor,$observacao,$pagamento,$old_id]);
        //DB::update('update  vendas set id = ? where id = ?', [$id,$old_id]);
        //dd($venda);
        
        return redirect('/venda');
    }


    public function destroy($id){

        //dd($id);
        
        $deleted = DB::delete('delete from venda_produtos where id_vendas = ?',[$id]);
        $deleted = DB::delete('delete from vendas where id = ?',[$id]);

        return redirect('/venda');
       }
    
}
