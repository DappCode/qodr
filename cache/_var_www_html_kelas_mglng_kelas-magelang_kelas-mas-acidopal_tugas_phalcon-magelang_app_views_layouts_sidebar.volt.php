<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <?php
                    if($this->session->has("auth")){
                        $auth = $this->session->get("auth");
                        $username = $auth['username'];
                        echo '<p>'.$username.'</p>';
                    }                      
                ?>
                    <a href="#">
                        <i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="user">
                    <i class="fa fa-user"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-money"></i>
                    <span>Keuangan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="keuharian">
                            <i class="fa fa-circle-o"></i>Harian</a>
                    </li>
                    <li>
                        <a href="rekapHarian">
                            <i class="fa fa-circle-o"></i>Rekap Harian</a>
                    </li>
                    <li>
                        <a href="rekapBulanan">
                            <i class="fa fa-circle-o"></i>Rekap Bulanan</a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="fa fa-circle-o"></i>Rekap Tahunan</a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="fa fa-circle-o"></i>Rekap Akun</a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="fa fa-circle-o"></i>Histori</a>
                    </li>
                    <li class="treeview menu-open">
                        <a href="graphicharian">
                            <i class="fa fa-circle-o"></i> Graphic
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: block;">
                            <li>
                                <a href="graphicharian">
                                    <i class="fa fa-circle-o"></i> Graphic Perhari</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> Level Three</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>