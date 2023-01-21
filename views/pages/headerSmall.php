<?php
$home2 = new HomeController();
?>
<header class=" bg-green">
        <div class="container">
            <div class="row ">
                <div class="col-sm-6 text-center text-lg-start text-md-start">
                    <a href="http://localhost/glowguru/index" class="navbar-brand text-white fs-1">
                        <img src="http://localhost/glowguru/views/img/logo.png" style="width:150px; height:80px;" alt="">
                        <!-- GlowGuru <i class="fa fa-cunbe"></i> -->
                    </a>
                </div>

                <div class="col-sm-6  d-flex text-white align-items-center nav-icons justify-content-end">
                    <!-- <div class="input-group me-5" style="max-width:400px;">
                        <input type="text" class="form-control" style="max-width:70%;" placeholder="Enter Your Email...">
                        <button class="btn btn-green search-button" style="max-width:30%;" type="submit">Search</button>
                    </div> -->
                    <?php $home2->navLinks(); ?>
                </div>
            </div>
            
        </div>
    </header>
