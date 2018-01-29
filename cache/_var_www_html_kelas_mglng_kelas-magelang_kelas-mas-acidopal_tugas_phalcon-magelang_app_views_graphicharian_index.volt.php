<section class="content">

    <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
        <ul class="nav nav-tabs pull-right">
        <li class="pull-left header"><i class="fa fa-inbox"></i> Graphic Harian </li>
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


<!-- [
            { y: '2011 Q1', item1: 2666, item2: 2666, item3: 2669 },
            { y: '2011 Q2', item1: 2778, item2: 2294, item3: 2689 },
            { y: '2011 Q3', item1: 4912, item2: 1969, item3: 2676 },
            { y: '2011 Q4', item1: 3767, item2: 3597, item3: 3666 },
            { y: '2012 Q1', item1: 6810, item2: 1914, item3: 2665 },
            { y: '2012 Q2', item1: 5670, item2: 4293, item3: 2665 },
            { y: '2012 Q3', item1: 4820, item2: 3795, item3: 2687 },
            { y: '2012 Q4', item1: 15073, item2: 5967, item3: 20000 },
            { y: '2013 Q1', item1: 10687, item2: 4460, item3: 2690 },
            { y: '2013 Q2', item1: 8432, item2: 5713, item3: 2649 }
            ], -->