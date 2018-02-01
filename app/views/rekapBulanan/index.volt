<div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="">
                <a href="#tab_1" data-toggle="tab" aria-expanded="false">Pemasukan</a>
            </li>
            <li class="active">
                <a href="#tab_2" data-toggle="tab">Pengeluaran</a>
            </li>
            <li>
                <a href="#tab_3" data-toggle="tab" aria-expanded="true">RAB</a>
            </li>
            <li>
                <a href="#tab_3" data-toggle="tab">Perkiraan Pemasukkan</a>
            </li <li class="pull-right">
            <a href="#" class="text-muted">
                <i class="fa fa-gear"></i>
            </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" id="tab_1">
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- /.box -->

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Rancangan Anggaran Bulanan</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="pemasukan" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Pemasukan</th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody id="">

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- /.box -->

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Pengeluaran Bulanan</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="pengeluaran" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bulan</th>
                                                <th>Pengeluaran</th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody id="">

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- /.box -->

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Rancangan Anggaran Bulanan</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="data_user" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID</th>
                                                <th>Periode </th>
                                                <th>Nama Barang</th>
                                                <th>Akun ID</th>
                                                <th>Jumlah Barang</th>
                                                <th>Harga Satuan </th>
                                                <th>Satuan Barang ID</th>
                                                <th>Keterangan</th>
                                                <th>Cabang ID</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="listUser">

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>
            <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>
    <!-- nav-tabs-custom -->
</div>





<script>

    // Pemasukan
    $(document).ready(function () {
        var dataTable = $('#pemasukan').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "Rekapbulanan/getAjaxPemasukan",
                type: "post",
            }
        });
    });
    // /Pemasukan


    // Pengeluaran
    $(document).ready(function () {
        var dataTable = $('#pengeluaran').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "Rekapbulanan/getAjaxPengeluaran",
                type: "post",
            }
        });
    });
    // /Pengeluaran
</script>