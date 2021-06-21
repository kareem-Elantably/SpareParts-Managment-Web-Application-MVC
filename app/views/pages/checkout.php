<?php 
class checkout extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
	echo breadcrumbs(); 
    ?>

<head>
<link rel="stylesheet" href="<?php echo URLROOT; ?>public/css/checkout.css">
</head>

<div class="row">
  <div class="col-25">
    <div class="container">

<p> <img style="float:left" src="<?php echo URLROOT . 'images/p1.jpg'; ?>" width="60" height="60"> 
<a style="float:left"  href="">شكمان</a> <span class="price">500 LE</span> <br><span class="Quantity"  style="float:left" >Quantity: 20</span></p>



      <p> <span class="price" style="color:black"><b>TOTAL: 500 LE</b></span></p>
 


  </div>
  </div>
  <div class="col-75">
    <div class="container">
      <form action="" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text"  id="fname" name="fullname"  placeholder="Full name" required="true" pattern="[A-Za-z\s+]{3,10}" title="Please enter a valid Name.">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter a valid email.">
            <label for="phone"><i class="fa fa-phone"></i> Phone</label>
            <input type="text" id="phone" name="phone" placeholder="01*********" required="true" pattern="[0-9]{11}" title="Please enter a valid phone number.">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Cairo" required="true" pattern="[A-Za-z\s+]{1,100}" title="Please enter a valid city.">
            <label for="adr"><i class="fa fa-address-card-o"></i> Area </label>
            <input type="text" id="adr" name="address" placeholder="Nasr city,elzamalek.." required="true" pattern="[A-Za-z\s+]{1,100}" title="Please enter a valid address.">
            <label for="str"><i class="fa fa-road"></i> Street</label>
            <input type="text" id="str" name="street" placeholder="Mostafa elnahas.." required="true" pattern="[A-Za-z\s+]{1,100}" title="Please enter a valid Street Name.">
            <label for="bld"><i class="fa fa-building"></i> Building No</label>
            <input type="text" class="a" id="bld" name="building" placeholder="1,2.." required="true" pattern="[0-9]{1,10}" title="Please enter a valid building number.">
            <label for="floor"> Floor No</label>
            <input type="text" class="a" id="floor" name="floor" placeholder="1,2.." required="true" pattern="[0-9]{1,10}" title="Please enter a valid floor number.">
            
           
         

          
            <h3>Payment</h3>
            <label>
          <input type="checkbox" checked="checked" name="sameadr"> Cash on delivery
        </label>
        
            
          </div>
          
        </div>
        
        <form action="checkout">
        <input type="submit" name="order" value="Order" class="btn">
         </form>


       
      </form>
    </div>
  </div>

</div>






<?php
  require APPROOT . '/views/inc/footer.php';
  }
}
?>



