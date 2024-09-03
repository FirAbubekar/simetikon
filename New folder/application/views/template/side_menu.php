<link href="<?php echo base_url(); ?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- User menu -->
<div class="sidebar-user-material">
    <div class="category-content">
        <div class="sidebar-user-material-content">
            <a href="#"><img src="<?php echo base_url(); ?>assets/images/placeholder.jpg" class="img-circle img-responsive" alt=""></a>
            <h6><?php echo $this->session->userdata('nama_lengkap'); ?></h6>
        </div>

    </div>

</div>
<!-- /user menu -->

<!-- Main navigation -->
<div class="sidebar-category sidebar-category-visible">
    <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">

            <!-- Main -->
            <li class="navigation-header"><span>Menu SIMETIKON</span> <i class="icon-menu" title="Main pages"></i></li>
            <li><a href="<?php echo base_url('home'); ?>"><i class="icon-home4"></i> <span>Beranda</span></a></li>
            <li><a href="<?php echo base_url('permintaan'); ?>"><img src="<?php echo base_url('assets/images/icon/iconpermintaan.PNG');?>" style="width: 25px;margin-right: 4px;height: 25px;" alt="" srcset=""> <span>Permintaan</span></a></li>
            <li><a href="<?php echo base_url('pasien'); ?>"><img src="<?php echo base_url('assets/images/icon/iconpasien.PNG');?>" style="width: 25px;margin-right: 4px;height: 25px;" alt="" srcset=""> <span>Pasien</span></a></li>
            <li>
                <a href="#"><img src="<?php echo base_url('assets/images/icon/iconmaster.PNG');?>" style="width: 25px;margin-right: 4px;height: 25px;" alt="" srcset=""> <span>Master Farmasi</span></a>
                <ul>
                    <li><a href="<?php echo base_url('obat'); ?>">Data Obat</a></li>
                    <li><a href="<?php echo base_url('obat/pengeluaran'); ?>">Pengeluaran Obat</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('riwayat'); ?>"><i class="icon-users2"></i> <span>Riwayat Permintaan</span></a></li>
            <li><a href="<?php echo base_url('login/logout'); ?>"><i class="icon-exit3"></i> <span>Keluar</span></a></li>
            <!-- /page kits -->

        </ul>
    </div>
</div>
<!-- /main navigation -->