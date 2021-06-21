<?php 
class  dashboard extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
    echo breadcrumbs(); 
    require APPROOT . '/views/inc/sidebar.php';
    
    ?> 
    
    <head>
        <style>
            a{
                color:#FF7A00
            }
            footer{
    bottom:0;
  } 
            </style>
            

            </head>
    <div class="main">




<p>
	Hello <strong>Zoair</strong> (not <strong>Zoair</strong>? <a href="">Log out</a>)</p>

    <p>
	From your account dashboard you can view your <a  href="<?php echo URLROOT . 'public/admin/A_orders'; ?>">ORDERS</a>, manage your <a  href="<?php echo URLROOT . 'public/admin/A_products'; ?>">PRODUCTS</a>.</p>



    </div>

 <?php
require APPROOT . '/views/inc/footer.php';

  }
}
?>
