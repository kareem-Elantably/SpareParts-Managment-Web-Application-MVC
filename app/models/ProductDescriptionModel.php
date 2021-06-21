<?php
require_once 'ProductDescriptionModel.php';
class ProductDescriptionModel extends model
{
    public  $title = 'ProductDescription';
        
	public function readProd(){

        $this->dbh->query("SELECT * FROM products");
        return $this->dbh->resultSet();
        
        }
    
}