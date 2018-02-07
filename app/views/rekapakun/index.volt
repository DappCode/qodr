<section class="content">

    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_1" data-toggle="tab" aria-expanded="true">Pemasukan</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="box box-primary">
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
                            <form method="post" action="Pemasukan/getAjax">
                                <div class="box-body" style="">
                                    <div class="chart">
                                        <div class="col-lg-3 col-xs-6">
                                            <!-- small box -->
                                            <div class="small-box bg-aqua">
                                                <div class="inner">
                                                    <h4>Report Bulanan</h4>
                                                    <select id="Bulan" name="Bulan" class="form-control">
                                                        <option selected="selected"> Pilih Bulan </option>
                                                        {{ Helper.bulan()}}
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-block btn-primary btn-flat"> filter now
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </button>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </form>
                            <!-- /.box-body -->
                        </div>


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
                                            <th>Action</th>

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
            </section>

            <script>
            $(document).ready(function() {
$('#pemasukan').DataTable({
    "ajax": {
        url: "rekapakun/getAjax"
    }
})
            });


            </script>