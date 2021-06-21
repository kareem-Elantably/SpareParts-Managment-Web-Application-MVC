<?php
class A_userviewModel extends model{
public $title="Orderes";




public function readuser()
{

    $this->dbh->query("SELECT * FROM users");
    return $this->dbh->resultSet();
    
}



}


?>