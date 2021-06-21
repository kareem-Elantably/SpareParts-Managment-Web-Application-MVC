<?php
class A_productsModel extends model{
public $title="Products";


   
    protected $Pname;
    protected $Pdescription;
    protected $Pprice;


public function readProd()
{
    $this->dbh->query("SELECT * FROM products");
    return $this->dbh->resultSet();
}

    public function __construct()
    {
        parent::__construct();
        $this->Pname     = "";
        $this->Pdescription = "";
        $this->Pprice = "";
    }

   
    public function setPName($Pname)
    {
        $this->Pname = $Pname;
    }
    public function Pdescriptio($Pdescription)
    {
        $this->Pdescription = $Pdescription;
    }
    public function setPprice($Pprice)
    {
        $this->Pprice = $Pprice;
    }


    
function Uproduct() {

    $this->dbh->query= "UPDATE customers SET description = ':pdesciption' , price = ':pprice' WHERE name = ':Pname' ";
    $this->dbh->bind(':pname', $this->Pname);
        $this->dbh->bind(':pdesciption', $this->Pdescription);
        $this->dbh->bind(':pprice', $this->Pprice);
    return $this->dbh->execute();

}
}







?>

