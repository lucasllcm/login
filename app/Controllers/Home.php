<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();

        $msgErro = $session->getFlashdata('msgErro');

        $email = $session->get('email');

        if( $email != null ){
            return redirect()->to(base_url('restrita'));
        }

        $dadosView = [
            'msgErro' => $msgErro
        ];

        //login
        return view('login_form');
    }

    public function restrita()
    {
        $session = session();

        $email = $session->get('email');

        if( $email == null ){

            $session->setFlashdata('msgErro', 'Faca o login primeiro!');
            return redirect()->to(base_url('/'));
        }        

        //restrita
        return view('area_restrita'); 
    }

}