<link rel="stylesheet" href="./view/layout/css/login.css">
<title>Quên mật khẩu</title>

<div id="wrap-container">
    <div id="form-login">
        <form action="index.php?act=forgetpass" method="post">
            <div class="form-group">
                <label for="user" class="title">Email:</label> <br>
                <div class="box-group">
                    <input type="email" name="email" class="input username" autofocus autocomplete="off">
                    <label class="label">Email</label>
                </div>
            </div>
            <?php
            if (isset($password) && ($password) && ($username) && ($username) != "") {
                echo '<div class="form-group">
                        <label for="user" class="title">Tài khoản của bạn là:</label> <br>
                        <div class="box-group">
                            <input type="text" name="username" class="input username" autofocus autocomplete="off" value="' . $username . '">
                            <label class="label">Username</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user" class="title">Mật khẩu của bạn là:</label> <br>
                        <div class="box-group">
                            <input type="text" name="password" class="input username" autofocus autocomplete="off" value = "' . $password . '">
                            <label class="label">Password</label>
                        </div>
                    </div>';
            }
            ?>

            <input type="submit" value="Gửi" class="button" name="checkemail">
        </form>
    </div>
</div>

<script src="./view/layout/js/login.js"></script>