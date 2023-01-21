<?php
class AdminController{
    public function auth()
    {
        if(isset($_POST['btn-login']))
        {
            $data['email'] = $_POST['email'];
            $result = Admin::login($data);
            if($result->username === $_POST['username'] &&
            SHA1($_POST['password']) === $result->password
            )
            
            {
                $_SESSION['logged']=true;
                $_SESSION['full_name']=$result->full_name;
                //Redirect::to('home');
				header('location:http://localhost/glowguru/index');
            }else{
                //Session::set('error','Pseudo ou mot de passe est incorrect');
                //Redirect::to('login');

				header('location:login');
            }
        }
    }

    static public function logout()
    {
        session_destroy();
    }
    public function isAdminConnected()
   {
    if(!isset($_SESSION['logged']) || $_SESSION['logged']!=true || !isset($_SESSION['full_name'])) 
    header('location:index');
   }
   public function isAdminDisconnected()
   {
    if(isset($_SESSION['logged']) && $_SESSION['logged']==true && isset($_SESSION['full_name'])) 
    header('location:index');
   }
   
}
?>