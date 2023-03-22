<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;
use App\Models\MarcaModel;

class Marcas extends BaseController
{
    public function index()
    {
        $marcaModel = new MarcaModel();
        $dados['marcas'] = $marcaModel->findall();

        // $produtoModel = new ProdutoModel();
        // $dados["produtos"] = $produtoModel->findAll();

        return view("admin/marca", $dados);
    }
    public function deletar($id)
    {
        $marcaModel = new MarcaModel();
        if($marcaModel->delete($id)){
            return "sucesso";
        } 
        return "Erro";
    }
    
    public function cadastrar(){
        $modelMarca = new MarcaModel();
        $dadosEnviados = $this->request->getPost();

        if($modelMarca->save($dadosEnviados)){
            return "Salvo com sucesso";
        }else{
            return "Erro ao sucesso";
        }
    }
}
?>