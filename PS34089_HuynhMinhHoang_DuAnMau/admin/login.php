<?php
session_start();
ob_start();
include "../model/connectdb.php";
include "../model/user.php";
if (isset($_POST['submit']) && ($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $role = checkusername($user, $pass);
    $_SESSION['role'] = $role;
    if ($role == 1) {
        header('location: index.php');
    } else {
        header('location: login.php');
        $txt_erro = "Username hoặc Password không tồn tại!";
    }
}
?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="../view/layout/css/login.css">
<title>Đăng Nhập</title>

<div id="wrap-container">
    <div id="form-login">
        <h2>Đăng Nhập Admin</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="user" class="title">Tên tài khoản:</label> <br>
                <div class="box-group">
                    <input type="text" name="user" class="input username" autofocus autocomplete="off">
                    <label class="label">Username</label>
                </div>
            </div>
            <div class="err" id="errUser"></div>
            <div class="form-group">
                <label for="pass" class="title">Mật khẩu:</label> <br>
                <div class="box-group">
                    <input type="password" name="pass" class="input password" autocomplete="off">
                    <label class="label">Password</label>
                    <ion-icon onclick="showPass()" class="show" name="eye-outline"></ion-icon>
                </div>
            </div>
            <div class="form-group">
                <label for="checkbox" class="title">Ghi nhớ mật khẩu:</label>
                <input type="checkbox" name="checkbox">
            </div>
            <div class="err" id="errPass"></div>
            <div class="register">
                <p>Không có tài khoản! <a href="./form.html">Đăng Ký</a></p>
            </div>
            <input type="submit" value="Đăng Nhập" class="button" name="submit">
            <div class="or">
                <span>Or</span>
            </div>
            <div class="socical">
                <a href="" class="social">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="" class="social">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="" class="social">
                    <ion-icon name="logo-google"></ion-icon>
                </a>
            </div>
            <?php
            if (isset($txt_erro) && ($txt_erro != "")) {
                echo $txt_erro;
            }
            ?>
        </form>
    </div>
</div>

<script src="../view/layout/js/login.js"></script>