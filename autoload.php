<?php
spl_autoload_register('autoload');
function autoload ($class_name)
{
    $array_path=array(
        'models/',
        'controllers/'
    );

  // die($class_name);
    $parts=explode('\\',$class_name);
    $name=array_pop($parts);
    foreach($array_path as $path)
    {
        $file = sprintf($path.'%s.php',$class_name);
        if(is_file($file))
        {
            include_once $file;
        }
    }
}
?>