<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;
use App\Models\MarcaModel;

class Produto extends BaseController
{
    public function index()
    {
        $marcaModel = new MarcaModel();
        $dados['marcas'] = $marcaModel->findall();

        $produtoModel = new ProdutoModel();
        $dados["produtos"] = $produtoModel->findAll();

        return view("admin/produto", $dados);
    }
    public function deletar($id)
    {
        $produtoModel = new ProdutoModel();
        if($produtoModel->delete($id)){
            return "sucesso";
        } 
        return "Erro";
    }
    
    public function cadastrar(){
        $modelProduto = new ProdutoModel();
        $dadosEnviados = $this->request->getPost();

        if($modelProduto->saveAs($dadosEnviados)){
            return "Salvo com sucesso";
        }else{
            return "Erro ao sucesso";
        }
    }
}
?>