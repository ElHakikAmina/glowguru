<?php
class ProductController{
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
            $logo_club=file_get_contents($_FILES["image"]["tmp_name"]);
            $data = array(
                'id'=>$_POST['id'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
               'image'=> $logo_club ,
               
            );
            $result = Product::update($data);
            header("location:newarrival");
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
    public function deleteProduct(){
        if(isset($_POST['id']))
        {
            $data['id']=$_POST['id'];
            $result = Product::delete($data);
            if($result === 'ok')
            {
               // Session::set('success','Employe supprimer');
                
            }else{
                echo $result;
            }
        }
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
            $image_product=file_get_contents($_FILES["image"]["tmp_name"]);
            $data = array(
                'name' => $_POST['name'],
                'buying_price' => $_POST['buying_price'],
                'final_price' => $_POST['final_price'],
                'quantity' => $_POST['quantity'],
                'description' => $_POST['description'],
               'image'=> $image_product ,
            );
            $result = Product ::add($data);
            header("location:dashboard");
        }
    }
}

?>