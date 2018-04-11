<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Encomendas;

class EncomendaController extends Controller
{
    public function pesquisar()
    {
        // Recebe o conteúdo elemento 'descricao' do formulário
        $nome_cliente = Input::get('nome_cliente');
        // Busca produtos com o conteúdo da $descricao
        $encomendas = Encomendas::where('nome_cliente', 'like', '%'.$nome_cliente.'%')->get();
        // Chama a view produto.pesquisar e envia os produtos encontrados
        return view('encomenda.pesquisar')->with('encomenda', $encomendas);
    }
    public function mostrar_inserir()
    {
        return view('encomenda.inserir');
    }
    public function inserir()
    {
        // Criando um novo objeto do tipo Produto
        $encomendas = new Encomendas();
        // Colocando os valores recebidos do formulário nos atributos do objeto $produto
        $encomendas->nome_cliente = Input::get('nome_cliente');
        $encomendas->numero_encomenda = Input::get('numero_encomenda');
        $encomendas->cpf = Input::get('cpf');
        $encomendas->data_expedicao = Input::get('data_expedicao');
        // Salvando no banco de dados
        $encomendas->save();
        // Criado uma mensagem para o usuário
        $mensagem = "Encomenda inserido com sucesso";
        // Chamando a view produto.inserir e enviando a mensagem criada
        return view('encomenda.inserir')->with('mensagem', $mensagem);
    }
    public function mostrar_alterar($id)
    {
        // Busca no banco o registro com o id recebido
        $encomendas = Encomendas::find($id);
        // Envia os dados deste registro a view produto.alterar
        return view('encomenda.alterar')->with('encomendas', $encomendas);
    }
    public function alterar()
    {
        $id = Input::get('id');
        $e = Encomendas::find($id);
        $e->nome_cliente = Input::get('nome_cliente');
        $e->numero_encomenda = Input::get('numero_encomenda');
        $e->cpf = Input::get('cpf');
        $e->data_expedicao = Input::get('data_expedicao');
        $e->save();
        $mensagem = "Encomenda alterado com sucesso!";
        $encomendas = Encomendas::all();
        return view('encomenda.pesquisar')->with('mensagem', $mensagem)->with('encomenda', $encomendas);
    }
    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota
        $encomenda = Encomendas::find($id);
        // Excluindo este objeto
        $encomenda->delete();
        // Criando uma mensagem para ser enviada a view produto.pesquisar
        $mensagem = "Encomenda excluído com sucesso!";
        // Capturando objetos para enviar a view produto.pesquisar
        $encomenda = Encomendas::all();
        // Retornando a view produto.pesquisar
        return view('encomenda.pesquisar')->with('mensagem', $mensagem)->with('encomenda', $encomenda);
    }
}
