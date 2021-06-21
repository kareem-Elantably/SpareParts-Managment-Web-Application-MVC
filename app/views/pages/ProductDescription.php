<?php 
class ProductDescription extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
	echo breadcrumbs(); 
	$productID=$_POST['addtocart'];
    ?>
    <br><br><br>
    <head>
		<script>
	$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
		
		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		var quantity = parseInt($('#quantity').val());
		
		// If is not undefined
			
			$('#quantity').val(quantity + 1);

		  
			// Increment
		
	});

	 $('.quantity-left-minus').click(function(e){
		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		var quantity = parseInt($('#quantity').val());
		
		// If is not undefined
	  
			// Increment
			if(quantity>0){
			$('#quantity').val(quantity - 1);
			}
	});
	
});</script>
	</head>
<body>

 
<div class="row" >

<div class="col-md-12">
			<h2>PRODUCT<b> NAME</b></h2>
    </div>
<div class="card" style="margin-left:5%; width:30%;height:30% ;border:2px solid #FF7A00;">
  <img src="<?php echo URLROOT . 'images/im.png'; ?>" alt="Denim Jeans" style="width:100% hieght:100%">    
</div>

<div class="col-sm" style="margin-top:4%; margin-left:6%; text-align:left; margin-right:10%;">

        <br>
        <p class="price" style="font-size:30px">$19.99</p>
        <div style="font-size:20px ">
        <p><b>Avalability:</b> in stock  </p>
        <p><b>Product code:</b> cs000 </p>
        <p><b>Tags:</b> spare parts  </p>

        <div >
<button class="cart-btn" style="border-radius:15px; font-size:20px; margin-right:10px; margin-left:12px;">Add to Cart</button> 


		

                        <div class="col-lg-3">
                                        <div class="input-group" >
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus  btn  btn-number"  data-type="minus" data-field="">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100" >
                                  
									<span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn  btn-number" data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>
                        </div>


</div>
</div>


<h3 style="text-align:left; font-size:30px; margin-top:5%;"><b>Desciption</b></h3>
<p style="font-size:20px"> This is description of the product This is description of the product This is description of the product  </p>

</div>

</div>
</div>  
<div class="row">
		<div class="col-md-12">
			<h2>REALTIVE<b> PRODUCTS</b></h2>
      
      <hr class="hr2">

	  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
			


  
   
		 	<div class="item active">
		<?php	
		$count=0;
			foreach($this->model->readProd() as $product){
    	

		 while($count%4==0){
		if($count==0){
			break;
		}
		?>
		</div>
			<div class="item ">
			
<?php

	break;
		 }
?>
						

						
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . $product->img; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4><?php echo $product->name?></h4>
									<p class="item-price"><strike>$315.00</strike> <span><?php echo $product->price?></span></p></a>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					
				
				<?php
			$count++;
				
				}
				?>

		</div>
				
				
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control left" style=" background-image: linear-gradient(to right,rgba(0,0,0,.0001) 0,rgb(0 0 0 / 0%) 100%);" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right "  style=" background-image: linear-gradient(to right,rgba(0,0,0,.0001) 0,rgb(0 0 0 / 0%) 100%);"href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
	</div>
    </body>
<?php
  require APPROOT . '/views/inc/footer.php';
  }
}
?>


