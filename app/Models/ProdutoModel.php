<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table            = 'produto';
    protected $primaryKey       = 'idproduto';
    protected $useAutoIncrement = true;

    // Campos em que o usuário pode alterar os valores
    protected $allowedFields = ["nome", "preco", "fkmarca"];

    public function _construct(){
        parent::_construct();
        $this->db = db_connect();
    }

    public function getProdutos(){

        // $this->bd->query("SELECT ....")->getResult();

        $builder = $this->db->table("produto p");
        $builder->select("p.*, m.nome nome_marca, ip.imagem");
        $builder->join("marca m", "m.idmarca=p.fkmarca");
        $builder->join("imagem_produto ip", "ip.fkproduto=p.idproduto");
        $builder->groupBy("p.idproduto");
        $builder->orderBy("p.idproduto");
        $query = $builder->get();
        return $query->getResult();
    }

    public function saveAs($arr) {
        $builder = $this->db->table("produto");
        $builder->insert($arr);

        return true;
    }
}




// php spark make:model Product_Model

/*
SELECT  p.*, m.nome 'nome_marca', ip.imagem 
FROM produto p INNER JOIN marca m ON m.idmarca = p.fkmarca INNER JOIN imagem_produto ip ON ip.fkproduto = p.idproduto GROUP BY p.idproduto ORDER BY p.idproduto;
*/