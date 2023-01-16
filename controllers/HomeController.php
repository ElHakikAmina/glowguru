<?php
class HomeController
{
    public function __construct()
    {
        $this->router();
    }
    //
    public function router()
   {
        $page='';
        if(isset($_GET['page']) and !empty($_GET['page']))
        {
            $page=htmlspecialchars($_GET['page']);
        }
        $pages=['add','dashboard','statistic','login','product','index','modifyProduct','search'];
        if(in_array($page,$pages))
        {
            //$home->index($page);
            include ('views/'.$page.'.php');
        }else if($page=='logout')
        {
            include ('controllers/'.$page.'.php');
        }
    }

}
?>