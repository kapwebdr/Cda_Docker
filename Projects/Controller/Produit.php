<?php
namespace Controller;

use Model\Produit as ProduitModel;
use Controller\View;

class Produit extends Main
{
    public function getProduit($params=[]) //$params = ['id'=>2]
    {
        $model      = new ProduitModel();
        $produit    = $model->getProduit($params['id']);

        View::Init('smarty');
        View::Set('h1','Coucou');
        
        
        View::Set('produit',$produit);
        View::Display('Produit');
    }
}

?>