<?php
namespace Controller;

//use Model\User;
use Controller\View;

class Home extends Main
{
    public function Index()
    {
        // $User           = new User();
        // $User->nom      = 'RICHARD';
        // $User->prenom   = 'Damien';
        // $User->Save();
        View::Set('title','Titre de la page');
        View::Set('h1','Bonjour le monde !!');
        View::Display('Home');
    }
    public function Test($params=[])
    {
        echo (isset($params['id']))?'Bonjour : '.$params['id']:'Bonjour invité';
    }
}