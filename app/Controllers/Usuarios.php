<?php 

namespace App\Controllers;

use App\Controllers\BaseController;

class Usuarios extends BaseController{

  public function login()
  {

    $session = session();

    $email = $this->request->getPost('email');
    $senha = $this->request->getPost('senha');

    if ($email == 'Lucas@gmail.com' && 
        $senha == '123456'){

          $dadosSessao = [
            'email' => 'Lucas@gmail.com',
            'nome' => 'Lucas'
          ];

          $session->set($dadosSessao);

          return redirect()->to( base_url('restrita'));

    }
    else{

      $session->setFlashdata('msgErro', 'Usuario ou senha invalidos!');

      return redirect()->to(base_url('/'));
    }
  }

  public function logout()
  {
    $session = session();
    $session->remove(['email', 'nome']);
 
    return redirect()->to( base_url('/')  );
  }
}