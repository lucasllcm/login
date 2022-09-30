<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model {

  protected $table = 'usuarios';
  protected $primaryKey = 'id';
  protected $useAutoIncrement = true;
  protected $allowedFields = [
    'nome', 
    'email', 
    'senha'
  ];
  protected $returnType = 'array';
  protected $useSoftDeletes = false;
  protected $useTimestamps = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
  protected $skipValidation = false;
  protected $validationRules    = [];
  protected $validationMessages = [];
}

