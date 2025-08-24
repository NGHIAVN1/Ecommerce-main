<?php 
include 'header.php';
// Session is already started in header.php, no need to start it again

if(isset($_SESSION['auth']))
{
    if($_SESSION['auth']==1)
    {
        header("location:index.php");
        exit();
    }
}


include "lib/connection.php";
    if (isset($_POST['submit'])) 
    {
        $email = $_POST['email'];
        $pass = md5($_POST['password']);

        $loginquery="SELECT * FROM users WHERE email='$email' AND pass='$pass'";
        $loginres = $conn->query($loginquery);

        echo $loginres->num_rows;

        if ($loginres->num_rows > 0) 
        {

            while ($result=$loginres->fetch_assoc()) 
            {
                $username=$result['f_name'];
                $userid=$result['id'];
            }

            $_SESSION['username']=$username;
            $_SESSION['userid']=$userid;
            $_SESSION['auth']=1;
            header("location:index.php");
        }
        else
        {
            echo "<script>alert('Sai tên tài khoản hoặc mật khẩu')</script>";
        }
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="http://localhost/E-commerce-main/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <title>Đăng nhập</title>


</head>

<body>
    <!-- <div class="row">
        <div style="height: 100px;" class="col-lg-4 col-md-2 col-sm-2 bg-primary"></div>
        <div style="height: 100px;" class="col-lg-4 col-md-8 col-sm-4 bg-secondary"></div>
        <div style="height: 100px;" class="col-lg-4 col-md-2 col-sm-6 bg-success"></div>
    </div> -->
    <div class="container login_container d-flex justify-content-center">

        <!-- Outer Row -->
        <div class="login_area" >
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Chào mừng trở lại!</h1>
            </div>
            <form id="login_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="exampleInputType" class="form-label">Tài khoản</label>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user"
                        id="exampleInputEmail" aria-describedby="emailHelp"
                        name="email"
                        placeholder="Nhập địa chỉ email"/>
                </div>
                <label for="exampleInputType" class="form-label">Mật khẩu</label>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Mật khẩu" name="password"/>
                </div>
                <div class="form-group form-group-btn-login">
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Đăng nhập"/>
                </div>
                <hr>
                <div  class="form-group form-group-link-create">
                    <a class="small" href="register.php">Bạn chưa có tài khoản!Hãy tạo tài khoản!</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>