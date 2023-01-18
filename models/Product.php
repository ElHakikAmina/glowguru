<?php
class Product{
    static public function getProductEndsSoon()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM products order by quantity asc');
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
        $stmt = DB::connect()->prepare('SELECT * FROM products');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
    static public function add($data)
    {
        $stmt = DB::connect()->prepare('insert into products(
            name,buying_price,final_price,quantity,description,photo
        )
        VALUES (
            :name,:buying_price,:final_price,:quantity,:description,:photo
        )
        ');
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