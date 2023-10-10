<?php
namespace Model;

use Model\Db;

class User extends Db
{
    protected $table = 'user';  
    
    public function getUsers()
    {
        return Db::Select('Select * from ...',[]);
    }
}

?>
