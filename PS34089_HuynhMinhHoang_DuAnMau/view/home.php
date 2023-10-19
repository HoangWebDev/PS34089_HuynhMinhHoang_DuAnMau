<link rel="stylesheet" href="./view/layout/css/main.css">
<!-----------------------Nav--------------------------->
<div id="container-wrap">
    <div id="event">
        <div class="box-event">
            <img id="myImg" src="./view/layout/image/Realme-C55-720-220-720x220.webp" width="1920px" height="355px"
                alt="">
            <ion-icon onclick="nextImg()" class="next" name="arrow-forward-outline"></ion-icon>
            <ion-icon onclick="prevImg()" class="prev" name="arrow-back-outline"></ion-icon>
        </div>
    </div>
    <nav>
        <div class="contact">
            <h2>
                <ion-icon name="ribbon-outline"></ion-icon>Sản phẩm mới
            </h2>
            <div class="product-main product-iphone">
                <?php
                foreach ($newproduct as $sp) {
                    extract($sp);
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
                    $linkdetail = 'index.php?act=productdetail&idproduct=' . $id;
                    echo
                    '<div class="product">
                        <div class="product-image">
                            <a href="' . $linkdetail . '">
                                <img src="' . PATH_IMG . '' . $img . '" alt="">
                            </a>
                            </div>
                            <div class="content">
                                <a href="' . $linkdetail . '">
                                    <h4>' . $name . '</h4>
                                </a>
                                <div class="price-list">
                                    <div class="price-main">
                                    ' . $gia . '
                                    ' . $giacu . '
                                    </div>
                                ' . $promo . '
                            </div>
                        </div>
                        <div class="button-buy">
                        <form action="index.php?act=addcart" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <input type="hidden" name="number" value="1">
                            <input type="submit" name="btnaddcart" value="Đặt hàng" class="btn_product">
                        </form>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
        <!-- Sản phẩm Iphone -->
        <div class="contact">
            <h2>Sản Phẩm Phổ Biến</h2>
            <div class="product-main product-iphone">
                <?php
                foreach ($sphome1 as $sp) {
                    extract($sp);
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
                    $linkdetail = 'index.php?act=productdetail&idproduct=' . $id;
                    echo
                    '<div class="product">
                        <div class="product-image">
                            <a href="' . $linkdetail . '">
                                <img src="' . PATH_IMG . '' . $img . '" alt="">
                            </a>
                            </div>
                                <div class="content">
                                    <a href="' . $linkdetail . '">
                                    <h4>' . $name . '</h4>
                                    </a>
                                        <div class="price-list">
                                            <div class="price-main">
                                            ' . $gia . '
                                            ' . $giacu . '
                                            </div>
                                            ' . $promo . '
                                        </div>
                                        </div>
                                    <div class="button-buy">
                                        <form action="index.php?act=addcart" method="post">
                                            <input type="hidden" name="id" value="' . $id . '">
                                            <input type="hidden" name="name" value="' . $name . '">
                                            <input type="hidden" name="img" value="' . $img . '">
                                            <input type="hidden" name="price" value="' . $price . '">
                                            <input type="hidden" name="soluong" value="1">
                                            <input type="submit" name="btnaddcart" value="Đặt hàng" class="btn_product">
                                        </form>
                                    </div>
                        </div>';
                }
                ?>
            </div>
        </div>
    </nav>
</div>

<!-- Title cuối nav -->
<div class="the-end">
    <ul class="the-end_menu">
        <li>
            <ion-icon name="checkmark-circle-outline"></ion-icon>
            <span>Mẫu mã đa dạng,
                chính hãng
            </span>
        </li>
        <li>
            <ion-icon name="car-outline"></ion-icon>
            <span>Giao hàng toàn quốc</span>
        </li>
        <li>
            <ion-icon name="shield-outline"></ion-icon>
            <span>Bảo hảnh 12 tháng</span>
        </li>
        <li>
            <ion-icon name="refresh-outline"></ion-icon>
            <span>Có thể đổi trả,
                trong thời gian quy định
            </span>
        </li>
    </ul>
</div>
<script src="./view/layout/js/slideshow.js"></script>