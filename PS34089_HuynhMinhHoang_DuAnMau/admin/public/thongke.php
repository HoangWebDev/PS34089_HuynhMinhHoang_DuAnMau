
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thống kê sản phẩm</h1>
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã</th>
                                        <th scope="col">Tên danh mục</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Gía thấp nhất</th>
                                        <th scope="col">Gía cao nhất</th>
                                        <th scope="col">Giá trung bình</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($listthongke as $item) {
                                        extract($item);
                                        $edit = "<a href='index.php?page=productupdateform&id='>Sửa</a>";
                                        $del = "<a href='index.php?page=delproduct&id='>Xóa</a>";
                                        echo '<tr>
                                            <td>' . $id_catalog . '</td>
                                            <td>' . $name_catalog . '</td>
                                            <td>' . $countpd . '</td>
                                            <td>' . $minprice . '</td>
                                            <td>' . $maxprice . '</td>
                                            <td>' . $avgprice . '</td>
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