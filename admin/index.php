<?php 
    session_start();
include "lib/connection.php";

    if (isset($_POST['submit'])) 
    {
        $email = $_POST['email'];
        $pass = ($_POST['password']);
        echo $email;
        echo $pass;

        $loginquery="SELECT * FROM admin WHERE userid='$email' AND pass='$pass'";
        $loginres = $conn->query($loginquery);

        echo $loginres->num_rows;

        if ($loginres->num_rows > 0) 
        {

            while ($result=$loginres->fetch_assoc()) 
            {
                $adminname=$result['userid'];
               
            }
            $_SESSION['admin_name']=$adminname;
            $_SESSION['admin_id']=1;
            header("location:home.php");
        }
        else
        {
            echo "<script>alert('Sai tên tài khoản hoặc mật khẩu')</script>";
        }
    }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/E-commerce-main/Admin/css/login.css">
</head>
<body>
<body>
    <!-- <div class="row">
        <div style="height: 100px;" class="col-lg-4 col-md-2 col-sm-2 bg-primary"></div>
        <div style="height: 100px;" class="col-lg-4 col-md-8 col-sm-4 bg-secondary"></div>
        <div style="height: 100px;" class="col-lg-4 col-md-2 col-sm-6 bg-success"></div>
    </div> -->
    <div class="login_container ">

        <!-- Outer Row -->
        <div class="login_area card" >
            <div class="card-header text-center" style="background-color: var(--bs-purple); color: white;">
                <h3>Đăng nhập Quản Trị Viên</h3>
            </div>
            <div class="card-body">
                      <form id="login_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tên tài khoản" name="email">
                        
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                    </div>
                    <div class="form-group-btn-login" >
                        <input type="submit" value="Đăng nhập" class="btn btn-primary " style="background-color: var(--bs-purple); color: white;" name="submit">
                    </div>
                </form>
            </div>
      
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>

</html>