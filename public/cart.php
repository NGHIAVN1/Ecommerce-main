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
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <main>
        <section>
            <div class="container mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h2>
                                    Chưa có sản phẩm nào trong giỏ hàng
                                </h2>
                                <p>Vui lòng thêm sản phẩm vào giỏ hàng để tiếp tục mua sắm.</p>
                                <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'">Mua hàng</button>
                            </div>
                            <div class="col-md-6 align-items-center">
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
        </section>
    </main>
</body>

</html>