<?php

namespace App\Http\Controllers\Vendas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Venda;
use App\Models\Vendedor;
use App\Http\Requests\StoreVendaRequest;

class VendaController extends Controller
{
    public function index()
    {
        //Recebendo os vendedores para serem exibidos no form, atraves do select
        $vendedores = Vendedor::pluck('nome', 'id');

        $title = 'Solicitar Venda';

        return view('vendas.index', compact('vendedores', 'title'));
    }

    public function comissao(StoreVendaRequest $request, Venda $venda)
    {
        //Recebe os dados do formulario
        $dataForm = $request->all();

        //Calcula a comissao
        $comissao = $dataForm['valor_venda'] * 0.85 / 100;

        //Insere o valor calculado da comissao ao campo no dataForm
        $dataForm['valor_comissao'] = $comissao;

        //Busca o vendedor pelo id que vem do dataForm
        $vendedor = Vendedor::find($dataForm['id_vendedor']);

        //Salva efetivamente no banco
        $insert = $venda->create($dataForm);

        $title = 'Comissão do Vendedor';

        if ($insert) {
            return view('vendas.comissao', compact('insert', 'vendedor', 'title'));
        } else {
            return redirect()->back()->with('errors', 'Falha ao cadastrar venda!');
        }
    }

}
