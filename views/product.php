
<?php

if(isset($_GET['id']))
{
    $existProduct = new ProductController();
    $product = $existProduct->getOneProduct();
}else
{
  header("location:http://localhost/glowguru/index");
  
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
    <link rel="stylesheet" href="http://localhost/glowguru/views/style/product.css">
</head>
<body>
<?php include './views/pages/headerSmall.php' ?>
    


    <section class="col-lg-11  mx-auto my-4 row">
        <!-- Product Image -->
        <div class="col-md-5">
            <img class="img-fluid" src="http://localhost/glowguru/models/affiche_img.php?id=<?php echo $product->id; ?>"  alt="">
        </div>
        <!-- product info -->
        <div class="col-md-7 col-11 mx-auto">
            <h3 class="text-pink-dark mt-3"><?php echo $product->name; ?></h3>
            <span class="text-muted ">
            <h6 class="mt-5">About this item</h6>
            <?php echo $product->description; ?>
        </span>
            <h4 class="text-success mt-3">$ <?php echo $product->final_price; ?></h4>
            <a href="" class="btn btn-green mt-3">Order Now</a>
        </div>
    </section>




    <section id="sec-1" class="py-5 bg-grey">
        <div class="container my-3">
            <div class="row">
                
                <div class="col-md-4 text-center sec-1-item mb-5">
                    <span class="d-flex align-items-center justify-content-center mx-auto text-white mb-4 circle-icon">
                        <i class="fa-solid fa-heart fs-3"></i>
                    </span>
                    <p class="lead fw-bold">Quality</p>
                    <p class="fw-light mx-3 lh-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia unde ut voluptatum ducimus, delectus illum, deleniti quibusdam ullam amet aperiam nihil pariatur voluptates possimus perspiciatis?
                    </p>
                </div>

                <div class="col-md-4 text-center sec-1-item mb-5">
                    <span class="d-flex align-items-center justify-content-center mx-auto text-white mb-4 circle-icon">
                        <i class="fas fa-smile fs-3"></i>
                    </span>
                    <p class="lead fw-bold">Confidence</p>
                    <p class="fw-light mx-3 lh-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia unde ut voluptatum ducimus, delectus illum, deleniti quibusdam ullam amet aperiam nihil pariatur voluptates possimus perspiciatis?
                    </p>
                </div>

                <div class="col-md-4 text-center sec-1-item mb-5">
                    <span class="d-flex align-items-center justify-content-center mx-auto text-white mb-4 circle-icon">
                        <i class="fa fa-thumbs-up fs-3"></i>
                    </span>
                    <p class="lead fw-bold">Efficiency</p>
                    <p class="fw-light mx-3 lh-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia unde ut voluptatum ducimus, delectus illum, deleniti quibusdam ullam amet aperiam nihil pariatur voluptates possimus perspiciatis?
                    </p>
                </div>
            </div>
        </div>
    </section>





    <section class="py-5" id="special">
    <div class="container">
        <div class="title text-center py-5">
            <h2 class="position-relative d-inline-block">
                New Collection
            </h2>
        </div>
        <div class="special-list row g-0">
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="special-img position-relative overflow-hidden">
                    
                        <img src="http://localhost/glowguru/views/img/products/MAKE UP FOR EVER – Ultra HD Palette Essentiels Teint Multi Usages.jpg" alt="" class="w-100">
                        <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                    
                        <p class="text-capitalize mt-3 mb-1">MAKE UP FOR EVER – Ultra HD Palette Essentiels Teint Multi Usages</p>
                        <span class="fw-bold d-block">$ 44</span>
                    
                    <a href="" class="btn btn-green mt-3">Add to cart</a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="special-img position-relative overflow-hidden">
                    
                        <img src="http://localhost/glowguru/views/img/products/SECRET – Déodorant Sans Aluminium Lavande Vraie.jpg" alt="" class="w-100">
                        <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                    
                        <p class="text-capitalize mt-3 mb-1">SECRET – Déodorant Sans Aluminium Lavande Vraie</p>
                        <span class="fw-bold d-block">$ 44</span>
                    
                    <a href="" class="btn btn-green mt-3">Add to cart</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="special-img position-relative overflow-hidden">
                    
                        <img src="http://localhost/glowguru/views/img/products/FENTY BEAUTY – Stunna Lip Paint Longue Tenue.jpg" alt="" class="w-100">
                        <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                    
                        <p class="text-capitalize mt-3 mb-1">FENTY BEAUTY – Stunna Lip Paint Longue Tenue</p>
                        <span class="fw-bold d-block">$ 44</span>
                    
                    <a href="" class="btn btn-green mt-3">Add to cart</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="special-img position-relative overflow-hidden">
                    
                        <img src="http://localhost/glowguru/views/img/products/TOO FACED – Born This Way Super Coverage Concealer Correcteur Anticernes.jpg" alt="" class="w-100">
                        <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                    
                        <p class="text-capitalize mt-3 mb-1">TOO FACED – Born This Way Super Coverage Concealer Correcteur</p>
                        <span class="fw-bold d-block">$ 44</span>
                    
                    <a href="" class="btn btn-green mt-3">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
</section>



   




    <footer class="bg-green">
        <div class="container">
            <div class="row pt-4 text-white">
                <div class="col-md-6 text-center text-md-start">
                    <p class=""> <span class="fw-bold">GlowGuru &copy;</span> Copyright 2023</p>
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