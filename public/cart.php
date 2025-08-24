<?php
 include'lib/connection.php';
 if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check authentication before including header
if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']!=1)
   {
       header("location:login.php");
       exit();
   }
}
else
{
   header("location:login.php");
   exit();
}

// Include header after authentication check
include'header.php';
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <main>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 align-items-center">
                                <h2>
                                    Chưa có sản phẩm nào trong giỏ hàng
                                </h2>
                                <p>Vui lòng thêm sản phẩm vào giỏ hàng để tiếp tục mua sắm.</p>
                                <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'">Mua hàng</button>
                            </div>
                            <div class="col-md-6 ">
                                <div class="row justify-content-center">
                                    <img src="card-empty.webp" class="img-fluid" alt="Shopping Cart"
                                        style="width: 200px; height: 200px; float: right;">
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
            </div>
     </main>
</body>

</html>