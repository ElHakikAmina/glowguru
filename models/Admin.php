 <?php
class Admin{
 
    static public function login($data)
    {
        $email=$data['email'];
        try{
            $query='SELECT * from admin where email=:email';
            $stmt =DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$email));
            $user =$stmt->fetch(PDO::FETCH_OBJ);
            return $user;
            if($stmt->execute())
            {
                return 'ok';
            }
        }catch (PDOException $ex)
        {
            echo 'erreur'.$ex->getMessage();
        }
    }
}
?>