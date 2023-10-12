<?php
extract($productone);
if ($img != "") {
    $img = "../" . PATH_IMG . $img;
    if (file_exists($img)) {
        $hinh = "<br><img src='" . $img . "' width='120px'";
    } else {
        $hinh = "";
    }
}
$productname = $name;
$productid = $id;
$productimg = $img;
//Load danh sach catalog
$select_html = "";
foreach ($cataloglist as $item) {
    extract($item);
    if ($id == $id_catalog) {
        $slc = "selected";
    } else {
        $slc = "";
    }
    $select_html .= "<option value='" . $id . "' " . $slc . ">" . $name . "</option>";
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
        <form action="index.php?page=updateproduct" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Danh mục:</label>
                    <select name="id_catalog">
                        <?= $select_html ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Tên sản phẩm:</label>
                    <input type="text" class="form-control" name="name" value="<?= $productname ?>">
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Giá sản phẩm:</label>
                    <input type="text" class="form-control" name="price" value="<?= $price ?>">
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Giá cũ:</label>
                    <input type="text" class="form-control" name="price_sale" value="<?= $price_sale ?>">
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Giá giảm:</label>
                    <input type="text" class="form-control" name="promotion" value="<?= $promotion ?>">
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Sản phẩm mới:</label>
                    <input type="text" class="form-control" name="new" value="<?= $new ?>">
                </div>
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Hình sản phẩm:</label>
                    <input type="file" name="img">
                    <?= $hinh ?>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" name="id" value="<?= $productid ?>">
                <input type="hidden" name="hinhcu" value="<?= $productimg ?>">
                <button type="submit" class="btn btn-primary" name="btnupdate">Cập nhật</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
            </div>
        </form>
    </section>
</div>