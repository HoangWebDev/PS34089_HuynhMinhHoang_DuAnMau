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
<link rel="stylesheet" href="./view/layout/css/cart.css">
<!------------------------ Nav --------------------------->
<nav>
    <div class="nav-header__title">
        <h2>Thông tin đơn hàng</h2>
    </div>
    <div class="container">
        <form action="index.php?act=cart_detail" method="post" class="main">
            <!---------------------- Information_user ------------------------->
            <div class="information">
                <h3>THÔNG TIN KHÁCH HÀNG</h3>
                <div class="form-group">
                    <label for="text" class="title">Họ tên:</label>
                    <div class="box-group">
                        <input type="text" name="name" class="input username" autofocus autocomplete="off" value="<?= $name ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text" class="title">Email:</label>
                    <div class="box-group">
                        <input type="text" name="email" class="input username" autofocus autocomplete="off" value="<?= $email ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text" class="title">Địa chỉ:</label>
                    <div class="box-group">
                        <input type="text" name="address" class="input username" autofocus autocomplete="off" value="<?= $address ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text" class="title">Số điện thoại:</label>
                    <div class="box-group">
                        <input type="text" name="phonenumber" class="input username" autofocus autocomplete="off" value="<?= $phonenumber ?>">
                    </div>
                </div>
            </div>
            <!---------------------- End ------------------------->
            <!---------------------- method ------------------------->
            <div class="method">
                <h3>PHƯƠNG THỨC THANH TOÁN</h3>
                <div class="form-group">
                    <ul>
                        <li>
                            <input type="radio" id="f-option" value="1" name="method_cart">
                            <label for="f-option">Thanh toán bằng thẻ</label>
                            <div class="check"></div>
                        </li>
                        <li>
                            <input type="radio" id="s-option" value="2" name="method_cart">
                            <label for="s-option">Trả tiền sau khi nhận hàng</label>
                            <div class="check">
                                <div class="inside"></div>
                            </div>
                        </li>
                    </ul>
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
                                $tt = $price * $number;
                                $tong += $tt;
                            }
                        }

                        ?>
                        <span id="price"><?= $tong ?>0.000đ</span>
                    </div>
                </div>
            </div>
            <!---------------------- End - Product ------------------------->
            <!-- Đặt hàng -->
            <input type="submit" name="order" class="btn_order" value="Xác nhận đặt hàng">
        </form>
    </div>
</nav>