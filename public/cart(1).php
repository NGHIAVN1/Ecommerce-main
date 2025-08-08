<?php
 include'header.php';
 include'lib/connection.php';


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
if(isset($_POST['order_btn'])){
  $userid = $_POST['user_id'];
  $name = $_POST['user_name'];
  $number = $_POST['number'];
  $address = $_POST['address'];
  $pay_option = $_POST['option'];
  /*$price_total = $_POST['total'];*/
  $status="Chưa xác nhận";

  $cart_query = mysqli_query($conn, "SELECT * FROM `cart` where userid='$userid'");
  $price_total = 0;
  if(mysqli_num_rows($cart_query) > 0){
     while($product_item = mysqli_fetch_assoc($cart_query)){
        $product_name[] = $product_item['productid'].' ('. $product_item['quantity'] .'), '. $product_item['name'] .'';
        $quantity =$product_item['quantity'];
        $product_price = $product_item['price'] * $product_item['quantity'];
        $price_total += $product_price;
        $sql = "SELECT * FROM product";
        $result = $conn -> query ($sql);
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            if($row['id']===$product_item['productid'])
            {
              if($product_item['quantity']<=$row['quantity'])
              {
                $rowname=$row['name'];
                $update_id=$row['id'];
                $t=$row['quantity']-$product_item['quantity'];
                $update_quantity_query = mysqli_query($conn, "UPDATE `product` SET quantity = '$t' WHERE id = '$update_id'");                
                $order_details = mysqli_query($conn, "INSERT INTO `orders_details`(product_id, name, quantity, price) VALUES('$update_id', '$rowname', '{$product_item['quantity']}', '$product_price')");
                $select_order_details = mysqli_query($conn, "SELECT * FROM `orders_details` WHERE product_id = '$update_id'");
                $order_details_item = mysqli_fetch_assoc($select_order_details);
                $order_details_id = $order_details_item['id'];
                $flag=1;
              }
              else
              {
                echo "out of stock " .$row['name']." Quantity:".$row['quantity'];
              }
            }
          }

        }

     };
     if($flag==1)
     {
       $total_product = implode('',$product_name);
       $detail_query = mysqli_query($conn, "INSERT INTO `orders`(userid,payment_id, name, address, phone, payoption,  totalprice, status) VALUES('$userid', '$order_details_id ','$name','$address','$number','$pay_option','$price_total','$status')") or die($conn -> error);
           
             $cart_query1 = mysqli_query($conn, "delete FROM `cart` where userid='$userid'");
             header("location:index.php");
      
     }
  };



}

$id=$_SESSION['userid'];
 $sql = "SELECT * FROM cart where userid='$id'";
 $result = $conn -> query ($sql);

 if(isset($_POST['update_update_btn'])){
  $update_value = $_POST['update_quantity'];
  $update_id = $_POST['update_quantity_id'];
  $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
  if($update_quantity_query){
     header('location:cart.php');
  };
};

if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
  header('location:cart.php');
};


?>

<div class="container pendingbody">
    <h5>Giỏ Hàng</h5>
    <table class="table">
        <thead>
            <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">Têm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá</th>
                <th scope="col">Hoạt động</th>
            </tr>
        </thead>
        <tbody>
            <?php
   $total=0;
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>

            <tr>

                <!-- <th scope="row">1</th> -->
                <td><?php echo $row["name"] ?></td>

                <td>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="hidden" name="update_quantity_id" value="<?php echo  $row['id']; ?>">
                        <input type="number" name="update_quantity" min="1" value="<?php echo $row['quantity']; ?>">
                        <input type="submit" value="Cập nhập" name="update_update_btn">
                    </form>
                </td>
                <td><?php echo $row["price"]*$row["quantity"]  ?></td>
                <?php $total=$total+$row["price"]*$row["quantity"] ;?>


                <input type="hidden" name="status" value="Chưa xác nhận">
                <td><a href="cart(1).php?remove=<?php echo $row['id']; ?>">Xóa</a></td>
            </tr>
            <?php 
    }
    
        } 
        else 
            echo "Giỏ hàng trống";
        ?>

        </tbody>
    </table>
    <style>
    .myDiv {
        background-color: lightblue;
        text-align: right;
    }
    </style>


    <div class="myDiv">
        <?php echo "<h style='font-size: 24px;'>Tổng cộng= $total</h>"; ?>
    </div>

    <tbody>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="exampleFormControlSelect1">Địa chỉ giao hàng:</label>
            <div class="input-group form-group">
                <input type="hidden" name="total" value="<?php echo $total ?>">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid']; ?>">
                <input type="hidden" name="user_name" value="<?php echo $_SESSION['username']; ?>">
                <input type="text" class="form-control" placeholder="Địa chỉ" name="address">
            </div>
            <label for="exampleFormControlSelect1">SĐT:</label>
            <div class="input-group form-group">
                <input type="number" class="form-control" placeholder="Số điện thoại" name="number">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Hình thức thanh toán:</label>
                <select class="form-control" id="exampleFormControlSelect1" name="option">
                    <option value="Chuyển khoản">Chuyển khoản</option>
                    <option value="Tiền mặt">Tiền mặt</option>

                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Xác nhận đặt hàng" name="order_btn">
            </div>

        </form>
    </tbody>
</div>


<?php
 include'footer.php';
?>