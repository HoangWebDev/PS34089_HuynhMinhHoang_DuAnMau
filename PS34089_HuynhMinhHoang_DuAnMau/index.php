<?php
session_start();
ob_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
include "./view/global.php";
include "model/connectdb.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/donhang.php";
include "model/user.php";

//load du lieu trang chu
$sphome1 = getall_sp(0, 0);
// $sphome2 = getall_sp(0, 1);
$banner_clss = "inner-banner";
if (!isset($_GET['act'])) {
    $banner_clss = "main-banner";
} elseif (isset($_GET['act']) && (($_GET['act'] == "") || ($_GET['act'] == "home"))) {
    $banner_clss = "main-banner";
}

include_once 'view/header.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {

        case 'product':
            if (isset($_POST['search']) && ($_POST['search'] != "")) {
                $search = $_POST['search'];
            } else {
                $search = "";
            }
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id_catalog = $_GET['id'];
            } else {
                $id_catalog = 0;
                $dssp = getall_sp(0, 0);
            }
            $dsdm = getall_dm();
            $dssp = getall_sp($id_catalog, $search);
            include_once 'view/product.php';
            break;

        case 'productdetail':
            if (isset($_GET['idproduct']) && ($_GET['idproduct'] > 0)) {
                # code...
                $id_product = $_GET['idproduct'];
                $detail = get_detail_product($id_product);
                extract($detail);
                $product_same_type = get_product_same_type($id_product, $id_catalog);
                include_once "view/productdetail.php";
            } else {
                $saleproduct = get_sale_product();
                $sphome1 = getall_sp(0, 0);
                $sphome2 = getall_sp(0, 1);
                include_once "view/home.php";
            }
            break;

        case 'blog':
            # code...
            include_once "view/blog.php";
            break;

        case 'about':
            # code...
            include_once "view/about.php";
            break;

        case 'contact':
            # code...
            include_once "view/contact.php";
            break;

        case 'exit':
            if (isset($_SESSION['role']) && ($_SESSION['iduser'] && ($_SESSION['name']))) {
                unset($_SESSION['role']);
                unset($_SESSION['iduser']);
                unset($_SESSION['name']);
            }
            header('location: index.php');
            break;

        case 'login_user':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $kq = getuser($username, $password);
                if($kq){
                    $role = $kq[0]['role'];
                    if ($role == 1) {
                        $_SESSION['role'] = $role;
                        header("location: admin/index.php");
                    } else {
                        $_SESSION['role'] = $role;
                        $_SESSION['iduser'] = $kq[0]['id'];
                        $_SESSION['email'] = $kq[0]['email'];
                        $_SESSION['name'] = $kq[0]['name'];
                        $_SESSION['username'] = $kq[0]['username'];
                        $_SESSION['password'] = $kq[0]['password'];
                        $_SESSION['address'] = $kq[0]['address'];
                        $_SESSION['phonenumber'] = $kq[0]['phonenumber'];
                        // $_SESSION['username'] = $kq;
                        header("location: index.php");
                        break;
                    }
                }else{
                    include_once "view/login.php";
                    break;
                }
            }

        case 'login':
            # code...
            include_once "view/login.php";
            break;

        case 'forgetpass':
            if (isset($_POST['checkemail']) && ($_POST['checkemail'])) {
                $email = $_POST['email'];
                //Check email show pass
                $check = checkemail($email);
                //Kiểm tra
                if (is_array($check)) {
                    $username = $check['username'];
                    $password =  $check['password'];
                } else {
                    $username = "";
                    $password = "";
                }
            }
            # code...
            include_once "view/forgetpass.php";
            break;

        case 'register':
            if (isset($_POST['register']) && ($_POST['register'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $username = $_POST['user'];
                $password = $_POST['pass'];
                insert_user($name, $email, $username, $password);
                $tb = "Đã đăng ký thành công. Vui lòng đăng nhập";
            }
            # code...
            include_once "view/register.php";
            break;

        case 'userinfor':
            # code...
            if (isset($_POST['edit_user']) && ($_POST['edit_user'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $address = $_POST['address'];
                $phonenumber = $_POST['phonenumber'];
                $id = $_POST['id'];
                //Hàm cập nhật
                update_user($name, $email, $username, $password, $address, $phonenumber, $id);

                header('location: index.php?act=userinfor');
            }
            include_once "view/userinfor.php";
            break;

        case 'viewcart':
            # code...
            include_once "view/viewcart.php";
            break;

        case 'cart':
            # code...
            include_once "view/cart.php";
            break;

        case 'cart_detail':
            # code...
            if (isset($_POST['order']) && ($_POST['order'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $method_cart = $_POST['method_cart'];
                $address = $_POST['address'];
                $phonenumber = $_POST['phonenumber'];
                $date_cart = date("Y-m-d H:i:s");
                $total_cart = total_cart();

                $id_cart = insert_cart($total_cart, $name, $email, $method_cart, $address, $phonenumber, $date_cart);

                //Insert đơn hang, lấy dl từ $_SESSION['giohang'] & insert_cart

                foreach ($_SESSION['giohang'] as $cart) {
                    extract($cart);
                    insert_cart_detail($id_cart, $_SESSION['iduser'], $id, $name, $img, $price, $number, $total);
                }
            }
            $list_cart_detail = getone_cart_detail($id_cart);
            include_once "view/cart_detail.php";
            break;

        case 'delcart':
            if (isset($_GET['ind']) && ($_GET['ind'] >= 0)) {
                array_splice($_SESSION['giohang'], $_GET['ind'], 1);
                header('location: index.php?act=viewcart');
            }
            break;

        case 'addcart':
            if (isset($_POST['btnaddcart']) && ($_POST['btnaddcart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $number = 1;

                //Kiểm tra mặt hàng có tồn tại hay không
                $fl = 0;
                $i = 0;
                foreach ($_SESSION['giohang'] as $sp) {
                    if ($sp[1] === $name) {
                        $numbernew = $item[4] + $number;
                        $_SESSION['giohang'][$i][4] = $numbernew;
                        $fl = 1;
                        break;
                    }
                    $i++;
                }
                if ($fl == 0) {
                    $sp = [
                        'id' => $id,
                        'name' => $name,
                        'img' => $img,
                        'price' => $price,
                        'number' => $number
                    ];
                    $_SESSION['giohang'][] = $sp;
                }
                header('location: index.php?act=viewcart');
            }
            break;

        default:
            $saleproduct = get_sale_product();
            $sphome1 = getall_sp_home();
            // $sphome2 = getall_sp($id_catalog, 1);
            include_once 'view/home.php';
            break;
    }
} else {

    $saleproduct = get_sale_product();
    $sphome1 = getall_sp_home();
    // $sphome2 = getall_sp($id_catalog, 1);
    include_once 'view/home.php';
}
include_once "view/footer.php";
