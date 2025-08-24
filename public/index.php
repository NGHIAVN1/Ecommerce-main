<?php

 include'./lib/connection.php';

 $sql = "SELECT * FROM product";
 $result = $conn -> query ($sql);

 if(isset($_POST['add_to_cart'])){

if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']!=1)
   {
       header("location:login.php");
   }
}
else
{
   header("location:login.php");
}
  $user_id = $_POST['user_id'] ?? '';
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_id = $_POST['product_id'];
  $product_quantity = 1;

  $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE productid = '$product_id'  && userid='$user_id'");

  if(mysqli_num_rows($select_cart) > 0){
    echo $message[] = 'Sản phẩm đã được thêm vào giỏ hàng';

  }else{
     $insert_product = mysqli_query($conn, "INSERT INTO `cart`(userid, productid, name, quantity, price) VALUES('$user_id', '$product_id', '$product_name', '$product_quantity', '$product_price')");
   echo $message[] = 'Sản phẩm được thêm thành công';
   header('location:index.php');
  }

}

?>
<?php

if(!isset($_SESSION['userid'])) {
    $_SESSION['userid'] = "default value";
}
?>

<!-- Your HTML code -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<input type="hidden" name="user_id" value="<?php echo $_SESSION['userid'];?>">
<style>
.grid-container {
    display: grid;
    row-gap: 150px;
    column-gap: 15px;
    grid-template-columns: 250px 250px 250px 250px;
    padding: 10px 10px 10px 200px;

}
</style>

<body>
    <?php include("header.php") ?>
    <?php include("menu.php") ?>
    <div class="focus"></div>
    <main class="theme-dark">
        <?php include("banner.php") ?>
        <?php include("list-banner.php") ?>
        <div class="container" style="height: 130px; max-width:1280px; margin-top: 20px; ;">
            <div class="row">
                <div class="col-md-3 ml-0">
                    <div class="card bd-1 p-3">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <p>May Tinh</p>
                            </div>
                            <div class="col-md-5">
                                <img src="img/laptop_thumb_2_4df0fab60f.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bd-1 p-3">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <p>Dien Thoai</p>
                            </div>
                            <div class="col-md-5">
                                <img src="img/phone_cate_c6a412f60a.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card  bd-1 p-3">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <p>Tivi</p>
                            </div>
                            <div class="col-md-5">
                                <img src="img/may_tinh_bang_cate_thumb_00e3b3eefa.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mr-0">
                    <div class="card bd-1 p-3">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <p>Tu lanh</p>
                            </div>
                            <div class="col-md-5">
                                <img src="img/tu_lanh_cate_thumb_77da11d0c4.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="homepage-main">
            <div class="container position-relative" id="home-page-1">
                <div class="d-flex flex-row align-items-center">
                    <img src="img/flame.gif" alt="" style="width: 50px; height: 30px;">
                    <h3>Điện thoại nổi bật</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card’s content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <p>ssfds</p>
                            <!-- <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card’s content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card’s content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card’s content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   <div class="my-btn" id="button-center">
                <span class="btn-1" onclick="plusSlides(-1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M201.4 297.4C188.9 309.9 188.9 330.2 201.4 342.7L361.4 502.7C373.9 515.2 394.2 515.2 406.7 502.7C419.2 490.2 419.2 469.9 406.7 457.4L269.3 320L406.6 182.6C419.1 170.1 419.1 149.8 406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3L201.3 297.3z"/></svg></span>
                <span class="btn-2" onclick="plusSlides(1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M439.1 297.4C451.6 309.9 451.6 330.2 439.1 342.7L279.1 502.7C266.6 515.2 246.3 515.2 233.8 502.7C221.3 490.2 221.3 469.9 233.8 457.4L371.2 320L233.9 182.6C221.4 170.1 221.4 149.8 233.9 137.3C246.4 124.8 266.7 124.8 279.2 137.3L439.2 297.3z"/></svg></span>
        </div>
            </div>
            <div class="container position-relative" id="home-page-2">
                <div class="d-flex flex-row align-items-center">
                    <img src="img/flame.gif" alt="" style="width: 50px; height: 30px;">
                    <h3>Máy tính nổi bật</h3>
                </div>
            <div class="my-btn" id="button-center">
                <span class="btn-1" onclick="plusSlides(-1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M201.4 297.4C188.9 309.9 188.9 330.2 201.4 342.7L361.4 502.7C373.9 515.2 394.2 515.2 406.7 502.7C419.2 490.2 419.2 469.9 406.7 457.4L269.3 320L406.6 182.6C419.1 170.1 419.1 149.8 406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3L201.3 297.3z"/></svg></span>
                <span class="btn-2" onclick="plusSlides(1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M439.1 297.4C451.6 309.9 451.6 330.2 439.1 342.7L279.1 502.7C266.6 515.2 246.3 515.2 233.8 502.7C221.3 490.2 221.3 469.9 233.8 457.4L371.2 320L233.9 182.6C221.4 170.1 221.4 149.8 233.9 137.3C246.4 124.8 266.7 124.8 279.2 137.3L439.2 297.3z"/></svg></span>
        </div>
            </div>
            <div class="container position-relative" id="home-page-3">
                <div class="d-flex flex-row align-items-center">
                    <img src="img/flame.gif" alt="" style="width: 50px; height: 30px;">
                    <h3>Tivi nổi bật</h3>
                </div>
                <div class="my-btn" id="button-center">
                <span class="btn-1" onclick="plusSlides(-1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M201.4 297.4C188.9 309.9 188.9 330.2 201.4 342.7L361.4 502.7C373.9 515.2 394.2 515.2 406.7 502.7C419.2 490.2 419.2 469.9 406.7 457.4L269.3 320L406.6 182.6C419.1 170.1 419.1 149.8 406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3L201.3 297.3z"/></svg></span>
                <span class="btn-2" onclick="plusSlides(1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M439.1 297.4C451.6 309.9 451.6 330.2 439.1 342.7L279.1 502.7C266.6 515.2 246.3 515.2 233.8 502.7C221.3 490.2 221.3 469.9 233.8 457.4L371.2 320L233.9 182.6C221.4 170.1 221.4 149.8 233.9 137.3C246.4 124.8 266.7 124.8 279.2 137.3L439.2 297.3z"/></svg></span>
        </div>
            </div>
        </div>

        </div>
         </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>