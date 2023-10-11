
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Biểu đồ</h1>
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
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <div
                            id="myChart" style="width:100%; max-width:600px; height:500px;">
                        </div>

                            <script>
                                google.charts.load('current', {'packages':['corechart']});
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                const data = google.visualization.arrayToDataTable([
                                ['Biểu đồ', 'Sản phẩm'],
                                <?php
                                $sum_catalog = count($listthongke);
                                $i = 1;
                                    foreach ($listthongke as $item) {
                                        extract($item);
                                        if($i == $sum_catalog){
                                            echo "['".$name_catalog."', ".$countpd."]";
                                        }else{
                                            echo "['".$name_catalog."', ".$countpd."],";
                                        }
                                        $i+=1;
                                    }
                                ?>
                                ]);

                                const options = {
                                title:'Biểu đồ thống kê',
                                };

                                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                                chart.draw(data, options);
                                }
                            </script>

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