<?php
include'lib/connection.php';

include 'config.php';
if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `users` WHERE id = '$remove_id'");
  header('location:users.php');
};
 include'lib/connection.php';

 $sql = "SELECT * FROM users";
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
</head>
<body>
  <div class="grid-container" id="grid-container-sidebar">
    <header>
      <nav>
        <?php include 'nav.php'; ?>
      </nav>
    </header>
    <aside>
       <?php include 'sidebar.php'; ?>
    </aside>
    <main>  

  <h5>Thông tin khách hàng</h5>
    <?php
      include 'component/table.php';
    ?>

    </main>
      <!-- <footer>
        <p>© 2025 E-commerce Admin Dashboard</p>
      </footer> -->
</div>
 <script src="js/state.js">
</script>

</body>

    
</html>