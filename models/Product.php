<?php
class Product{
    public static function TotalProductsInStock()
    {
        $query="SELECT sum(quantity) as total FROM products ";
        $stmt =DB::connect()->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['total'];
    }
    public static function TotalOfArticles()
    {
        $query="SELECT * FROM products ";
        $stmt =DB::connect()->prepare($query);
        $stmt->execute();
        $count = $stmt->rowCount();
        return $count;
    }
    public static function totalOutOfStock()
    {
        $query="SELECT * FROM products where quantity='0'";
        $stmt =DB::connect()->prepare($query);
        $stmt->execute();
        $count = $stmt->rowCount();
        return $count;
    }
    static public function getProductEndsSoon()
    {
        $stmt = DB::connect()->prepare("SELECT * FROM products where quantity!='0' order by quantity asc");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
        $stmt->close();
        $stmt=null;
    }
    static public function LargestQuantityProduct(){
        $stmt = DB::connect()->prepare('SELECT * FROM products order by quantity desc');
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
        $stmt->close();
        $stmt=null;
    }
    static public function getProduct($data)
    {
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM products WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));
            $product = $stmt->fetch(PDO::FETCH_OBJ);
            return $product;
        }catch(PDOException $ex)
        {
            echo 'erreur'.$ex->getMessage();
        }
    }
    static public function update($data)
    {
        $stmt = DB::connect()->prepare('update  products SET
        name = :name,buying_price = :buying_price,final_price = :final_price,
        quantity = :quantity,description = :description,photo = :photo where id = :id
            ');
        $stmt->bindParam(':id',$data['id']);    
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':buying_price',$data['buying_price']);
        $stmt->bindParam(':final_price',$data['final_price']);
        $stmt->bindParam(':quantity',$data['quantity']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':photo',$data['image']);

        if($stmt->execute())
        {
            return 'ok';
        }else
        {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM products order by id desc');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
    static public function add($data)
    {






        foreach ($data as $product) {
            $stmt = DB::connect()->prepare("INSERT INTO products(name,buying_price,final_price,quantity,description,photo)
             VALUES (:name,:buying_price,:final_price,:quantity,:description,:photo)");
            $stmt->bindParam(':name', $product['name'], PDO::PARAM_STR);
            $stmt->bindParam(':buying_price', $product['buying_price'], PDO::PARAM_STR);
            $stmt->bindParam(':final_price', $product['final_price'], PDO::PARAM_STR);
            $stmt->bindParam(':quantity', $product['quantity'], PDO::PARAM_STR);
            $stmt->bindParam(':description', $product['description'], PDO::PARAM_STR);
            $stmt->bindParam(':photo', $product['image'], PDO::PARAM_STR);
             $stmt->execute();
             //die(print_r($stmt));
            // $stmt->close();
             $stmt = null;
        }







        // $stmt = DB::connect()->prepare('insert into products(
        //     name,buying_price,final_price,quantity,description,photo
        // )
        // VALUES (
        //     :name,:buying_price,:final_price,:quantity,:description,:photo
        // )
        // ');
        // $stmt->bindParam(':name',$data['name']);
        // $stmt->bindParam(':buying_price',$data['buying_price']);
        // $stmt->bindParam(':final_price',$data['final_price']);
        // $stmt->bindParam(':quantity',$data['quantity']);
        // $stmt->bindParam(':description',$data['description']);
        // $stmt->bindParam(':photo',$data['image']);
        // if($stmt->execute())
        // {
        //     return 'ok';
        // }else
        // {
        //     return 'error';
        // }
        // $stmt->close();
        // $stmt = null;
    }
    static public function delete($data)
    {
        $id = $data['id'];
        try{
            $query = 'delete FROM products WHERE id=:id';
            $stmt=DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            return 'ok';
        }catch(PDOException $ex)
        {
            echo 'erreur'.$ex->getMessage();
        }
    }

}
?>