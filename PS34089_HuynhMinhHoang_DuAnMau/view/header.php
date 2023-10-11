<?php
// session_start();
ob_start();

if (isset($_SESSION['name']) && ($_SESSION['name'] != "")) {
    $logined =  '<a href="index.php?act=userinfor">' . '<i><ion-icon name="person-circle-outline"></ion-icon></i>' . $_SESSION['name'] . '</a>
                                <a href="index.php?act=exit">Đăng Xuất</a>
                                ';
} else {
    $logined = '
                                <a href="index.php?act=login">Đăng Nhập</a>
                                <a href="index.php?act=register">Đăng Ký</a>
                                ';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Phone</title>
    <link rel="stylesheet" href="./view/layout/css/header.css">
    <link rel="stylesheet" href="./view/layout/css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./view/layout/css/shop.css"> -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <!-----------------------Header--------------------------->
    <header>
        <div id=header-content>
            <div class="header-content_w1300">
                <div class="number-phone__map">
                    <div class="number-phone">
                        <p>
                            <ion-icon name="call-outline"></ion-icon>
                            <span>1800.113114</span>
                        </p>
                    </div>
                    <div class="map">
                        <p>
                            <ion-icon name="location-outline"></ion-icon>
                            <span>Đại chỉ cửa hàng</span>
                        </p>
                    </div>
                </div>
                <div class="profile">
                    <img src="./view/layout/image/chinh_sach_bao_hanh.jpg" alt="Hàng chính hãng">
                </div>
                <div class="profile">
                    <img src="./view/layout/image/chinh_hang_VAT.jpg" alt="Hàng chính hãng">
                </div>
            </div>
        </div>
        <div id="header">
            <div class="container-menu">
                <a href="index.php" class="logo">
                    <img src="./view/layout/image/logo.png" alt="">
                </a>
                <ul class="main-menu">
                    <li><a href="index.php">Trang chủ</a>
                    </li>
                    <li><a href="index.php?act=product">Sản phẩm</a>
                        <!-- Menu Đa Cấp -->
                        <ul class="child-menu">
                            <div class="children">
                                <h4>Điện Thoại</h4>
                                <li><a href="">Apple</a></li>
                                <li><a href="">Samsung</a></li>
                                <li><a href="">Oppo</a></li>
                                <li><a href="">Xiaome</a></li>
                                <li><a href="">Realmi</a></li>
                                <li><a href="">Vivo</a></li>
                            </div>
                            <div class="children">
                                <h4>Laptop</h4>
                                <li><a href="">MSI</a></li>
                                <li><a href="">Macbook</a></li>
                                <li><a href="">Dell</a></li>
                                <li><a href="">Asus</a></li>
                                <li><a href="">Lenovo</a></li>
                            </div>
                        </ul>
                    </li>
                    <li><a href="index.php?act=blog">Blog</a></li>
                    <li><a href="index.php?act=about">Về chúng tôi</a></li>
                    <li><a href="index.php?act=contact">Liên hệ</a></li>
                </ul>
            </div>
            <div class="group">
                <div class="search-box">
                    <form action="index.php?act=product" method="post">
                        <input type="search" class="search-text" name="search" placeholder="Search">
                        <button class="search-btn">
                            <ion-icon name="search-outline"></ion-icon>
                        </button>
                    </form>
                </div>
                <div class="cart">
                    <!-- Tạo số lượng sản phẩm trên giỏ hàng -->
                    <a href="index.php?act=viewcart">
                        <ion-icon name="cart-outline" class="cart-icon"></ion-icon>
                    </a>
                    <span class="num-cart">0</span>
                </div>
                <div class="toggle">
                    <ion-icon class="toggle_menu" name="menu-outline">
                    </ion-icon>
                    <ul class="mobile-menu">
                        <ion-icon class="toggle_close" name="close-outline"></ion-icon>
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="index.php?act=product">Shop</a>
                        </li>
                        <li><a href="index.php?act=blog">Blog</a>
                        </li>
                        <li><a href="index.php?act=about">About</a>
                        </li>
                        <li><a href="index.php?act=contact">Contact</a>
                        </li>
                        <div class="container-login_mobile">
                            <?= $logined ?>
                            <!-- <?php
                                    if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                                        echo '<a href="index.php?act=userinfor">' . $_SESSION['user'] . '</a>
                                <a href="index.php?act=exit">Thoát</a>
                                ';
                                    } else {
                                    ?>
                                <a href="index.php?act=login">Đăng Nhập</a>
                                <a href="index.php?act=register">Đăng Ký</a>
                            <?php } ?> -->
                        </div>
                    </ul>
                    <div class="overflow"></div>
                </div>
                <div class="container-login">
                    <?= $logined ?>
                    <!-- <?php
                            if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                                echo '<a href="index.php?act=userinfor">' . $_SESSION['user'] . '</a>
                                <a href="index.php?act=exit">Thoát</a>
                                ';
                            } else {
                            ?>
                        <a href="index.php?act=login">Đăng Nhập</a>
                        <a href="index.php?act=register">Đăng Ký</a>
                    <?php } ?> -->
                </div>
            </div>
        </div>
    </header>