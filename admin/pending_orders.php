<?php
 include 'header.php';
include 'config.php';
include'lib/connection.php';
$sql = "SELECT * FROM orders";
$result = $conn -> query ($sql);

if(isset($_POST['update_update_btn'])){
  $update_value = $_POST['update_status'];
  $update_id = $_POST['update_id'];
  $update_quantity_query = mysqli_query($conn, "UPDATE `orders` SET status = '$update_value' WHERE id = '$update_id'");
  if($update_quantity_query){
     header('location:pending_orders.php');
  };
};

if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$remove_id'");
  header('location:pending_orders.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
      <link rel="stylesheet" type="text/css" href="css/pending_orders.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</script>
</head>
<body>
  <div class="grid-container" id="grid-container-sidebar" >
    <header>
      <nav>
        <?php include 'nav.php'; ?>
      </nav>
    </header>
    <aside>
      <?php include 'sidebar.php'; ?>
    </aside>
    <main>
<div class="container pendingbody">
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">Tên</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Hình thức thanh toán</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Tổng cộng </th>
      <th scope="col">Trạng thái</th>
    </tr>
  </thead>
  <tbody>
  <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              
              ?>
    <tr>

      <td><?php echo $row["name"] ?></td>
      <td><?php echo $row["address"] ?></td>
      <td><?php echo $row["phone"] ?></td>
      <td><?php echo $row["payoption"] ?></td>
      <td><?php echo $row["totalproduct"] ?></td>
      <td><?php echo $row["totalprice"] ?></td>
      <td><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="update_id"  value="<?php echo  $row['id']; ?>" >
        <div>
                                <select name="update_status" class="form-control">
                                <option><?php echo $row['status']; ?></option>
                                    <option value="Chưa xác nhận">Chưa xác nhận</option>
                                    <option value="Xác nhận">Xác nhận</option>
                                  <option value="Hủy">Hủy</option>
                                  <option value="Đã giao">Đã giao</option>
                                </select>
                            </div>
        <input type="submit" value="Cập nhập" name="update_update_btn">
      </form></td>
      <td><a href="pending_orders.php?remove=<?php echo $row['id']; ?>">Xóa</a></td>
    </tr>
    <?php 
    }
        } 
        else 
            echo "0 results";
        ?>
        
  </tbody>
</table>
</div>
    
    </main>
      <!-- <footer>
        <p>© 2025 E-commerce Admin Dashboard</p>
      </footer> -->
</div>
<script src="js/script.js"></script>
  
</script>
</body>

</html>
