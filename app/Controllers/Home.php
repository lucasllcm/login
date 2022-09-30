<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //se ja estiver logado ir para area restrita
        $session = session();

        //se houver alguma mensagem de erro ela deve ser passada para a view
        $msgErro = $session->getFlashdata('msgErro');
        $email = $session->get('email');

        //se existia email, ja estava logado
        if( $email != null ){
            //redireciona para area restrita
            return redirect()->to(base_url('restrita'));
        }

         //dados a serem enviados para a view
        $dadosView = [
            'msgErro' => $msgErro
        ];

        //página de login
        return view('login_form', $dadosView);
    }

    public function cadastro()
    {
		return view('cadastro');
	}

    public function salvar(){
		$usuariosModel = new \App\Models\UsuariosModel();
		$data['erros'] = '';
		
		$email = $this->request->getPost ('email');
		$senha = $this->request->getPost ('senha');
		
		$usuarios = [
			'email' => $email,
			'senha' => $senha,
		];
		
		if($usuariosModel->insert ($usuarios)){
			$data['erros'] = '';
		}
		else{
			$data['erros'] = $usuariosModel->errors();
		}

		return redirect()->to(base_url('cadastro'));
	
	}

    public function restrita()
    {
        //inicializando a sessao
        $session = session();

        //so posso acessar esta area se estiver logado
        $email = $session->get('email');

        //se nao estiver logado redireciona para tela de login
		//E EXIBIR UMA MENSAGEM IFORMANDO QUE NAO ESTA LOGADO
        if( $email == null ){

            $session->setFlashdata('msgErro', 'Faca o login primeiro!');
            return redirect()->to(base_url('/'));
        }        

        //restrita
        return view('area_restrita'); 
    }

}