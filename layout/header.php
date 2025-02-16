<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <!-- <link rel="stylesheet" href="./css/login.css"> -->
    <title>M1</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="header">
        <!--Logo-->
        <div id="logo" class="logo">
            <a href="index.php?action=trangchu"><img width="156px" src="./hinh anh/logo11.png" alt=""></a>
        </div>
        <!--Search-->
        <div class="search">
            <ul class="header-nav">
                <li class="header-search">
                    <div class="flex-col">
                        <input class="input-search" type="search" placeholder="Tìm kiếm...">
                        <button class="button-search" type="submit"><i class='bx bx-search-alt-2'></i></button>
                    </div>
                </li>
            </ul>
        </div>
        <!--Left element-->
        <div class="flex-right-element">
            <ul class="header-right">
                <li class="header-block">
                    <div class="icon-box">
                        <img style="width: 30px;" src="./hinh anh/phone-2-100x100-1.png" alt="">
                    </div>
                    <div class="header-box-text">
                        <div class="text">
                            Hỗ trợ khách hàng
                            <h3>
                                <strong style="color: #3DA04D;">0988382xxx</strong>
                            </h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--Cart-->
        <div class="yourcart">
            <div class="cart">
                <div class="cart-text">
                    <a href="">
                        <h4>GIỎ HÀNG</h4>
                    </a>
                </div>
            </div>

            <div class="cart-icon">
                <a href="index.php?action=giohang"><i class='bx bx-cart-add'></i></a>
            </div>
        </div>
        <div class="login">
            <a href="index.php?action=dangnhap"><i class='bx bxs-user-circle'></i></a>
       </div>
    </div>
    <div class="nav">
        <ul>
            <li><a href="index.php?action=trangchu">TRANG CHỦ</a></li>
            <li><a href="index.php?action=gioithieu">GIỚI THIỆU</a></li>
            <li><a href="index.php?action=sanpham">SẢN PHẨM</a></li>
            <li><a href="index.php?action=tuyendung">TUYỂN DỤNG</a></li>
            <li><a href="index.php?action=tintuc">TIN TỨC</a></li>
            <li><a href="index.php?action=lienhe">LIÊN HỆ</a></li>
        </ul>
    </div>
  