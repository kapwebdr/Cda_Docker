<?php
namespace Controller;

use Model\User;

class Home extends Main
{
    public function Index()
    {
        $User           = new User();
        $User->nom      = 'RICHARD';
        $User->prenom   = 'Damien';
        $User->Save();
    }
    public function Test($params=[])
    {
        echo (isset($params['id']))?'Bonjour : '.$params['id']:'Bonjour invité';
    }
}