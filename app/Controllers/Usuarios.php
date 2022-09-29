<?php 

namespace App\Controllers;

class Usuarios extends BaseController{

  public function login()
  {
    $email = $this->request->getPost('email');
    $senha = $this->request->getPost('senha');

    

  }

  public function logout()
  {
    
  }

  public function cadastrar()
  {
    $data['titulo'] = 'Cadastrar';
    $data['acao'] = $Cadastrar;
    echo View('cadastro_form', $data);
  }
}