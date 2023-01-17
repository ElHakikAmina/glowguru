<?php
$products = new ProductController();
$allProducts = $products->getAllProduct();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GlowGuru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/glowguru/views/style/index.css">
</head>
  <body>
    <header class="pb-5 overflow-hidden bg-green">
        <div class="container">
            <div class="row py-5">
                <div class="col-sm-6 text-lg-start">
                    <a href="index.html" class="navbar-brand text-white fs-1">
                        GlowGuru <i class="fa fa-cunbe"></i>
                    </a>
                </div>
                <div class="col-sm-6  d-flex text-white align-items-center nav-icons justify-content-end">
                    <a href="login.html" class="text-white px-2 fw-bold text-decoration-none">
                        Connexion
                    </a>
                    
                    <a href="#">
                    <i class="fas fa-chart-line text-white px-2"></i>
                        <i class="fas fa-chart-bar text-white px-2"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-plus text-white px-2" ></i>
                    </a>
                    <a href="#">
                    
                        <i class="fa-solid fa-cart-shopping text-white px-2"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 text-white text-center text-lg-start">
                    <h1 class="display-1 fw-normal mt-5">Your beauty start here</h1>
                    <p class="my-4 lead fs-5">
                Cosmetics, beauty products , fragrances and tools                    </p>
                    <button type="button" class="btn fw-bold text-white mt-4 btn-header">Explore now!</button>
                </div>
                <div class="col-lg-6 phone-img d-none d-lg-flex justify-content-end gx-0 mt-5">
                    <img src="http://localhost/glowguru/views/img/phone.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <section id="sec-1" class="py-5 bg-grey">
        <div class="container my-3">
            <div class="row">
                
                <div class="col-md-4 text-center sec-1-item mb-5">
                    <span class="d-flex align-items-center justify-content-center mx-auto text-white mb-4 circle-icon">
                        <i class="far fa-heart fs-3"></i>
                    </span>
                    <p class="lead fw-bold">Quality</p>
                    <p class="fw-light mx-3 lh-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia unde ut voluptatum ducimus, delectus illum, deleniti quibusdam ullam amet aperiam nihil pariatur voluptates possimus perspiciatis?
                    </p>
                </div>

                <div class="col-md-4 text-center sec-1-item mb-5">
                    <span class="d-flex align-items-center justify-content-center mx-auto text-white mb-4 circle-icon">
                        <i class="far fa-flag fs-3"></i>
                    </span>
                    <p class="lead fw-bold">Confidence</p>
                    <p class="fw-light mx-3 lh-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia unde ut voluptatum ducimus, delectus illum, deleniti quibusdam ullam amet aperiam nihil pariatur voluptates possimus perspiciatis?
                    </p>
                </div>

                <div class="col-md-4 text-center sec-1-item mb-5">
                    <span class="d-flex align-items-center justify-content-center mx-auto text-white mb-4 circle-icon">
                        <i class="far fa-star fs-3"></i>
                    </span>
                    <p class="lead fw-bold">Efficiency</p>
                    <p class="fw-light mx-3 lh-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia unde ut voluptatum ducimus, delectus illum, deleniti quibusdam ullam amet aperiam nihil pariatur voluptates possimus perspiciatis?
                    </p>
                </div>
            </div>
        </div>
    </section>




 <!-- special products -->
 <section class="py-5" id="special">
    <div class="container">
        <div class="title text-center py-5">
            <h2 class="position-relative d-inline-block">
                New Collection
            </h2>
        </div>
        <div class="special-list row g-0">
            <?php foreach($allProducts as $p): ?>
            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="special-img position-relative overflow-hidden">
                    <a href="product/<?php echo $p['id']; ?>" class="text-decoration-none text-dark">
                        <img src="http://localhost/glowguru/models/affiche_img.php?id=<?php echo $p['id']; ?>" alt="" class="w-100">
                        <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <div class="text-center">
                    
                        <p class="text-capitalize mt-3 mb-1"><?php echo $p['name']; ?></p>
                        <span class="fw-bold d-block">$ <?php echo $p['final_price']; ?></span>
                    </a>
                    <a href="" class="btn btn-green mt-3">Add to cart</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
 <!-- End of special products -->











    <section id="sec-2" class="py-5">
        <div class="container my-4">
            <div class="row gx-lg-5">
                <div class="col-lg-6 mb-5">
                    <img src="http://localhost/glowguru/views/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <h3>Our product will amaze you</h3>
                    <p class="text-muted fw-light lh-lg my-4">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores tempore ea dolorum quidem praesentium error, sint veritatis distinctio reprehenderit maxime adipisci sequi laboriosam, est sit necessitatibus suscipit quis aspernatur repudiandae sunt eum consectetur voluptas laudantium similique. Dolores ullam eum deleniti dolore beatae quas illo laboriosam.
                    </p>
                    <button type="button" class="btn btn-green mt-2">Read more</button>
                </div>
            </div>
        </div>
    </section>

    <section id="sec-3" class="py-5 text-white bg-green">
        <div class="container my-4">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h3 class="mb-4">Why you trust us?</h3>
                    <p class="lh-lg fw-light pt-2 w-75 mx-auto">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero non enim eos inventore culpa autem expedita recusandae nulla aut dolore.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 text-center text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-2 d-sm-flex justify-content-sm-end">
                           <span class="d-flex align-items-center justify-content-center circle-icon bg-white text-green mx-sm-0 mx-auto mb-4">
                            <i class="fas fa-smile fs-2"></i>
                           </span> 
                        </div>
                        <div class="col-sm-10">
                            <h4>your happiness is our priority</h4>
                            <p class="lh-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aut assumenda incidunt? Perferendis, ducimus facere!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-center text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-2 d-sm-flex justify-content-sm-end">
                           <span class="d-flex align-items-center justify-content-center circle-icon bg-white text-green mx-sm-0 mx-auto mb-4">
                            <i class="fa-solid fa-spa fs-2"></i>
                           </span> 
                        </div>
                        <div class="col-sm-10">
                            <h4>SPA</h4>
                            <p class="lh-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aut assumenda incidunt? Perferendis, ducimus facere!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-center text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-2 d-sm-flex justify-content-sm-end">
                           <span class="d-flex align-items-center justify-content-center circle-icon bg-white text-green mx-sm-0 mx-auto mb-4">
                            <!-- <i class="fa fa-tv fs-2"></i> -->
                            <i class="fa-solid fa-paintbrush fs-2"></i>
                           </span> 
                        </div>
                        <div class="col-sm-10">
                            <h4>Luxury product
                            </h4>
                            <p class="lh-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aut assumenda incidunt? Perferendis, ducimus facere!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-center text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-2 d-sm-flex justify-content-sm-end">
                           <span class="d-flex align-items-center justify-content-center circle-icon bg-white text-green mx-sm-0 mx-auto mb-4">
                            <!-- <i class="fa fa-crop fs-2"></i> -->
                            <i class="fa-solid fa-certificate fs-2"></i>
                           </span> 
                        </div>
                        <div class="col-sm-10">
                            <h4>Cosmetics certification</h4>
                            <p class="lh-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aut assumenda incidunt? Perferendis, ducimus facere!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec-4" class="py-5">
        <div class="container my-4">
            <div class="row gx-lg-5">
                <div class="col-lg-6 mb-5">
                    <h3>Why we are the best?</h3>
                    <p class="text-muted fw-light lh-lg my-4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit minima recusandae molestiae veniam, reiciendis assumenda soluta eligendi debitis magnam necessitatibus reprehenderit suscipit temporibus. Ullam iusto maiores inventore nemo vero deserunt unde sit architecto repellendus quibusdam.
                    </p>
                    <p class="text-muted fw-light lh-lg my-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis corrupti quam quidem dolore pariatur!
                    </p>
                    <button type="button" class="btn btn-green mt-2">Read more</button>
                </div>
                <div class="col-lg-6">
                    <img src="http://localhost/glowguru/views/img/img1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    
    <section id="sec-5" class="py-5">
        <div class="container my-4">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h3 class="mb-4">Tutorial Video</h3>
                    <p class="lh-lg fw-light pt-2 w-75 mx-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet id alias officia, eum ipsum quis vero repellendus aliquid doloribus quia libero facilis eaque dolorem. Perferendis!
                    </p>
                </div>
            </div>
            <div class="row">
                <video  controls style="height:400px;">
                    <source src="http://localhost/glowguru/views/video/makeup-tutorial.mp4"  type="video/mp4"/>
                </video>
            </div>
        </div>
    </section>

    <section id="sec-6" class="py-6 bg-green">
        <div class="container my-4 ">
            <div class="row mb-5">
                <div class="col-12 text-center text-white">
                    <h3 class="mb-4">Statics</h3>
                    <p class="lh-lg fw-light pt-2 w-75 mx-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam amet mollitia magni tempora dolores ea, dolorum vitae eligendi corporis necessitatibus quod optio consequatur reiciendis, ipsum temporibus! Fugit nam debitis cum.
                    </p>
                </div>
            </div>

            <div class="row text-uppercase text-center text-white">
                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="circle-icon bg-white text-green d-flex align-items-center justify-content-center mx-auto mb-4 fs-2 fw-bold">
                        200+
                    </div>
                    <h6>Products</h6>
                </div>

                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="circle-icon bg-white text-green d-flex align-items-center justify-content-center mx-auto mb-4 fs-2 fw-bold">
                        50k+
                    </div>
                    <h6>happy clients</h6>
                </div>

                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="circle-icon bg-white text-green d-flex align-items-center justify-content-center mx-auto mb-4 fs-2 fw-bold">
                        90%
                    </div>
                    <h6>repeat</h6>
                </div>

                <div class="col-md-6 col-lg-3 mb-5">
                    <div class="circle-icon bg-white text-green d-flex align-items-center justify-content-center mx-auto mb-4 fs-2 fw-bold">
                        9/10
                    </div>
                    <h6>average rating</h6>
                </div>

                
            </div>
        </div>
    </section>

    <section id="sec-7" class="py-5">
        <div class="container my-4">
            <div class="row gx-md-5">
                <div class="col-md-6 my-3">
                    <div class="card text-center">
                        <img src="http://localhost/glowguru/views/img/daily_skin_care.jpg" style="height:350px;" class="card-img-img" alt="">
                        <div class="card-body py-5">
                            <h4 class="card-title">The perfect daily skin care</h4>
                            <p class="card-text py-3 lh-lg text-muted fw-light">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex minus eos quae. Vero molestiae soluta itaque! Iusto qui maxime, consectetur ex ratione officiis amet nemo, excepturi, atque nam esse sit voluptate tenetur ipsa velit numquam.
                            </p>
                            <a href="#" class="btn btn-green">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 my-3">
                    <div class="card text-center">
                        <img src="http://localhost/glowguru/views/img/ideas_for_skin.jpg" class="card-img-img" style="height:350px;" alt="">
                        <div class="card-body py-5">
                            <h4 class="card-title">Best ideas for a nice skin</h4>
                            <p class="card-text py-3 lh-lg text-muted fw-light">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex minus eos quae. Vero molestiae soluta itaque! Iusto qui maxime, consectetur ex ratione officiis amet nemo, excepturi, atque nam esse sit voluptate tenetur ipsa velit numquam.
                            </p>
                            <a href="#" class="btn btn-green">Learn more</a>
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
                    <p class=""> <span class="fw-bold">GlowGuru  &copy;</span> Copyright 2023</p>
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