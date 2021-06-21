<?php
class contact extends view{

 public function output(){
    $title = $this->model->title;
    ?><div style="margin-left: 160px;"><?php require APPROOT . '/views/inc/header.php'; echo breadcrumbs(); ?></div ><?php
    require APPROOT . '/views/inc/sidebar.php';
 ?>



  <div class="row">
    <div class="col-md-12">
      <!-- heading -->
      <h2>ADD <b>PRODUCT</b></h2>
      </div>
      </div>
      
<div class="login-container ">
    
    <form class="form" method="post" action="post" name="Contact" style="padding: 18px;" >
         <div style="margin-top:10px;">


         <div > <label >Name</label></div>
                <input class=" form-control center-block" style="width:60%;border:2px solid #FF7A00;" type="text"  required="true"  name="name" placeholder="Name" autofocus="false">
                
                <div  style=" padding-top: 30px; ">
              <div ><label >Descrption</label></div>
              <textarea class="form-control center-block" style="width:60% ;border:2px solid #FF7A00;" type="text" required="true" name="" ></textarea>
            </div>


                <div > <label >Price</label></div>
                <input class=" form-control center-block" style="width:60% ;border:2px solid #FF7A00;" type="text"  required="true"  name="price" placeholder="Price" autofocus="false">
                
                <div > <label >Image</label></div>
               <div class="d-flex justify-content-center ">
<input type="file" class="form-control" id="customFile" style="width:50% ;margin-bottom:30px; border:2px solid #FF7A00;  background-color: #ffffff0d; height: 33px;" >
    </div>

                <div  style=" padding-bottom: 30px; ">
        
         <div ><label >Category</label></div>
<select class="btn  dropdown-toggle" name="choice" style="width:60%; border:2px solid #FF7A00;">
  <option value="none" selected disabled hidden>Select</option>
  <option value="1">Drive & Transmission </option>
  <option value="2">Exhaust systems</option>
  <option value="3">Air cleaner</option>
  <option value="4">HANDLEBARS & CONTROLS</option>
  <option value="4">Bike protection</option>
  <option value="4">Suspension & Frame</option>
  <option value="4">Brakes</option>
  <option value="4">Engine Parts</option>
</select>


</div> </div>

          
            
            
            
          <input type="submit" class="login-btn" id="Login" name="Login"onsubmit="return false" value="Add" class="login-button">
          
        
      </form>     </div>

 <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>