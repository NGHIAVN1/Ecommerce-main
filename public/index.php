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
    <link href="css/boostrap.css" rel="stylesheet">
    <link href="css/banner.css" rel="stylesheet">
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
    <main>
        <div class="banner">
            <div class="container">
                <a href="">
                    <img src="img/banner/desk_header_SS_ef90395150.webp" alt="">
                    <div class=" d-grid gap-2 d-md-flex justify-content-md-between" id="button-center">
                        <button class="btn btn-primary" type="button"><</button>
                        <button class="btn btn-primary" type="button">></button>
                    </div>
                </a>

                <!-- <div class="row">
                    <div class="col-md-6">

                        <div class="banner-text">
                            <p class="bt1">Welcome To</p>
                            <p class="bt2"><span class="bt3">Sunshine</span>Store</p>
                            <p class="bt4">Chuyên cung cấp các mặt hàng điện tử, thiết bị điện tử chất lượng giá rẻ</p>

                        </div>


                    </div>

                    <div class="col-md-6">

                        <img src="https://tietkiemdiennang.net/wp-content/uploads/2020/08/thiet-bi-dien-tu-la-gi-1-2.jpg"
                            class="img-fluid">

                    </div> -->

            </div>
        </div>
        </div>
        <div class="container" style="height: 130px; max-width:1280px;">
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
            <div class="container" id="home-page">
                <div class="row">
                    <div>
                        <p>may tinh noi bat</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
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
                                <img src="..." class="card-img-top" alt="...">
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
                <div class=" d-grid gap-2 d-md-flex justify-content-md-between" id="button-center">
                    <button class="btn btn-primary" type="button"><</button>
                            <button class="btn btn-primary" type="button">></button>
                </div>
            </div>
            <div class="container" id="home-page">

            </div>
            <div class="container" id="home-page">
                <div class="card"></div>
            </div>
        </div>
        <div class="container" id="home-page">
            <div class="card"></div>
        </div>
        </div>
        </div>
    </main>
    <?php include('footer.php'); ?>
?>
</body>



</html>