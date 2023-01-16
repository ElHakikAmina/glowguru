<?php
if(isset($_POST['btn-login']))
{
	$admin = new AdminController();
$admin->auth();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/glowguru/views/style/login.css">
</head>
<body>
    <header class=" bg-green">
        <div class="container">
            <div class="row ">
                <div class="col-sm-6 text-center text-lg-start text-md-start">
                    <a href="index.html" class="navbar-brand text-white fs-1">
                        GlowGuru <i class="fa fa-cunbe"></i>
                    </a>
                </div>

                <div class="col-sm-6  d-flex text-white align-items-center nav-icons justify-content-end">
                    <div class="input-group me-5" style="max-width:400px;">
                        <input type="text" class="form-control" style="max-width:70%;" placeholder="Enter Your Email...">
                        <button class="btn btn-green search-button" style="max-width:30%;" type="submit">subscribe</button>
                    </div>
                    <a href="login.html" class="text-white px-2 fw-bold text-decoration-none">
                        Connexion
                    </a>
                    
                    <a href="#">
                        <i class="fas fa-chart-bar text-white px-2"></i>
                    </a>
                    <a href="add.html">
                        <i class="fa fa-plus text-white px-2" ></i>
                    </a>
                    <a href="#">
                        <i class="fa-solid fa-cart-shopping text-white px-2"></i>
                    </a>
                </div>
            </div>
            
        </div>
    </header>
    


    <section class="vh-100" style="background-color: #f6a0ad;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="http://localhost/glowguru/views/img/makeup.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                     
                      <form action="#" method="post">
      
                        
      
                        <h2 class="fw-normal mb-3 pb-3 text-center " style="letter-spacing: 1px;">Log in</h2>
      
                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" placeholder="Email ..."/>
                          <label class="form-label" for="form2Example17">Email address</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" placeholder="password ..." />
                          <label class="form-label" for="form2Example27">Password</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <input type="submit" value="Login" class="btn  btn-lg btn-block btn-green" name="btn-login" >
                        </div>
      
                        
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



    <footer class="bg-green">
        <div class="container">
            <div class="row pt-4 text-white">
                <div class="col-md-6 text-center text-md-start">
                    <p class=""> <span class="fw-bold">Destiny &copy;</span> Copyright 2021</p>
                </div>
                <div class="col-md-6 d-flex justify-content-center justify-content-md-end">
                    <ul class="d-flex p-0">
                        <li><i class="fab fa-facebook-f px-2"></i></li>
                        <li><i class="fab fa-twitter px-2"></i></li>
                        <li><i class="fab fa-instagram px-2"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>