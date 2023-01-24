<?php
class AdminController{
    public function auth()
    {
        if(isset($_POST['btn-login']))
        {
            if(!empty($_POST['email']) && !empty($_POST['password']))
            {
                $data['email'] = $_POST['email'];
                $data['password'] = SHA1($_POST['password']);
                $result = Admin::login($data);
                if($result ==1){
                    $_SESSION['logged']=true;
                    $_SESSION['full_name']="admin";
                    header('location:http://localhost/glowguru/index');
                }else{
                    header('location:http://localhost/glowguru/login/notIdentic');
                }            
            }else{
                header('location:http://localhost/glowguru/login/empty');
            }
        }
    }
    public function LoginError()
    {
        if (isset($_GET['id']))
        {
            $id=$_GET['id'];
            if($id=="empty") echo "All the input must be filled";
            elseif($id=="notIdentic") echo "The email or the password is wrong";
        } 
    }
    static public function logout()
    {
        session_destroy();
    }
    public function isAdminConnected()
   {
        if(!isset($_SESSION['logged']) || $_SESSION['logged']!=true || !isset($_SESSION['full_name'])) 
        header('location:http://localhost/glowguru/index');
   }
   public function isAdminDisconnected()
   {
        if(isset($_SESSION['logged']) && $_SESSION['logged']==true && isset($_SESSION['full_name'])) 
        header('location:http://localhost/glowguru/index');
   }
   
}
?>