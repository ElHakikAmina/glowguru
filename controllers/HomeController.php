<?php
class HomeController
{
    
    public function router()
   {
        $page='';
        if(isset($_GET['page']) and !empty($_GET['page']))
        {
            $page=htmlspecialchars($_GET['page']);
        }
        $pages=['blog','add','dashboard','login','product','index','modifyProduct'];
        if(in_array($page,$pages))
        {
            //$home->index($page);
            include ('views/'.$page.'.php');
        }else if($page=='logout')
        {
            include ('views/pages/'.$page.'.php');
        }else{
            include ('views/404.php');
        }
    }
    //
    public function navLinks()
    {
        if(isset($_SESSION['logged']) && $_SESSION['logged']==true && isset($_SESSION['full_name']))
        {
            echo '
            <a href="http://localhost/glowguru/dashboard">
                        <i class="fas fa-chart-bar text-white px-2"></i>
            </a>
                    <a href="http://localhost/glowguru/add">
                        <i class="fa fa-plus text-white px-2" ></i>
                    </a>
                    <a href="http://localhost/glowguru/logout">
                        <i class="fa fa-sign-out text-white px-2" aria-hidden="true"></i>
                        </a>
            ';
        }else{
            echo '<a href="http://localhost/glowguru/login" class="text-white px-2 fw-bold text-decoration-none">
                    Connexion
                </a>';
        }
    }
}
?>