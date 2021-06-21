<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/About.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }

    public function products()
    {
        $viewPath = VIEWS_PATH . 'pages/products.php';
        require_once $viewPath;
        $productView = new products($this->getModel(), $this);
        $productView->output();
    }

    public function errorr()
    {
        $viewPath = VIEWS_PATH . 'pages/Errorr.php';
        require_once $viewPath;
        $errorrView = new Errorr($this->getModel(), $this);
        $errorrView->output();
    }
    
    public function dashboard()
    {
        $viewPath = VIEWS_PATH . 'pages/dashboard.php';
        require_once $viewPath;
        $dashboardView = new Dashboard($this->getModel(), $this);
        $dashboardView->output();
    }

    public function contact(){
        $contactModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $contactModel->setEmail(trim($_POST['email']));
            $contactModel->setComplain(trim($_POST['choice']));
            $contactModel->setDesc(trim($_POST['desc']));

            if($contactModel->contactus()){
                echo '<script>';  
                echo 'alert("Complain sent successfully!!!")';  
                echo '</script>'; 
            }
            else{
                die('Error has occured');
            }


        }
        $viewPath=VIEWS_PATH. 'pages/contact.php';
        require_once $viewPath;
        $contactView=new contact($this->getModel(),$this);
        $contactView->output();

    }



    public function checkout(){
        $chechoytModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $checkoutModel->setEmail(trim($_POST['email']));
            $checkoutModel->setComplain(trim($_POST['choice']));
            $checkoutModel->setDesc(trim($_POST['desc']));

            if($checkoutModel->checkout()){
                echo '<script>';  
                echo 'alert("successfully!!!")';  
                echo '</script>'; 
            }
            else{
                die('Error has occured');
            }


        }
        $viewPath=VIEWS_PATH. 'pages/checkout.php';
        require_once $viewPath;
        $contactView=new checkout($this->getModel(),$this);
        $contactView->output();

    }


        
    public function add_product(){
        $add_producttModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $add_producttModel->setName(trim($_POST['name']));
            $add_producttModel->setDesc(trim($_POST['desc']));
            $add_producttModel->setPrice(trim($_POST['price']));
            $add_producttModel->setimage(trim($_POST['imgage']));
            $add_producttModel->setFeatured(trim($_POST['featured']));

            if($contactModel->contactus()){
                echo '<script>';  
                echo 'alert("Item added successfully!!!")';  
                echo '</script>'; 
            }
            else{
                die('Error has occured');
            }


        }
        $viewPath=VIEWS_PATH. 'admin/add_product.php';
        require_once $viewPath;
        $add_productView=new contact($this->getModel(),$this);
        $add_productView->output();




    }
    public function cart()
    {
        
        $cartModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $cartModel->readCart($_SESSION['ID']);
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'pages/cart.php';
        require_once $viewPath;
        $cartView = new Cart($this->getModel(), $this);
        $cartView->output();
        

    }
public function SpecialOrder()
{
    $viewPath = VIEWS_PATH . 'pages/SpecialOrder.php';
    require_once $viewPath;
    $cartView = new specialorder($this->getModel(), $this);
    $cartView->output();
}
public function productdescription()
{
    $viewPath = VIEWS_PATH . 'pages/ProductDescription.php';
    require_once $viewPath;
    $cartView = new productdescription($this->getModel(), $this);
    $cartView->output();
}
public function A_products()
{
    $p = $this->getModel();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //process form
        $p->deleteProduct(trim($_POST['id']));


    }
    $viewPath = VIEWS_PATH . 'admin/A_products.php';
    require_once $viewPath;
    $adminView = new A_products($this->getModel(), $this);
    $adminView->output();
}


public function A_orders()
{
    $viewPath = VIEWS_PATH . 'admin/A_orders.php';
    require_once $viewPath;
    $adminOrdersView = new A_orders($this->getModel(), $this);
    $adminOrdersView->output();
}

public function A_userview()
{
    $viewPath = VIEWS_PATH . 'admin/A_userview.php';
    require_once $viewPath;
    $adminuserview = new A_Userview($this->getModel(), $this);
    $adminuserview->output();
}


public function Update_order()
    {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $registerModel->setPName(trim($_POST['Pname']));
            $registerModel->setPDescription(trim($_POST['Pdescription']));
            $registerModel->setPPrice(trim($_POST['age']));

        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'admin/A_orders.php';
        require_once $viewPath;
        $adminView = new A_orders($this->getModel(), $this);
        $adminView->output();
    }

}
