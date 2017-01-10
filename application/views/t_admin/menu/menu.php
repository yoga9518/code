<?php if($_SESSION['stts']=="admin"){?>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li<?php if($act==0){?> class="active"<?php } ?>>
                <a href="<?php echo base_url();?>index.php/admin/c_admin/index"><i class="fa fa-home fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-pencil fa-fw"></i> Artikel<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">New</a>
                    </li>
                    <li>
                        <a href="#">Daftar artikel</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li <?php if($act==2){?> class="active"<?php } ?>>
                <a href="<?php echo base_url();?>index.php/admin/c_admin/tabel"><i class="fa fa-table fa-fw"></i> User</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-camera fa-fw"></i> Media</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-print fa-fw"></i> Document<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Surat Keterangan</a>
                    </li>
                    <li>
                        <a href="#">Surat Permohonan</a>
                    </li>
                    <li>
                        <a href="#">Laporan Cetak</a>
                    </li>
                    <li>
                        <a href="#">Cetak pengguna</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li <?php if($act==1){?> class="active"<?php } ?>>
                <a  href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a <?php if($act==1){?>class="active"<?php } ?> href="<?php echo base_url();?>index.php/admin/c_admin/blank">Blank Page</a>
                    </li>
                    <li>
                        <a href="#">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?php echo base_url();?>index.php/admin/c_admin/logout"><i class="fa fa-power-off fa-fw"></i> Logout</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<?php }?>