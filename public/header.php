<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shunshine Electronic</title>
  <meta charset="UTF-8">
    <meta name="description" content="test">
    <meta name="keywords" content="HTML, CSS, BOOTSTRAP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
      <!--font-family: 'Raleway', sans-serif;-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/button.css">
</head>

<body>

<!--header start--->
<!--header end--->
<?php 
 include "lib/connection.php";
SESSION_START();
  $id = $_SESSION['userid']?? "";

 $sql = "SELECT * FROM cart where userid='$id'";
 $result = $conn -> query ($sql);
?>
<!--nav start--->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Shunshine</a>
</nav>
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="television1.php">Ti vi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="television1.php">Điện thoại</a>
        </li>
      </ul>
      <form class="form-inline"  action="search(1).php" method="post">
        <!--<a href=""><img src="img/search.png"></a>-->
        <input class="form-control" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" name="name">
        <button class="btn btn-outline-dark" type="submit" style="margin-left:7px;margin-right:7px;"><img src="img/search.png"></button>
        </form>
        <?php
          $total=0;
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $total++;
            }
          }
              ?>
        <a href="cart(1).php"><img src="img/cart.png"><?php echo $total?></a>
        <?php 

if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']==1)
   {
    echo $_SESSION['username']; ?>
    <a href="profile.php"><img src="img/w1.png"></a>  
    <a href="logout.php"><img src="img/log-out1.png"></a>
<?php
   }
}
else
{
?>
  <a class = "button_item" href="login.php">Đăng nhập</a>
  <a class = "button_item" href="Register.php">Đăng ký</a>
<?php
}
?>
        

    </div>
  </div>
</nav>

<!--nav end--->