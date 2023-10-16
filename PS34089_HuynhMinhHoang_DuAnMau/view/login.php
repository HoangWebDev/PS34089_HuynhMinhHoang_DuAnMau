<link rel="stylesheet" href="./view/layout/css/login.css">
<title>Đăng Nhập</title>

<div id="wrap-container">
    <div id="form-login">
        <form action="index.php?act=login_user" method="post">
            <div class="form-group">
                <label for="user" class="title">Tên tài khoản:</label> <br>
                <div class="box-group">
                    <input type="text" name="username" class="input username" autofocus autocomplete="off">
                    <label class="label">Username</label>
                </div>
            </div>
            <!-- <div class="err" id="errUser"></div> -->
            <div class="form-group">
                <label for="pass" class="title">Mật khẩu:</label> <br>
                <div class="box-group">
                    <input type="password" name="password" class="input password" autocomplete="off">
                    <label class="label">Password</label>
                    <ion-icon onclick="showPass()" class="show" name="eye-outline"></ion-icon>
                    <!-- <ion-icon name="eye-off-outline"></ion-icon> -->
                </div>
            </div>
            <div class="form-group">
                <label for="checkbox" class="title">Ghi nhớ mật khẩu:</label>
                <input type="checkbox" name="checkbox">
                <a href="index.php?act=forgetpass">Quên mật khẩu</a>
            </div>
            <!-- <div class="err" id="errPass"></div> -->
            <div class="register">
                <p>Không có tài khoản! <a href="index.php?act=register">Đăng Ký</a></p>
            </div>
            <input type="submit" value="Đăng Nhập" class="button" name="login" onclick="return check_login()">
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
        </form>
    </div>
</div>

<script src="./view/layout/js/login.js"></script>