<?php 
class SpecialOrder extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
    echo breadcrumbs(); 
    ?>
    <br><br><br>

<h2 style=" text-align: center;">MAKE YOUR ORDER <b>NOW!!</b></h2>
<br>
    <body>
   
   <form action="post">
    <div class="container" style="background-color:#FF7A00 ; border-radius:10px ">
    <div class="row" style="margin-bottom:30px;">
    <div class="col-sm">
    <label style="font-size: 20px;"><b>Type</b></label>  
    <!--Type drop box -->
    <select class="selectpicker"  data-live-search="true">
    <option value="none" selected disabled hidden>Select</option>
    <option>Spare Part</option>
    <option>Accessories</option>
    <option>Tires</option>
    <option>Engine Oil</option>
    <option>brakes oil</option>
    <option>Lighting</option>
    <option>Shock Absorber</option>
    </select>
    

</div>

<div class="col-sm">
<!--Model Year Drop box-->
<label style="font-size: 20px;"><b>Model Year</b></label>
<select class="selectpicker" data-live-search="true">
    <option value="none" selected disabled hidden>Select</option>
    <option>2021</option>
    <option>2020</option>
    <option>2019</option>
    <option>2018</option>
    <option>2017</option>
    <option>2016</option>
    <option>2015</option>
    <option>2014</option>
    <option>2013</option>
    <option>2012</option>
    <option>2011</option>
    <option>2010</option>
    <option>2009</option>
    <option>2008</option>
    <option>2007</option>
    <option>2006</option>
    </select>

</div>

<div class="col-sm">
<!--Brand-->
<label style="font-size: 20px;"><b>Brand</b></label>
<select class="selectpicker" data-live-search="true"  >
    <option value="none" selected disabled hidden>Select</option>
    <option>Honda</option>
    <option>Kawasaki</option>
    <option>Suzuki</option>
    <option>BMW</option>
    <option>Harley-Davidson</option>
    <option>Benelli</option>
    <option>Yamaha</option>
    </select>
 
    

</div>

<div class="col-sm">
<!--Color-->
<label style="font-size: 20px;"><b>Color</b></label>
<select class="selectpicker" data-live-search="true">
    <option value="none" selected disabled hidden>Select</option>
    <option value="blue">Blue</option>
    <option value="red">Red</option>
    <option value="green">Green</option>
    <option value="orange">Orange</option>
    <option value="yellow">Yellow</option>
    <option value="pink">Pink</option>
    <option value="white">White</option>
    <option value="black">Black</option>
    </select>
    <br>

</div></div>
<div class="d-flex justify-content-center">
<label style="font-size:20px;"><b>Description</b></label>
</div>
<div class="d-flex justify-content-center" style="margin-bottom:40px;" >
<textarea  id="exampleFormControlTextarea1" rows="5" style="width:60%;border-radius:10px; border:10px; border:2px solid #000;"></textarea>
</div>
<div class="d-flex justify-content-center ">
<input type="file" class="form-control" id="customFile" style="width:20% ;margin-bottom:30px; border:2px solid #000;  background-color: #ffffff0d; height: 33px;" >
    </div>
    <div class="d-flex justify-content-center">
    <button class="btn " type="submit" style="margin-bottom:10px; width:90px; border:2px solid #000;  ">Submit</button>
    </div>
     </div>
     </div>
</form>
<div style="margin-top:362px">
</body>
<?php
  require APPROOT . '/views/inc/footer.php';
  }
}
?>   </div>