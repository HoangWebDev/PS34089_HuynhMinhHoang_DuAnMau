<?php
session_start();
ob_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    require_once "../view/global.php";
    require_once "../model/connectdb.php";
    require_once "../model/danhmuc.php";
    require_once "../model/sanpham.php";
    require_once "../model/user.php";
    require_once "../model/tonghop_thongke.php";
    require_once('public/head.php');
    require_once('public/nav.php');

    if (isset($_GET['page'])) {
        switch ($_GET['page']) {

            case 'home':
                require_once('public/home.php');
                break;

            case 'del':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    //xóa dm
                    $id = $_GET['id'];
                    $tb = deldm($id);
                }
                //load lại dm sau khi xóa
                $cataloglist = getall_dm();
                require_once('public/categories.php');
                break;

            case 'categories':
                $cataloglist = getall_dm();
                require_once('public/categories.php');
                break;

            case 'add_dm':
                //lấy data từ form
                if (isset($_POST['btnadd'])) {
                    $name = $_POST['name'];
                    themdm($name);
                }
                //load lại
                $cataloglist = getall_dm();
                require_once('public/categories.php');
                break;

            case 'update':
                if (isset($_POST['btnupdate']) && ($_POST['btnupdate'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    updatedm($id, $name);
                    $cataloglist = getall_dm();
                    require_once('public/categories.php');
                }
                break;

            case 'updateform':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $catalogone = getonedm($id);
                    require_once('public/updateform.php');
                } else {
                    require_once('public/404.php');
                }
                break;

            case 'productupdateform':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $productone = get_detail_product($id);
                    $cataloglist = getall_dm();
                    require_once('public/productupdateform.php');
                } else {
                    require_once('public/404.php');
                }
                break;

            case 'updateproduct':
                //Lay du lieu tu form
                if (isset($_POST['btnupdate'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $price_sale = $_POST['price_sale'];
                    $promotion = $_POST['promotion'];
                    $id_catalog = $_POST['id_catalog'];
                    //Lay hinh
                    $ten_file_hinh = $_FILES['img']['name'];
                    if ($ten_file_hinh != "") {
                        //Upload hinh len host
                        $target_file = "../" . PATH_IMG . basename($_FILES['img']['name']);
                        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                        //Xoa hinh cu
                        $hinh_cu = "../" . PATH_IMG . $_POST['hinhcu'];
                        if (file_exists($hinh_cu))
                            unlink($hinh_cu);
                    }
                    //Cap nhat database
                    update_product($id, $name, $price, $price_sale, $promotion, $id_catalog, $ten_file_hinh);
                }
                //Load dssp
                $productlist = getall_sp_admin();
                header('Location: index.php?page=products');
                // require_once('public/product.php');
                break;

            case 'addproduct':
                //Lay du lieu tu form
                if (isset($_POST['btnadd'])) {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $price_sale = $_POST['price_sale'];
                    $promotion = $_POST['promotion'];
                    $id_catalog = $_POST['id_catalog'];
                    //Lay hinh
                    $ten_file_hinh = $_FILES['img']['name'];
                    if ($ten_file_hinh != "") {
                        //Upload hinh len host
                        $target_file = "../" . PATH_IMG . basename($_FILES['img']['name']);
                        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                    }
                    //Cap nhat database
                    add_product($name, $price, $price_sale, $promotion, $id_catalog, $ten_file_hinh);
                }
                //Load dssp
                $productlist = getall_sp_admin();
                header('Location: index.php?page=products');
                // require_once('public/product.php');
                break;

            case 'delproduct':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    //xóa dm
                    $id = $_GET['id'];
                    //Kiểm tra có hình không
                    $ten_file_hinh = "../" . PATH_IMG . get_ten_file_hinh($id);
                    if (file_exists($ten_file_hinh))
                        unlink($ten_file_hinh);
                    //Xóa sản phẩm trong database
                    $tb = delete_product($id);
                }
                //load lại dssp sau khi xóa
                $productlist = getall_sp(0, 0);
                header('Location: index.php?page=products');

            case 'products':
                // load dssp
                $cataloglist = getall_dm();
                $productlist = getall_sp_admin();
                require_once('public/product.php');
                break;

            case 'users':

                $list_user = getall_user();
                require_once('public/users.php');

            case 'user_update':
                if (isset($_POST['btnupdate_user']) && ($_POST['btnupdate_user'])) {
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phonenumber = $_POST['phonenumber'];
                    $address = $_POST['address'];
                    update_user($id, $username, $password, $name, $email, $phonenumber, $address);
                    $list_user = getall_user();
                    require_once('public/users.php');
                }
                break;

            case 'list_user_update':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $user_one = getone_user($id);
                    require_once('public/update_user.php');
                } else {
                    require_once('public/404.php');
                }
                break;

            case 'exit':
                if (isset($_SESSION['role'])) unset($_SESSION['role']);
                header('Location: login.php');
                break;

            case 'thongke':
                $listthongke = getall_thongke();
                include('public/thongke.php');
                break;

            case 'bieudothongke':
                $listthongke = getall_thongke();
                include('public/bieudothongke.php');
                break;

            default:
                require_once('public/404.php');
        }
    } else {

        require_once('public/home.php');
    }

    require_once('public/footer.php');
} else {

    header('Location: login.php');
}