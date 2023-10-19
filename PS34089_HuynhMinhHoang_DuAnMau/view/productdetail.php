<link rel="stylesheet" href="./view/layout/css/productct.css">
<?php
extract($detail);
if ($promotion > 0) {
    $promo = '<p>Giảm Giá ' . $promotion . '%</p>';
} else {
    $promo = '';
}
if ($price > 0) {
    $gia = '<span class="price-cut">' . $price . '0.000đ</span>';
} else {
    $gia = '<span class="price-cut">Đang cập nhật</span>';
}
if ($price_sale > 0) {
    $giacu = '<span class="price">' . $price_sale . '0.000đ</span>';
} else {
    $giacu = '';
}
$hinh = '<img class="img-fearture" src="' . PATH_IMG . '' . $img . '" alt="">';
?>
<nav>
    <div id="container-wrap">
        <div class="pro-orther">
            <a href="index.php">
                <ion-icon name="arrow-back-outline"></ion-icon>Mua sản phẩm khác
            </a>
        </div>
        <div class="box-pro">
            <div class="product">
                <div class="images">
                    <div class="product-image" onmouseover="hienthi(true)" onmouseout="hienthi(false)">
                        <?= $hinh ?>
                        <div class="onmouse">
                            <ion-icon name="heart-outline"></ion-icon>
                            <ion-icon name="happy-outline"></ion-icon>
                            <ion-icon name="person-add-outline"></ion-icon>
                            <ion-icon name="bag-add-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="ct-img">
                        <div class="img">
                            <img src="./view/layout/image/ctsp_iphone1.webp" alt="">
                        </div>
                        <div class="img">
                            <img src="./view/layout/image/ctsp_iphone2.webp" alt="">
                        </div>
                        <div class="img">
                            <img src="./view/layout/image/ctsp_iphone3.webp" alt="">
                        </div>
                        <div class="img">
                            <img src="./view/layout/image/ctsp_iphone4.webp" alt="">
                        </div>
                        <div class="img">
                            <img src="./view/layout/image/ctsp_iphone5.webp" alt="">
                        </div>
                    </div>
                    <div class="pro-wrap">
                        <div class="wrap_1">
                            <div class="flex wrap-child_1">
                                <ion-icon name="arrow-undo-outline"></ion-icon>
                                <p>Hư gì đổi nấy trong <strong>12 tháng</strong> trên toàn quốc</p>
                            </div>
                            <div class="flex wrap-child_2">
                                <ion-icon name="shield-outline"></ion-icon>
                                <p>Bảo hành chính hãng <strong>1 năm</strong> tại các trung tâm bão hành</p>
                            </div>
                        </div>
                        <div class="flex wrap_2">
                            <ion-icon name="cube-outline"></ion-icon>
                            <p>Bộ sản phẩm bao gồm: Hộp, Sách hướng dẫn, Cây lấy sim, Cáp Lightning - Type
                                C</p>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <a href="">
                        <h4><?= $name ?></h4>
                    </a>
                    <div class="price-list">
                        <div class="price-main">
                            <?= $gia ?>
                            <?= $giacu ?>
                        </div>
                        <?= $promo ?>
                    </div>
                    <div class="capacity">
                        <button class="g">8GB - 128GB</button>
                        <button class="g">16GB - 256GB</button>
                        <button class="g">32GB - 1TB</button>
                    </div>
                    <div class="content-child">
                        <div class="title">
                            <h4>Khuyến mãi</h4>
                            <h5>Áp dụng giá khuyến mãi</h5>
                        </div>
                        <div class="contact">
                            - Thu cũ Đổi mới: Giảm đến 2 triệu (Tùy model máy cũ, không kèm các hình thức
                            thanh
                            toán online, mua kèm).
                            <br>
                            - Sản phẩm mua kèm:
                            <p>
                                + Airpods:Giảm 10% <br>
                                + Apple Watch:Giảm 30% <br>
                                + Ipad:Giảm 50%
                            </p>
                            - Mã giảm giá 200.000<sup>đ</sup> khi thanh toán qua App
                            - Bảo hành 1 năm đổi trả
                        </div>
                        <div class="inside">
                            <h3>Cấu Hình Điện Thoại</h3>
                            <div class="table">
                                <table>
                                    <tr>
                                        <td>Màn Hình:</td>
                                        <td colspan="2">OLED, 6,1"</td>
                                    </tr>
                                    <tr>
                                        <td>Hệ Điều Hành:</td>
                                        <td colspan="2">IOS 16</td>
                                    </tr>
                                    <tr>
                                        <td>RAM:</td>
                                        <td colspan="2">6GB</td>
                                    </tr>
                                    <tr>
                                        <td>Dung Lương Lưu Trữ:</td>
                                        <td colspan="2">128GB</td>
                                    </tr>
                                    <tr>
                                        <td>SIM:</td>
                                        <td colspan="2">1 NANO SIM & 1 eSIM"</td>
                                    </tr>
                                    <tr>
                                        <td>Pin, Sạc:</td>
                                        <td colspan="2">3200mAh, 20W</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <form action="index.php?act=addcart" method="post">
                                            <input type="hidden" name="id" value="<?= $id ?>">
                                            <input type="hidden" name="name" value="<?= $name  ?>">
                                            <input type="hidden" name="img" value="<?= $img  ?>">
                                            <input type="hidden" name="price" value="<?= $price  ?>">
                                            <input type="hidden" name="number" value="1">
                                            <input type="submit" name="btnaddcart" value="Mua Ngay" class="buy-now">
                    </form>
                    <button class="buy-now buy-gop"><a href="">Mua Trả Góp 0%</a></button>
                    <!-- <button class="buy-now"><a>Mua
                            Ngay</a></button>
                    <button class="buy-now buy-gop"><a href="">Mua Trả Góp 0%</a></button> -->
                </div>
            </div>
        </div>
        <div class="nav-af">
            <div class="box-nav-af">
                <div class="title-nav-af">
                    <h2>Sản phẩm cùng loại</h2>
                </div>
                <div class="box-images">
                    <!-- <script src="./view/layout/js/loadcatIP.js"></script> -->
                    <?php
                    foreach ($product_same_type as $item) {
                        extract($item);
                        $linkdetail = 'index.php?act=productdetail&idproduct=' . $id;
                        echo ' <div class="item">
                                    <a href="' . $linkdetail . '">
                                        <div class="img-ac">
                                            <img alt=""
                                                src="' . PATH_IMG . '' . $img . '">
                                        </div>
                                        <div class="note">
                                            <h4>' . $name . '</h4>
                                            <span>
                                                <b>' . $price . '0.000đ</b>
                                            </span>
                                        </div>
                                    </a>
                                </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</nav>
<script>
var onmouse = document.querySelector('.onmouse');
var imgFearture = document.querySelector('.img-fearture');
var listImg = document.querySelectorAll('.img');
listImg.forEach(imgElement => {
    imgElement.addEventListener('click', img => {
        imgFearture.src = img.target.getAttribute('src')
    })
});

function hienthi(x) {
    onmouse.style.opacity = x == true ? "1" : "0";
    onmouse.style.visibility = x == true ? "visible" : "hidden";
    imgFearture.style.opacity = x == true ? "0.5" : "1";
}
</script>