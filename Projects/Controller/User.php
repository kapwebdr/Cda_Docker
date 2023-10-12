<?php
namespace Controller;

use Model\User as mUser;
use Controller\View;

class User extends Main
{
    public function Index()
    {
        mUser::Find();
    }
    
}