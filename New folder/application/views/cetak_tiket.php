<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMETIKON - RSUD BAJAWA</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/form_inputs.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/components_modals.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->

</head>
<body>
    <div class="myDivToPrint" id="myDivToPrint">
        <?php foreach ($cetak as $key) { ?>
            <center>
                <!-- <img src="<?php echo base_url('assets/logo.JPG'); ?>" style="height: 30px;" alt=""> -->
                <p style="font-size: 10px; margin: 0px;">INSTALASI FARMASI RSUD BAJAWA</p>
                <p style="font-size: 8px;margin: 0px;">Jl. Diponegoro No.5 Trikora - Bajawa</p>
                <hr style="border-style: dashed; margin: 0px;">
            </center>

            <div class="row" style="font-size: 8px;margin-top: 10px;">
                <div class="col-xs-12">
                    <center>
                        <div class="col-xs-12">NO. Resep</div>
                        <div class="col-xs-12"><?php echo $key->no_resep; ?></div>
                    </center>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-5">TANGGAL</div>
                    <div class="col-xs-7">: <?php echo date('d/m/Y', strtotime($key->tanggal)); ?></div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-5">NO. RM</div>
                    <div class="col-xs-7">: <?php echo $key->no_rekamedis; ?></div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-5">NAMA PASIEN</div>
                    <div class="col-xs-7">: <?php echo $key->nama_pasien; ?></div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-5">TGL. LAHIR</div>
                    <div class="col-xs-7">: <?php echo date('d/m/Y', strtotime($key->tanggal_lahir)); ?></div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-5">NAMA OBAT/JLH</div>
                    <div class="col-xs-7">: <?php echo $key->nama_obat; ?> / <?php echo $key->jumlah; ?></div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-5">ED</div>
                    <div class="col-xs-7">: <?php echo date('d/m/Y', strtotime($key->expired_date)); ?></div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-5">ATURAN PAKAI</div>
                    <?php 
                        $aturan = $key->aturan_pakai;
                    ?>
                    <div class="col-xs-7">: <?php echo $aturan; ?></div>
                </div>
                <div class="col-xs-12" style="margin-top: -20px;">
                    <center>
                        <div class="col-xs-12"><b><?php echo strtoupper($key->waktu); ?></b></div>
                        <hr>
                    </center>
                </div>
                <?php
                $aturan = "";
                if ($key->anjuran != "") {
                    $aturan = $key->anjuran;
                    echo '<div class="col-xs-12"><div class="col-xs-5">ANJURAN</div><div class="col-xs-7">: ' . $aturan . '</div></div>';
                }
                ?>
            </div>
        <?php } ?>
    </div>
</body>
<!-- <div style="padding-left: 10px;">
    <button onclick="printPageArea('cetak');" class="noPrint btn btn-success">
        Cetak Tiket
    </button>
</div>
<div class="back" style="padding-left: 10px; padding-top: 10px;">
        <a href="<?php echo base_url('permintaan'); ?>" class="btn btn-warning" type="button">
            Kembali Ke Permintaan
        </a>
    </div> -->
    <script type="text/javascript">
window.print();
window.onfocus=function(){ window.close();}
</script>

<style>
    @media print {
    .myDivToPrint {
        background-color: white;
        height: 3.75cm;
        width: 5.75cm;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
}
</style>

</html>