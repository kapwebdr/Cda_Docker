<?php
namespace Model;

use Model\Db;

class Produit extends Db
{
    protected $table = 'produit';  
    
    public function getProduit(int $id):array
    {
        $sql = 'Select * from produit where IdProduit=:Id';
        return Db::FindOne($sql,[':Id'=>$id]);
    }
}
?>