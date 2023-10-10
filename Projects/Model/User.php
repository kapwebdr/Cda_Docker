<?php
namespace Model;

use Model\Db;

class User extends Db
{
    protected $table = 'user';  
    
    public function getUsers()
    {
        $rq = self::$db->prepare('Select * from ...');
        $rq->execute($this->datas);
        return $rq->fetchAll();
    }
}

?>
