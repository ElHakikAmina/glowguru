<?php
$home2 = new HomeController();
?>
<header class=" bg-green">
        <div class="container">
            <div class="row ">
                <div class=" col-6 my-2 text-lg-start text-md-start">
                    <a href="http://localhost/glowguru/index" class="navbar-brand text-white fs-1">
                        <img src="http://localhost/glowguru/views/img/logo.png" style="width:150px; height:60px;" alt="">
                    </a>
                </div>

                <div class="col-6  d-flex text-white align-items-center nav-icons justify-content-end">
                    <?php $home2->navLinks(); ?>
                </div>
            </div>
            
        </div>
    </header>
