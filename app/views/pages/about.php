<?php 
class About extends view{

  public function output(){
    $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
    echo breadcrumbs(); 
 ?>
<body>
<div class="row">
<div class="col-md-12" style="text-align:left; margin-left:20px;margin-bottom:5px;">
			<h2>ABOUT <b>BIGBOYSTOYS</b></h2>
</div>
<div  style="position:relative; left:20%; width:60% ;border:2px solid #FF7A00; border-radius:10px">
<p style="margin-left:20%; margin-right:20%; margin-top:3%;margin-bottom:3%; font-size:15px; "><b>Odiggo  is a one-stop shop for everything that you need for your vehicle, either your looking for a cool accessory or a superior car part then odiggo is your online place to be, as we are trying to help all car owners to find the best quality car parts with the lowest prices possible, along the ease of using technology, therefore our platform fulfills the need and the luxury when it comes to car parts & accessories, finding a car part has never been easy, filtering the prices and availability of all products in seconds.</b></p>		
</div>
<div class="col-md-12" style="text-align: left; margin-top:5%;margin-left:20px;" >
<h2>VISION /<b>/ MISSION</b></h2>
</div>
<div  style="position:relative; left:20%; width:60% ;border:2px solid #FF7A00;margin-bottom:5%;border-radius:10px">
<p style="margin-left:20%; margin-right:20%; margin-top:2%; font-size:15px; "><b>Facebook is a major social media platform with a concise vision statement. It provides a platform to stay in touch with loved ones, and potentially connect to people around the world.</b></p>
<p style="margin-left:20%; margin-right:20%; margin-bottom:2%; font-size:15px;"><b>Tesla: To accelerate the world's transition to sustainable energy.</b><p>		
</div>
</div>
</body>

 <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>