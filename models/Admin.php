 <?php
class Admin{
    static public function login($data)
    {
        $email=$data['email'];
        $password=$data['password'];
        try{
            $query='SELECT * from admin where email=:email and password=:password';
            $stmt =DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$email,":password"=>$password));
            $stmt->execute();
            $count = $stmt->rowCount();
            return $count;
        }catch (PDOException $ex)
        {
            echo 'erreur'.$ex->getMessage();
        }
    }
}
?>