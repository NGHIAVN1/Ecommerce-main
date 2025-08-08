<?php
include 'config.php';
include 'lib/connection.php';
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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
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
    <?php include 'sidebar.php'; ?>

    <main>

    </main>
      <!-- <footer>
        <p>© 2025 E-commerce Admin Dashboard</p>
      </footer> -->
</div>
<script src="js/state.js"></script>
<script src="js/chart.production.js"></script>
<script src="js/chart2.js"></script>      
</script>
</body>

</html>