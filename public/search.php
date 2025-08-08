<?php
 include'header.php';
 include'lib/connection.php';
 $name=$_POST['name'];
 $sql = "SELECT * FROM product WHERE name LIKE '%$name%' AND category LIKE '%$category%'";
 $result = $conn -> query ($sql);
?>
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
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ảnh</th>
      <th scope="col">Tên</th>
      <th scope="col">Phân loại</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá</th>
    </tr>
  </thead>
  <tbody>
  <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
    <tr>
      <td><img src="admin/product_img/<?php echo $row['imgname']; ?>" style="width:50px;"></td>
      <td><?php echo $row["name"] ?></td>
      <td><?php echo $row["catagory"] ?></td>
      <td><?php echo $row["description"] ?></td>
      <td><?php echo $row["quantity"] ?></td>
      <td><?php echo $row["Price"] ?></td>
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
    
</body>
</html>