<?php
$product = new ProductController();
$product->updateProduct();
$productWithId=$product->getOneProduct();
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
    <link rel="stylesheet" href="http://localhost/glowguru/views/style/modifyProduct.css">
</head>
<body>
<?php include './views/pages/headerSmall.php' ?>
    


    <section>
        <div class="row">
            <div class="col-lg-6 text-white mx-auto">
                
                <h2 class="text-green text-center my-5">Update a product</h2>

                <form method="post" enctype="multipart/form-data">
                    
                    <div class="form-outline mb-4 mt-2">
                      <input type="text" name="name" value="<?php echo $productWithId->name;?>" id="form2Example1" placeholder="Product's name ..." class="form-control" />
                      <label class="form-label text-green" for="form2Example1"> Product's name</label>
                    </div>
                  
                    <div class="form-outline mb-4">
                      <input type="text" name="buying_price" value="<?php echo $productWithId->buying_price;?>" id="form2Example2" placeholder="Buying price ..." class="form-control" />
                      <label class="form-label text-green" for="form2Example2">Buying price</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="final_price" value="<?php echo $productWithId->final_price;?>" id="form2Example2" placeholder="Final price ..." class="form-control" />
                        <label class="form-label text-green" for="form2Example2">Final price</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="quantity" value="<?php echo $productWithId->quantity;?>" id="form2Example2" placeholder="Quantity ..." class="form-control" />
                        <label class="form-label text-green" for="form2Example2">Quantity</label>
                    </div>

                    <div class="form-outline mb-4">
                        <textarea name="description"  placeholder="Description ..." class="form-control">
                            <?php echo $productWithId->description;?>
                        </textarea>
                        <label class="form-label text-green" for="form2Example2">Description</label>
                    </div>
                  
                    <div class="form-outline mb-4">
                        <input type="file" name="image" id="form2Example2" class="form-control" />
                        <label class="form-label text-green" for="form2Example2">Photo</label>
                        <img src="http://localhost/glowguru/models/affiche_img.php?id=<?php echo $productWithId->id;?>" style="width:80px;" alt="">
                      </div>
                    
                  
                    <!-- Submit button -->
                    <button type="submit" name="update" class="btn btn-primary btn-block mb-4 bg-green">Update product</button>
                  </form>



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