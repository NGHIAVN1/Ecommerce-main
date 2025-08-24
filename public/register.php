<?php
include 'header.php';
include "lib/connection.php";
$result = null;
  if (isset($_POST['u_submit'])) 
  {
    $f_name=$_POST['u_name'];
    $l_name=$_POST['l_name'];
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    $cpass=md5($_POST['c_pass']);

    if ($pass==$cpass) 
    {
         $insertSql = "INSERT INTO users(f_name ,l_name, email, pass) VALUES ('$f_name', '$l_name','$email', '$pass')";

         if ($conn -> query ($insertSql)) 
         {
            $result="Account Open success";
            header("location:login.php");
         }
         else
         {
             //die($conn -> error);
             echo "Đăng nhập thất bại";
         }
    }
    else
    {
      $result="Mật khẩu không khớp";
    }
  } 


 //echo $result_std -> num_rows;


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Đăng ký</title>



</head>

<body>

    <div class="container_register">

     <form id = cn_register action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0" style = "text-align: center;">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7" style="width: 100%;">
                        <div class="p-5" >
                            <div class="text-center" >
                                <h1 class="h4 text-gray-900 mb-4">Đăng ký tài khoản</h1>
                                <?php echo $result;  ?>
                            </div>
                                <div class="form-group row" style="margin-bottom: 20px;">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Tên" name="u_name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Họ" name="l_name">
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Địa chỉ email" name="email">
                                </div>
                                <div class="form-group row" style="margin-bottom: 20px;">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Mật khẩu" name="pass">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" style="margin-bottom: 10px;"
                                            id="exampleRepeatPassword" placeholder="Lặp lại mật khẩu" name="c_pass">
                                    </div>
                                </div>
                                <div class ="form-group-btn-register">
                                    <button type="submit" class="btn btn-primary btn-user btn-block " name="u_submit">Đăng ký</button>
                                </div>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Bạn có tài khoản! Hãy đăng nhập ngay.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    </div>


</body>

</html>