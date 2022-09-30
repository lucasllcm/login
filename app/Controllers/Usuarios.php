<?php 

namespace App\Controllers;

use App\Controllers\BaseController;

class Usuarios extends BaseController{

  public function login()
  {

    //inicializar a sessao
    $session = session();

    //faz o login no sistema
    $email = $this->request->getPost('email');
    $senha = $this->request->getPost('senha');

    //verificar se os dados estao ok
    if ($email == 'Lucas@gmail.com' && 
        $senha == '123456'){

          //gravar os dados do usuario na sessao
          $dadosSessao = [
            'email' => 'Lucas@gmail.com',
            'nome' => 'Lucas'
          ];

          $session->set($dadosSessao);

          //encaminha para area restrita
          return redirect()->to( base_url('restrita'));

    }
    else{

      //redireciona para pagina de login iformando um erro
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