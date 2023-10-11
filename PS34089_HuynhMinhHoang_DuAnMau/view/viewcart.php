<link rel="stylesheet" href="./view/layout/css/giohang.css">

<nav>
    <div class="pro-orther">
        <a href="index.php">
            <ion-icon name="arrow-back-outline"></ion-icon>Mua sản phẩm khác
        </a>
    </div>
    <div class="box">
        <div class="product">
            <table class="table">

                <?php
                cart(1);
                ?>
            </table>
        </div>
    </div>
</nav>
<div id="pay">
    <div class="pay-box">
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
            <span id="price">$<?= $tong ?></span>
        </div>
        <a class="btn_order" href="index.php?act=cart">Đặt Hàng</a>
        <!-- <button class="order"><a class="order" href="index.php?act=cart_detail">Đặt Hàng</a></button> -->
    </div>
</div>
<!-- //Tăng số lượng sản phẩm -->
<script>
    let numberip = document.getElementById("numberip");
    let number = numberip.value;

    let render = (number) => {
        numberip.value = number;
    }

    let handlePlus = () => {
        number++;
        render(number);
    }

    let handleMinus = () => {
        if (number > 1)
            number--;
        render(number);
    }

    numberip.addEventListener("input", () => {
        number = numberip.value;
        number = parseInt(number);
        number = (isNaN(number) || number == 0) ? 1 : number;
        render(number);
    });
</script>