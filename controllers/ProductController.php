<?php
class ProductController{
    public function TotalProductsInStock(){return Product::TotalProductsInStock(); }
    public function TotalOfArticles(){return Product::TotalOfArticles(); }
    public function totalOutOfStock(){return Product::totalOutOfStock(); }
    public function deleteProduct(){
        if(isset($_GET['id']))
        {
            $data['id']=$_GET['id'];
            $result = Product::delete($data);
            if($result === 'ok')
            {
               header("location:http://localhost/glowguru/dashboard");
                
            }
            
        }
        
    }
    public function getProductEndsSoon()
    {
        return $products=Product::getProductEndsSoon();
         
    }
    public function LargestQuantityProduct(){
        return $products=Product::LargestQuantityProduct();
         
    }
    public function updateProduct()
    {
        if(isset($_POST['update']))
        {
            $image_product=file_get_contents($_FILES["image"]["tmp_name"]);
            $data = array(
                'id' =>$_GET['id'],
                'name' => $_POST['name'],
                'buying_price' => $_POST['buying_price'],
                'final_price' => $_POST['final_price'],
                'quantity' => $_POST['quantity'],
                'description' => $_POST['description'],
               'image'=> $image_product ,
               
            );
            $result = Product::update($data);
            header("location:http://localhost/glowguru/product/".$_GET['id']);
            if($result === 'ok')
            {
                //Session::set('success','Employe modifier');
                //Redirect::to('home');
            }else
            {
                echo $result;
            }
        }
    }
    public function getOneProduct()
    {
        if(isset($_GET['id']))
        {
            $data = array(
                'id' =>$_GET['id']
            );
        }
        $product = Product::getProduct($data);
        return $product;
    }
    public function getAllProduct()
    {
        $products=Product::getAll();
        return $products;
    }
    public function addProduct()
    {
        if(isset($_POST['add']))
        {
            //$image_product=file_get_contents($_FILES["image"]["tmp_name"]);
            $data = array(
                
            //     'name' => $_POST['name'],
            //     'buying_price' => $_POST['buying_price'],
            //     'final_price' => $_POST['final_price'],
            //     'quantity' => $_POST['quantity'],
            //     'description' => $_POST['description'],
            //    'image'=> $image_product ,
            );
            foreach ($_POST['name'] as $key => $name) {
                $data[$key]['name'] = $name;
                $data[$key]['description'] = $_POST['description'][$key];
                $data[$key]['quantity'] = $_POST['quantity'][$key];
                $data[$key]['buying_price'] = $_POST['buying_price'][$key];
                $data[$key]['final_price'] = $_POST['final_price'][$key];
            }
            foreach ($_FILES['image']['tmp_name'] as $key => $image) {
                $data[$key]['image'] = file_get_contents($image);
            }
            $result = Product ::add($data);
            header("location:dashboard");
        }
    }
}

?>