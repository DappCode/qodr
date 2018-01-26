<div class="col-md-12">
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
                <a href="#tab_3" data-toggle="tab" aria-expanded="false">RAB</a>
            </li>
            <li class="">
                <a href="#tab_4" data-toggle="tab" aria-expanded="false">Perkiraan Pemasukan</a>
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
                            <form method="post" action="Pemasukan/getAjax">
                                <div class="box-body" style="">
                                    <div class="chart">
                                        <div class="col-lg-3 col-xs-6">
                                            <!-- small box -->
                                            <div class="small-box bg-aqua">
                                                <div class="inner">
                                                    <h4>Report Bulanan</h4>
                                                    <select id="filter-bulan" name="bulan" class="form-control">
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
            <div class="tab-pane" id="tab_2">
                <div class="row">
                    <div class="col-xs-12">
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
                                            <th>Action</th>

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
                                <h3 class="box-title">RAB</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="rab" class="table table-bordered table-striped listUser display responsive no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Periode</th>
                                            <th>Nama Barang</th>
                                            <th>Akun ID</th>
                                            <th>Jumlah Barang</th>
                                            <th>Harga Satuan</th>
                                            <th>Satuan Barang ID</th>
                                            <th>Total Harga</th>
                                            <th>Keterangan</th>
                                            <th>Cabang Id</th>
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

            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_4">
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
        </div>
        <!-- /.tab-content -->
    </div>
    <!-- nav-tabs-custom -->
</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">VIEW PENGELUARAN</h4>
            </div>
            <div class="modal-body">
                <div class="box-body">
                    <table id="data_keuharian" class="table table-bordered table-striped listUser display responsive no-wrap">
                        <thead>
                            <tr>
                                <th class="colm-1">Akun ID</th>
                                <th class="colm-2">ID</th>
                                <th class="colm-7">Tanggal</th>
                                <th class="colm-3">JML Barang</th>
                                <th class="colm-4">Keterangan</th>
                                <th class="colm-5">Kredit</th>
                                <th class="colm-6">Pelaku</th>
                                <th class="colm-8">Total Harga</th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->

            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<script>
    // Graphic
    $.ajax({
         method : "GET",
         dataType: "html",
         url : "{{url('Graphic/getGraphic')}}",
         success: function(result){
            var line = new Morris.Line({
                element: 'line-chart',
                resize: true,
                data: JSON.parse(result),
                xkey: 'tanggal',
                ykeys: ['nominal'],
                labels: ['nominal'],
                parseTime: false,
                lineColors: ['#3c8dbc'],
                hideHover: 'auto'
            });
         }
    });

    $(document).ready(function () {
        var dataTable = $('#rab').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "Rekapharian/getAjaxRab",
                type: "post",
            }
        });
    });


    $(document).ready(function () {

        var dataTable = $('#pengeluaran').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "Rekapharian/getAjaxPengeluaran",
                type: "post",
            }
        });
    });
    $(document).ready(function () {

        var dataTable = $('#pemasukan').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "Rekapharian/getAjaxPemasukan",
                type: "post",
            }
        });
    });
    $(document).ready(function () {
        var dataTable = $('#penghasilan').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "Rekapharian/getAjaxPenghasilan",
                type: "post",
            }
        });
    });
    //  VIEW Pemasukan  
    function send_data_view_pemasukan(Hari) {
        $('.modal-title').text('Pemasukan Hari ' + Hari);
        $('.colm-5').text('Nominal');
        $('.colm-1, .colm-3, .colm-6, .colm-8').hide();

        $('.btnAction').attr('class', "btn btn-outline btnAction");
        $.ajax({
            method: "POST",
            dataType: "json",
            url: "{{url('RekapHarian/getDataPemasukanPerhari')}}/" + Hari,
            success: function (response) {
                var trHTML = '';

                $.each(response, function (i, item) {
                    trHTML += '<tr><td>' + item.id +
                        '</td><td>' + item.tanggal +
                        '</td><td>' + '- ' + item.nama_barang +
                        '<br> - ' + item.keterangan +
                        '</td><td>' + item.debit;
                });
                $('#data_keuharian').append(trHTML);

                $('#modal-default').on('click', function () {
                    $('#data_keuharian tr > td').remove();
                });
            }
        });
    }


    //  VIEW Pengeleruan    
    function send_data_view_pengeluaran(Hari) {
        $('.modal-title').text('Pengeluaran Hari ' + Hari);
        $('.btnAction').attr('class', "btn btn-outline btnAction");
        $('.colm-5').text('Kredit');
        $('.colm-1, .colm-3, .colm-6, .colm-8').show();



        $.ajax({
            method: "POST",
            dataType: "json",
            url: "{{url('Rekapharian/getDataPengeluaranPerhari')}}/" + Hari,
            success: function (response) {
                var trHTML = '';
                $.each(response, function (i, item) {
                    trHTML += '<tr><td>' + item.akun_id +
                        '</td><td>' + item.id +
                        '</td><td>' + item.tanggal +
                        '</td><td>' + item.jml_barang +
                        '</td><td>' + item.keterangan +
                        '</td><td>' + item.kredit +
                        '</td><td>' + item.pelaku +
                        '</td><td>' + item.total_harga + '</td></tr>';
                });
                $('#data_keuharian').append(trHTML);

                // Cara Mereload window
                //  $('#btn-close').click(function() {
                //     window.location.reload();

                // Cara Simpel
                $('#modal-default').on('click', function () {
                    $('#data_keuharian tr > td').remove();
                });
                //     return false;
                // });
                //  $('#btn-close').click(function(){
                //     $('#data_keuharian').empty();
                // });
                // $('#btn-view').click(function(){
                //     $('#data_keuharian').append(trHTML);
                // });

                // Cara Rumit
                // var x;
                // $('#modal-default').on('click', function(){
                //     x = $('#data_keuharian tr > td').detach();
                // });
                // $('#btn-view').click(function(){
                //     $('#data_keuharian tr > td').prepend(x);
                // });

            }
        });
    }
</script>