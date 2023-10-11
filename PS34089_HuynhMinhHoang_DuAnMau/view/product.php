<link rel="stylesheet" href="./view/layout/css/shop.css">
<!------------------------ Nav --------------------------->
<nav>
    <div class="title">
        <h2>Shop</h2>
    </div>
    <div class="catalog">
        <?php
        foreach ($dsdm as $dm) {
            extract($dm);
            echo
            '<a href="index.php?act=product&id=' . $id . '" class="cata_item">
                <p class="title_cata">' . $name . '</p>
            </a>';
        }
        ?>
    </div>
    <div class="container">
        <div class="main">
            <!---------------------- Catalog ------------------------->
            <div class="catalogs_chil">
                <div class="list_catalog__chil">
                    <div class="item_cata__chil">
                        <h3>Brand</h3>
                        <ul>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">Apple</a>
                            </li>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">Samsung</a>
                            </li>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">Oppo</a>
                            </li>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">Xiaomi</a>
                            </li>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">Realme</a>
                            </li>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">Vivo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_cata__chil">
                        <h3>Price</h3>
                        <ul>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">Từ 2 - 5 triêu</a>
                            </li>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">Từ 6 - 9 triệu</a>
                            </li>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">Từ 10 - 25 triệu</a>
                            </li>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">Từ 25 triệu trở
                                    lên</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_cata__chil">
                        <h3>Type</h3>
                        <ul>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">Android</a>
                            </li>
                            <li>
                                <ion-icon name="chevron-forward-outline"></ion-icon><a href="">IOS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!---------------------- End - Catalog ------------------------->
            <!---------------------- Product ------------------------->
            <div class="products">
                <div class="list_product">
                    <div class="product-main product-iphone">
                        <?php
                        foreach ($dssp as $sp) {
                            extract($sp);
                            if ($promotion > 0) {
                                $promo = '<p>Giảm Giá ' . $promotion . '%</p>';
                            } else {
                                $promo = '';
                            }
                            if ($price > 0) {
                                $gia = '<span class="price-cut">$' . $price . '</span>';
                            } else {
                                $gia = '<span class="price-cut">Đang cập nhật</span>';
                            }
                            if ($price_sale > 0) {
                                $giacu = '<span class="price">$' . $price_sale . '</span>';
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
            </div>
            <!---------------------- End - Product ------------------------->
        </div>
    </div>
</nav>