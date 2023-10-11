<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chuyên mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Chuyên mục</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php
    extract($user_one);
    ?>
    <section class="content">
        <form action="index.php?page=user_update" method="POST">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Tên tài khoản</label>
                    <input type="text" class="form-control" name="username" value="<?= $username ?>" placeholder="Tên tài khoản">
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Mật khẩu</label>
                    <input type="text" class="form-control" name="password" value="<?= $password ?>" placeholder="Mật khẩu">
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Tên khách hàng</label>
                    <input type="text" class="form-control" name="name" value="<?= $name ?>" placeholder="Tên khách hàng">
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $email ?>" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Điện thoại</label>
                    <input type="text" class="form-control" name="phonenumber" value="<?= $phonenumber ?>" placeholder="Số điện thoại">
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Vai trò</label>
                    <input type="text" class="form-control" name="role" value="<?= $role ?>" placeholder="Vai trò">
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Đại chỉ</label>
                    <input type="text" class="form-control" name="address" value="<?= $address ?>" placeholder="Địa chỉ">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" class="btn btn-primary" name="btnupdate_user" value="Cập nhật">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>

            </div>
        </form>
    </section>
</div>