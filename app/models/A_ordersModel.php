<?php
class A_ordersModel extends model{
public $title="Orderes";




public function readorder()
{
    $this->dbh->query("SELECT * FROM orders");
    return $this->dbh->resultSet();
    $this->dbh->query("SELECT * FROM users");
    return $this->dbh->resultSet();
    $this->dbh->query("SELECT * FROM products");
    return $this->dbh->resultSet();
}



}


?>