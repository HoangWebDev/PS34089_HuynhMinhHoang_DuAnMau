<?php
$select_html = "";
foreach ($cataloglist as $item) {
    extract($item);
    $select_html .= "<option value='" . $id . "'>" . $name . "</option>";
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default">
                    Thêm sản phẩm
                </button>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <?php
                        if (isset($tb)) echo "<h3 style='color:red;text-align:center; margin-top: 20px'>" . $tb . "</h3>";
                        ?>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Gía sản phẩm</th>
                                        <th scope="col">Gía cũ</th>
                                        <th scope="col">Giảm giá</th>
                                        <th scope="col">Sản phẩm mới</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($productlist as $item) {
                                        extract($item);
                                        if ($img != "") $img = '../' . PATH_IMG . $img;
                                        $edit = "<a href='index.php?page=productupdateform&id=" . $id . "'>Sửa</a>";
                                        $del = "<a href='index.php?page=delproduct&id=" . $id . "'>Xóa</a>";
                                        echo '<tr>
                                            <td>' . $id . '</td>
                                            <td><img src="' . $img . '" width="80"></td>
                                            <td>' . $name . '</td>
                                            <td>' . $price . '</td>
                                            <td>' . $price_sale . '</td>
                                            <td>' . $promotion . '</td>
                                            <td>' . $new . '</td>
                                            <td>' . $edit . ' - ' . $del . '</td>
                                          </tr>';
                                        $i++;
                                    }
                                    ?>


                                </tbody>
                                <!-- <tfoot>

                                <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên chủ đề</th>
                                        <th scope="col">Chế độ</th>
                                        <th scope="col">Số lượng câu hỏi</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?page=addproduct" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Danh mục:</label>
                        <select name="id_catalog">
                            <?= $select_html ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Giá sản phẩm:</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Giá cũ:</label>
                        <input type="text" class="form-control" name="price_sale">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Giá giảm:</label>
                        <input type="text" class="form-control" name="promotion">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Sản phẩm mới:</label>
                        <input type="text" class="form-control" name="new">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Hình sản phẩm:</label>
                        <input type="file" name="img">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary" name="btnadd">Thêm mới</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>