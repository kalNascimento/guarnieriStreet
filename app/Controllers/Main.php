<?php

namespace App\Controllers;
use App\Models\ProdutoModel;

class Main extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function contato()
    {
        return view('contato');
    }

    public function produto()
    {
        $produtoModel = new ProdutoModel();
        $dados["lista"]= $produtoModel->getProdutos();
        return view("produto", $dados);
    }
}
