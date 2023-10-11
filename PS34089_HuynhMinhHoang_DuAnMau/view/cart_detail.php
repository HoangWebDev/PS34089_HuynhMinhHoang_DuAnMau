<?php
if (isset($_SESSION['name']) && ($_SESSION['email']) && ($_SESSION['address']) && ($_SESSION['phonenumber'])) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $address = $_SESSION['address'];
    $phonenumber = $_SESSION['phonenumber'];
} else {
    $name = "";
    $email = "";
    $address = "";
    $phonenumber = "";
}
?>
<link rel="stylesheet" href="./view/layout/css/cart_detail.css">
<!------------------------ Nav --------------------------->
<nav>
    <div class="nav-header__title">
        <h2>Xác nhận đơn hàng</h2>
    </div>
    <?php
    if (isset($list_cart_detail) && is_array($list_cart_detail)) {
        extract($list_cart_detail);
    }
    ?>
    <div class="container">
        <div class="main">
            <!---------------------- Information_user ------------------------->
            <div class="information">
                <h3>THÔNG TIN KHÁCH HÀNG</h3>
                <table>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?= $name ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $email ?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?= $address ?></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td><?= $phonenumber ?></td>
                    </tr>
                </table>
            </div>
            <!---------------------- End ------------------------->
            <!---------------------- method ------------------------->
            <div class="method">
                <h3>PHƯƠNG THỨC THANH TOÁN</h3>
                <div class="form-group">
                    <div><?= $method_cart ?></div>
                </div>
            </div>
            <!---------------------- End - Product ------------------------->
            <!---------------------- Products ------------------------->
            <div class="list-products">
                <h3>DANH SÁCH GIỎ HÀNG</h3>
                <div class="box">
                    <div class="product">
                        <table class="table">

                            <?php
                            cart(0);
                            ?>

                        </table>
                    </div>
                    <div class="money">
                        <h3>Tổng tiền:</h3>

                        <?php
                        if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                            $i = 0;
                            $tong = 0;
                            // var_dump($_SESSION['giohang']);
                            foreach ($_SESSION['giohang'] as $sp) {
                                extract($sp);
                                $tt = $price * $soluong;
                                $tong += $tt;
                            }
                        }

                        ?>
                        <span id="price">$<?= $tong ?></span>
                    </div>
                </div>
            </div>
            <!---------------------- End - Product ------------------------->
            <!-- Đặt hàng -->
            <a class="btn_order" href="index.php?act=cart_detail">Xác nhận đặt hàng</a>
        </div>
    </div>
</nav>