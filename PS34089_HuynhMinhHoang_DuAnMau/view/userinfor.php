<link rel="stylesheet" href="./view/layout/css/form.css">
<div id="wrap-container">
    <div id="form-register">
        <h3>Cập nhật tài khoản</h3>
        <!-- <h1>Đăng Ký</h1> -->
        <form action="index.php?act=userinfor" method="post">
            <div class="form-group">
                <label for="text" class="title">Họ tên:</label>
                <div class="box-group">
                    <input type="text" name="name" class="input username" autofocus autocomplete="off" value="<?= $_SESSION['name'] ?>">
                    <!-- <label class="label" for="text">Username</label> -->
                </div>
            </div>
            <div class="form-group">
                <label for="enterpass" class="title">Nhập email:</label>
                <div class="box-group">
                    <input type="text" name="email" class="input email" autocomplete="off" value="<?= $_SESSION['email'] ?>">
                    <!-- <label class="label" for="enter-pass">Email</label> -->
                </div>
            </div>
            <div class="form-group">
                <label for="text" class="title">Tên tài khoản:</label>
                <div class="box-group">
                    <input type="text" name="username" class="input username" autofocus autocomplete="off" value="<?= $_SESSION['username'] ?>">
                    <!-- <label class="label" for="text">Username</label> -->
                </div>
            </div>
            <div class="form-group">
                <label for="pass" class="title">Mật khẩu:</label>
                <div class="box-group">
                    <input type="text" name="password" class="input password" autocomplete="off" value="<?= $_SESSION['password'] ?>">
                    <!-- <label class="label" for="pass">Password</label> -->
                </div>
            </div>
            <div class="form-group">
                <label for="pass" class="title">Địa chỉ:</label>
                <div class="box-group">
                    <input type="text" name="address" class="input password" autocomplete="off" value="<?= $_SESSION['address'] ?>">
                    <!-- <label class="label" for="pass">Địa chỉ</label> -->
                </div>
            </div>
            <div class="form-group">
                <label for="pass" class="title">Số điện thoại:</label>
                <div class="box-group">
                    <input type="text" name="phonenumber" class="input password" autocomplete="off" value="<?= $_SESSION['phonenumber'] ?>">
                    <!-- <label class="label" for="pass">Số điện thoại</label> -->
                </div>
            </div>
            <input type="hidden" name="id" value="<?= $_SESSION['iduser'] ?>">
            <input type="submit" value="Cập nhật" name="edit_user" class="button">
        </form>
    </div>
</div>

<script src="./view/layout/js/login.js"></script>