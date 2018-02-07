<section class="content">

    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_1" data-toggle="tab" aria-expanded="true">Pemasukan</a>
            </li>
            <li class="">
                <a href="#tab_2" data-toggle="tab" aria-expanded="false">Pengeluaran</a>
            </li>
            <li class="">
                <a href="#tab_3" data-toggle="tab" aria-expanded="false">Perkiraan Pemasukan</a>
            </li>
            <li class="">
                <a href="#tab_4" data-toggle="tab" aria-expanded="false">Graphic</a>
            </li>

            <li class="pull-right">
                <a href="#" class="text-muted">
                    <i class="fa fa-gear"></i>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Data Table With Full Features</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="pemasukan" class="table table-bordered table-striped listUser display responsive no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Hari</th>
                                            <th>Pemasukan</th>
                                            

                                        </tr>
                                    </thead>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>

                        <!-- /.box -->

                    </div>
                    <!-- /.col -->

                </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
                <div class="row">
                    <div class="col-xs-12">
                    <div class="box box-primary collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title">REPORT</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                           
                                <div class="box-body" style="">
                                    <div class="chart">
                                        <div class="col-lg-3 col-xs-6">
                                            <!-- small box -->
                                            <div class="small-box bg-aqua">
                                                <div class="inner">
                                                    <h4>Report Bulanan</h4>
                                                    <select id="Bulan" name="Bulan" class="form-control">
                                                        <option selected="selected"> Pilih Bulan </option>
                                                        <?= $this->Helper->dataBulan() ?>
                                                    </select>
                                                </div>
                                                <button id="btn-filter" class="btn btn-block btn-primary btn-flat"> filter now
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </button>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            <!-- /.box-body -->
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Data Table With Full Features</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="pengeluaran" class="table table-bordered table-striped listUser display responsive no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Hari</th>
                                            <th>Pengeluaran</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        </0pxtbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>

            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Data Table With Full Features</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="penghasilan" class="table table-bordered table-striped listUser display responsive no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal Cair</th>
                                            <th>Penghasilan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>

            <div class="tab-pane" id="tab_4">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Graphic</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                
                                <section class="content">
                                    <div class="nav-tabs-custom">
                                                <!-- Tabs within a box -->
                                        <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-area-chart" aria-hidden="true"></i> Graphic Harian </li>
                                        </ul>
                                        <div class="tab-content no-padding">
                                        <!-- Morris chart - Sales -->
                                        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                                        
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>
    <!-- nav-tabs-custom -->

</section>




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

    // Perkiraan Pemasukan 
    $(document).ready(function(){
        var dataTable = $('#penghasilan').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "Rekapbulanan/getAjaxPenghasilan",
                type: "post",
            }
        });
    });
        
    //  /Perkiraan Pemasukan
</script>