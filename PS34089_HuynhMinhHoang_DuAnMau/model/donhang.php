<?php
/* Product trên cart */
function cart($del)
{
    if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
        $i = 0;
        $tong = 0;
        if ($del == 1) {
            $del_th = '<th>Xóa</th>';
        } else {
            $del_th = '';
        }
        echo '<thead>
        <tr>
            <th>Hình Ảnh</th>
            <th colspan="3">Thông Tin</th>
            <th>Giá</th>
            <th>Số Lượng</th>
            <th>Thành tiền</th>
            ' . $del_th . '
        </tr>
    </thead>';
        foreach ($_SESSION['giohang'] as $sp) {
            extract($sp);
            $tt = $price * $number;
            $tong += $tt;
            $linkdel = "index.php?act=delcart&ind=" . $i;
            if ($del == 1) {
                $del_td = '<td class="delete">
                <a href="' . $linkdel . '">
                <ion-icon name="trash-outline"></ion-icon></a>
            </td>';
            } else {
                $del_td = '';
            }
            echo '
            <tbody>
                <tr>
                                <td><a href="" class="product-image">
                                        <img src="' . PATH_IMG . '' . $img . '" alt="">
                                    </a></td>
                                <td colspan="3"> <a href="">
                                        <h4>' . $name . '</h4>
                                    </a>
                                </td>
                                <td>
                                    <div class="price-main">
                                        <p class="price-cut">' . $price . '</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="number-pro">
                                        <button onclick="handleMinus()"><ion-icon name="remove-outline"></ion-icon></button>
                                        <input type="text" value="'. $number.'" id="numberip">
                                        <button onclick="handlePlus()"><ion-icon name="add-outline"></ion-icon></button>
                                    </div>
                                </td>
                                <td>
                                    ' . $tt . '
                                </td>
                                ' . $del_td . '
                                </tr>
                                </tbody>';
            $i++;
        }
    }
}
//Tổng đơn hàng
function total_cart()
{
    $tong = 0;

    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $tt = $price * $number;
        $tong += $tt;
    }
    return $tong;
}

//Insert đơn hàng

function insert_cart($total_cart, $name, $email, $method_cart, $address, $phonenumber, $date_cart)
{
    $sql = "INSERT INTO cart (total_cart, name, email, method_cart, address, phonenumber, date_cart) VALUES ('$total_cart', '$name', '$email', '$method_cart', '$address', '$phonenumber', '$date_cart')";
    return lastinsert_ID($sql);
}
function insert_cart_detail($id_cart, $id_user, $id_product, $name, $img, $price, $number, $total)
{
    $sql = "INSERT INTO cart_details (id_cart, id_user, id_product, name, img, price, number, total) VALUES ('$id_cart', '$id_user', '$id_product', '$name', '$img', '$price', '$number', '$total')";
    return insert($sql);
}

function getone_cart_detail($id)
{
    $sql = "SELECT * FROM cart WHERE id =" . $id;
    return get_one($sql);
}
