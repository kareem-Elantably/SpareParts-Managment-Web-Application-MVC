<?php 
class contactModel extends model{

    public $title="contact model";
    protected $email ;
    protected $complain;
    protected $desc;


    
  $userID = $_SESSION['ID'];
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $street = $_POST['street'];
  $building = $_POST['building'];
  $floor = $_POST['floor'];


    public function __construct()
    {
        parent::__construct();
      $this->email="";
      $this->complain="";
      $this->desc="";

    }


    public function setEmail($email)
    {
        $this->email=$email;

    }
    
    public function setComplain($complain){
        $this->complain=$complain;

    }
    
    public function setDesc($desc){
        $this->desc=$desc;

    }

    public function contactus(){
        $this->dbh->query("INSERT INTO contact (email, complain, description) VALUES(:email, :complain, :description)");
        $this->dbh->bind(':email',$this->email);
        $this->dbh->bind(':complain', $this->complain);
        $this->dbh->bind(':description',$this->desc);
        return $this->dbh->execute();
    }

}