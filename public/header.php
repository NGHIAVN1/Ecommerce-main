<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shunshine Electronic</title>
    <meta charset="UTF-8">
    <meta name="description" content="test">
    <meta name="keywords" content="HTML, CSS, BOOTSTRAP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <!--font-family: 'Raleway', sans-serif;-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
    <!--header start--->
    <!--header end--->
    <?php 
 include "lib/connection.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
  $id = $_SESSION['userid']?? "";
 $sql = "SELECT * FROM cart where userid='$id'";
 $result = $conn -> query ($sql);
?>
    <header>
        <div class="nav-main">
            <nav>
                <div class="logo">
                    <a href="index.php">
                        <div class="row align-items-center">
                            <div class="col-md-4 p-0">
                                <img src="img/my-logo.webp">
                            </div>
                            <div class="col-md-8 p-0">
                                <p>FOXY<span style="color: #038503ff">.COM</span>
                                <p>

                            </div>
                        </div>

                    </a>
                </div>
                <ul>
                    <li>
                        <div class="row align-items-center">
                            <div class="col-md-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 640 640">
                                    <!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z" />
                                </svg>
                            </div>
                            <div class="col-md-9 align-items-center">
                                <span>Danh Mục</span>
                            </div>
                        
                        </div>
                    </li>
                    <li>
                        <div  class="d-flex justify-content-between">
                            <input   class="form-control my-0 mx-3 border-0" type="text" placeholder="Tim kiem san pham"
                                aria-label=".form-control example">
                            <button class="btn btn-outline-dark p-0 m-0 border-0" type="submit"
                                style="margin-left:7px;margin-right:7px;"><img src="img/search.png"></button>
                        </div>
                       
                        <!--<a href=""><img src="img/search.png"></a>-->
                         <div class="result-find">
                            <p>Kết quả tìm kiếm</p>
                         </div>
                    </li>
                </ul>
                
                <div class="nav-end">
                    <div class="nav-1-item col-md-3">
                        <div class="row d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" height="44" width="44" viewBox="0 0 640 640">
                                <!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M320 312C386.3 312 440 258.3 440 192C440 125.7 386.3 72 320 72C253.7 72 200 125.7 200 192C200 258.3 253.7 312 320 312zM290.3 368C191.8 368 112 447.8 112 546.3C112 562.7 125.3 576 141.7 576L498.3 576C514.7 576 528 562.7 528 546.3C528 447.8 448.2 368 349.7 368L290.3 368z" />
                            </svg>
                        </div>
                    </div>
                    <div class="nav-2-item col-md-9 ">
                        <a href="cart.php">
                            <div class="row ">
                            <div class="col-md-4" style="padding: 0px">
                                <span >
                                    <?php
                                    $total=0;
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                        $total++;
                                        }
                                    }
                                        ?>
                                    <svg  value="<?php echo $total?>" xmlns="http://www.w3.org/2000/svg" height="24"
                                        width="24" viewBox="0 0 640 640">
                                        <!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="#ffffff"
                                            d="M24 48C10.7 48 0 58.7 0 72C0 85.3 10.7 96 24 96L69.3 96C73.2 96 76.5 98.8 77.2 102.6L129.3 388.9C135.5 423.1 165.3 448 200.1 448L456 448C469.3 448 480 437.3 480 424C480 410.7 469.3 400 456 400L200.1 400C188.5 400 178.6 391.7 176.5 380.3L171.4 352L475 352C505.8 352 532.2 330.1 537.9 299.8L568.9 133.9C572.6 114.2 557.5 96 537.4 96L124.7 96L124.3 94C119.5 67.4 96.3 48 69.2 48L24 48zM208 576C234.5 576 256 554.5 256 528C256 501.5 234.5 480 208 480C181.5 480 160 501.5 160 528C160 554.5 181.5 576 208 576zM432 576C458.5 576 480 554.5 480 528C480 501.5 458.5 480 432 480C405.5 480 384 501.5 384 528C384 554.5 405.5 576 432 576z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="col-md-8 p-0">
                                <p py-0 my-0>Gio hang</p>
                            </div>
                        </div>
                        </a>
                        

                    </div>
                </div>
                
            </nav>
        </div>
        <div class="nav-menu">
            <div class="nav-items">
                <ul>
                    <li><a href="index.php">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="img/Icon_50_d68b462c30.webp">
                                </div>
                                <div class="col-md-10">
                                    <p>Săn Deal Online</p>
                                </div>
                            </div>
                        </a></li>
                    <li><a href="product.php">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="img/Icon_Gia_soc_517729dd32.webp">
                                </div>
                                <div class="col-md-10">
                                    <p>Chốt Samsung hạ giá</p>
                                </div>
                            </div>
                        </a></li>
                    <li><a href="cart.php">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="img/Live_dcc0f0e59e.webp">
                                </div>

                                <div class="col-md-10">
                                    <p> Săn Deal OPPO 0đ </p>
                                </div>
                            </div>
                        </a></li>
                    <li><a href="contact.php">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="img/icon_may_loc_nuoc_c36fe887af.webp">
                                </div>
                                <div class="col-md-10">
                                    <p>Thu cũ máy lọc nước</p>
                                </div>
                            </div>
            </div></a></li>
            </ul>
            <div class="nav-items-end">
            </div>

        </div>
        </div>
                    <script src="js/search-expan.js"></script>

    </header>
    <!--nav end--->