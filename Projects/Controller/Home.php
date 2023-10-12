<?php
namespace Controller;

use Model\User;
use Controller\View;

class Home extends Main
{
    public function Index()
    {
        // $User           = new User();
        // $User->nom      = 'RICHARD';
        // $User->prenom   = 'Damien';
        // $User->Save();

        $User           = new User();
        $Users          = $User->Find('Select * from user order by nom',[]);
        
        View::Init('php');
        View::Set('title','Titre de la page');
        View::Set('h1','Bonjour le monde !!');
        View::Set('users',$Users);
        View::Display('Home');

        View::Init('smarty');
        View::Set('title','Titre de la page');
        View::Set('h1','Bonjour le monde !!');
        View::Set('users',$Users);
        View::Display('Home');

        View::Init('twig');
        View::Set('title','Titre de la page');
        View::Set('h1','Bonjour le monde !!');
        View::Set('users',$Users);
        View::Display('Home');
    }
    public function Test($params=[])
    {
        echo (isset($params['id']))?'Bonjour : '.$params['id']:'Bonjour invité';
    }
}