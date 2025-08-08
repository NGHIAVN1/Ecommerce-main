<?php
 include'header.php';
 include'lib/connection.php';
 $name=$_POST['name']?? '';
 $sql = "SELECT * FROM product where name='$name'  OR catagory='$name'";
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
    $user_id=$_POST['user_id'];;
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_id = $_POST['product_id'];
    $product_quantity = 1;
  
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE productid = '$product_id'  && userid='$user_id'");
  
    if(mysqli_num_rows($select_cart) > 0){
      echo $message[] = 'Sản phẩm đã được thêm vào giỏ';
    }
    else{
       $insert_product = mysqli_query($conn, "INSERT INTO `cart`(userid, productid, name, quantity, price) VALUES('$user_id', '$product_id', '$product_name', '$product_quantity', '$product_price')");
     echo $message[] = 'Sản phẩm được thêm thành công';
     
    }
  
  }
?>
<style>
  .grid-container {
    display: grid;
    row-gap: 150px;
    column-gap:15px;
    grid-template-columns: 250px 250px 250px 250px;
    padding: 10px 10px 10px 200px;

  }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/pending_orders.css">

</head>
<body>

<div class="container pendingbody">
  <h5>Kết quả tìm kiếm</h5>
  <div class="container">
   <div class="row">
   <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div  class ="card-img-top" >
              <div>

                  <img src="admin/product_img/<?php echo $row['imgname']; ?>"  style="width:200px;">
            

              </div>
              
              <div>
              <div>
                <h6><?php echo '<p><a href="Television_detail.php">'. $row["name"].'</a></p>'?></h6>
                <h6><?php echo '<p><a>'. $row["description"].'</a></p>'?></h6> 
                <strong class ="price"><?php echo $row["Price"] ?> VNĐ</strong> 
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
</div>
    
</body>
</html>