<link rel="stylesheet" href="./view/layout/css/form.css">

<div id="wrap-container">
    <div id="form-register">
        <!-- <a href="./index.html">
            <ion-icon class="close_register" name="close-outline"></ion-icon>
        </a> -->
        <!-- <h1>Đăng Ký</h1> -->
        <form action="index.php?act=register" method="post">
            <div class="form-group">
                <label for="text" class="title">Họ tên:</label>
                <div class="box-group">
                    <input type="text" name="name" class="input name" autofocus autocomplete="off">
                    <!-- <label class="label" for="text">Username</label> -->
                </div>
            </div>
            <div class="err" id="errName"></div>
            <div class="form-group">
                <label for="enterpass" class="title">Nhập email:</label>
                <div class="box-group">
                    <input type="text" name="email" class="input email" autocomplete="off">
                    <!-- <label class="label" for="enter-pass">Email</label> -->
                </div>
            </div>
            <div class="err" id="errEmail"></div>
            <div class="form-group">
                <label for="text" class="title">Tên tài khoản:</label>
                <div class="box-group">
                    <input type="text" name="user" class="input username" autofocus autocomplete="off">
                    <!-- <label class="label" for="text">Username</label> -->
                </div>
            </div>
            <div class="err" id="errUser"></div>
            <div class="form-group">
                <label for="pass" class="title">Mật khẩu:</label>
                <div class="box-group">
                    <input type="text" name="pass" class="input password" autocomplete="off">
                    <!-- <label class="label" for="pass">Password</label> -->
                </div>
            </div>
            <div class="err" id="errPass"></div>
            <div class="form-group">
                    <label for="number" class="title">Nhập lại mật khẩu:</label>
                    <div class="box-group">
                        <input type="password" name="confirmpass" class="input confirmpass" placeholder=" "
                            autocomplete="off">
                        <label class="label" for="number-phone">Email password</label>
                    </div>
                </div>
                <div class="err" id="errConfirmPass"></div>
            <div class="login">
                <p>Đã có tài khoản! <a href="index.php?act=login.php">Đăng Nhập</a></p>
            </div>
            <input type="submit" value="Đăng Ký" name="register" class="button" onclick="validForm()">
        </form>
        <h2 style="color: red;">
            <?php
            if (isset($tb) && $tb != "") {
                echo $tb;
            }
            ?>
        </h2>

    </div>
</div>

<script src="./view/layout/js/register.js"></script>