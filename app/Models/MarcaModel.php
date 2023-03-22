<?php

namespace App\Models;

use CodeIgniter\Model;

class MarcaModel extends Model
{
    protected $table            = 'marca';
    protected $primaryKey       = 'idmarca';
    protected $useAutoIncrement = true;

    protected $allowedFields = ["nome", "logo"];

    public function _construct(){
        parent::_construct();
        $this->db = db_connect();
    }

}
