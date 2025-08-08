<?php
 include'header.php';
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
    <div class="banner">
        <div class="container">
            <div class="row">
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

                </div>

            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="topsell-head">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="img/mark.png">
                        <h4>DAN HÀNG SẢN PHẨM</h4>

                    </div>


                </div>

            </div>
        </div>
        <div class="grid-container">
            <?php
              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="card-img-top">
                    <div>

                        <img src="admin/product_img/<?php echo $row['imgname']; ?>" style="width: 150px;">


                    </div>

                    <div>

                        <div>

                            <h6><?php echo '<p><a href="Television_detail.php">'. $row["name"].'</a></p>'?></h6>
                            <h6><?php echo '<p><a>'. $row["description"].'</a></p>'?></h6>
                            <strong class="price"><?php echo $row["Price"] ?> VNĐ</strong>
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid'];?>">
                            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $row['Price']; ?>">
                        </div class="card-body">
                        <input type="submit" class="btn btn btn-danger" value="Mua ngay" name="add_to_cart">
                    </div>

                </div>
            </form>
            <?php 
        }
            } 
            else 
                echo "0 results";
            ?>


        </div>
        </div>
    </section>

</body>

<?php
 include'footer.php';
?>

</html>