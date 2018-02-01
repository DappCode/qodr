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

<script>


$.ajax({
    method : "GET",
    dataType: "html",
    url : "<?= $this->url->get('Graphicharian/getGraphic') ?>",
    success: function(result){
        var area = new Morris.Area({
            element   : 'revenue-chart',
            resize    : true,
            data      : JSON.parse(result),
            xkey      : 'Tanggal',
            ykeys     : ['Pemasukan', 'Pengeluaran'],
            labels    : ['Pemasukan', 'Pengeluaran'],
            parseTime : false,
            lineColors: ['#a0d0e0', '#3c8dbc'],
            hideHover : 'auto'
        });
    }
});

</script>
