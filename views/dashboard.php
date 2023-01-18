<?php
$product=new ProductController();
$allProducts = $product->getAllProduct();
$ProductEndsSoon =$product->getProductEndsSoon();
$LargestQuantityProduct =$product->LargestQuantityProduct();
$product->deleteProduct();
$totalOutOfStock=$product->totalOutOfStock();
$TotalOfArticles=$product->TotalOfArticles();
$TotalProductsInStock=$product->TotalProductsInStock();
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
    <link rel="stylesheet" href="http://localhost/glowguru/views/style/dashboard.css">
</head>
<body>
    <?php include './views/pages/headerSmall.php' ?>
<section class="my-5">
    <div class="row col-lg-10 mx-auto">
        <div class="row">
            

            

            <div class="card mx-3 my-3 bg-pink-light text-pink-dark border-0 shadow" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total products in stock: <?php echo $TotalProductsInStock; ?></h5>
                </div>
            </div>

            <div class="card mx-3 my-3 bg-pink-light text-pink-dark border-0 shadow" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Of Articles: <?php echo $TotalOfArticles; ?></h5>
                </div>
            </div>

            

            <div class="card mx-3 my-3 bg-pink-light text-pink-dark border-0 shadow" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Out of stock:<?php echo $totalOutOfStock; ?></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->
<section class="">
<div class="row col-lg-10 mx-auto">
        <div class="card mb-5">
            <h5 class="card-title">This product ends soon</h5>
            <table class="table">
                <tr>
                <th colspan="5" scope="row" class="border-0 text-pink-dark "><?php echo $ProductEndsSoon->name ?></th>
                </tr>
            <tr>
                <td><img src="http://localhost/glowguru/models/affiche_img.php?id=<?php echo $ProductEndsSoon->id ?>" style="width:50px; height:80px;" alt=""></td>
                <td class="text-muted">Buying price : <?php echo $ProductEndsSoon->buying_price ?></td>
                <td class="text-muted">Final price : <?php echo $ProductEndsSoon->final_price ?></td>
                <td class="text-muted">Quantity : <?php echo $ProductEndsSoon->quantity ?></td>
                <td>
                <form method="post" action="http://localhost/glowguru/dashboard/<?php echo $ProductEndsSoon->id; ?>">
                    <button class="btn btn-danger" style="width:100px;">Delete</button>
                </form>
                <form action="http://localhost/glowguru/modifyProduct/<?php echo $ProductEndsSoon->id; ?>" method="post">
                    <button class="btn btn-warning" style="width:100px;">Update</button>
                    </form>
                </td>
             </tr>
            </table>
        </div>
    <!---->
    <div class="card mb-5">
        <h5 class="card-title">The largest quantity product</h5>
        <table class="table">
            <tr>
            <th scope="row" colspan="5" class="text-pink-dark border-0" ><?php echo $LargestQuantityProduct->name ?></th>
            </tr>
        <tr>
        <td><img src="http://localhost/glowguru/models/affiche_img.php?id=<?php echo $LargestQuantityProduct->id ?>" style="width:50px; height:80px;" alt=""></td>
      <td class="text-muted">Buying Price : <?php echo $LargestQuantityProduct->buying_price ?></td>
      <td class="text-muted">Final Price : <?php echo $LargestQuantityProduct->final_price ?></td>
      <td class="text-muted">Quantity : <?php echo $LargestQuantityProduct->quantity ?></td>
      <td>
        <button class="btn btn-warning" style="width:100px;">Update</button>
        <form method="post" action="http://localhost/glowguru/dashboard/<?php echo $LargestQuantityProduct->id; ?>">
            <button class="btn btn-danger" style="width:100px;">Delete</button>
        </form>
    </td>
      
      </tr>
        </table>
    </div>

    <div>
        <h2 class="text-center my-5">All Products</h2>
        <input type="search" onkeyup="searchProduct()" class="searchJs" id="searchJs">
        <table class="table">
  <tbody>
    <?php foreach($allProducts as $p): ?>
    <tr>
    <th scope="row" id="nameProduct" class=" border-0 text-pink-dark" colspan="5"><?php echo $p['name']; ?></th>
    </tr>
    <tr>
      <td class="text-muted"><img src="http://localhost/glowguru/models/affiche_img.php?id=<?php echo $p['id']; ?>" style="width:50px; height:80px;" alt=""></td>
      <td class="text-muted">Buying Price: <?php echo $p['buying_price']; ?></td>
      <td class="text-muted">Final Price: <?php echo $p['final_price']; ?></td>
      <td class="text-muted">Quantity: <?php echo $p['quantity']; ?></td>
      <td>
        <button class="btn btn-warning" style="width:100px;">Update</button>
        <form method="post" action="http://localhost/glowguru/dashboard/<?php echo $p['id']; ?>">
            <button class="btn btn-danger" style="width:100px;">Delete</button>
        </form>
      </td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
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