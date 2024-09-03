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
        <style>
            .container {
                display: flex;
                align-items: flex-start;
                justify-content: flex-start;
            }

            img {
                max-width: 30px;
                max-height: 30px;
            }

            .text {
                font-size: 20px;
                padding-left: 2px;
            }

            .jdl_print {
                width: 35%;
                padding-left: 5px;
                display: block;
                float: left;
            }

            .nilai_print {
                width: 65%;
                padding-left: 5px;
                display: block;
                float: left;
            }
        </style>
        <?php $no=0; foreach ($cetak as $key) { ?>

            <?php if($no==0){
                echo '<div class="container" style="padding-top: 0px; font-weight: bold;">';
                $no++;
            }else{
                echo '<div class="container" style="padding-top: 35px; font-weight: bold;">';
            }?>
                <div class="image">
                    <img src="<?php echo base_url('assets/logo.JPG'); ?>">
                </div>
                <div class="text">
                    <center>
                        <p style="font-size: 8px; margin: 0px;">INSTALASI FARMASI RSUD BAJAWA</p>
                        <p style="font-size: 7px;margin: 0px;">Jl. Diponegoro No.5 Trikora - Bajawa</p>
                    </center>
                </div>
            </div>
            <!-- <center> -->
            <!-- <img src="<?php echo base_url('assets/logo.JPG'); ?>" style="height: 30px;" alt=""> -->
            <!-- <p style="font-size: 10px; margin: 0px;">INSTALASI FARMASI RSUD BAJAWA</p>
                <p style="font-size: 8px;margin: 0px;">Jl. Diponegoro No.5 Trikora - Bajawa</p>
                <hr style="border-style: dashed; margin: 0px;">
            </center> -->

            <hr style="margin-top: 3px; margin-bottom: 3px;">
            <div class="row" style="font-size: 8px;margin-top: 0px;font-weight: bold;">
                <div class="col-xs-12">
                    <center>
                        <div class="col-xs-12">NO. Resep</div>
                        <div class="col-xs-12"><?php echo $key->no_resep; ?></div>
                    </center>
                </div>
                <div class="col-xs-12" style="height: 12.297px;">
                    <p class="jdl_print">TANGGAL</p>
                    <p class="nilai_print">: <?php echo date('d/m/Y', strtotime($key->tanggal)); ?></p>
                </div>
                <div class="col-xs-12">
                    <div class="jdl_print">NO. RM</div>
                    <div class="nilai_print">: <?php echo $key->no_rekamedis; ?></div>
                </div>
                <div class="col-xs-12">
                    <div class="jdl_print">NAMA PASIEN</div>
                    <div class="nilai_print">: <?php echo $key->nama_pasien; ?></div>
                </div>
                <div class="col-xs-12">
                    <div class="jdl_print">TGL. LAHIR</div>
                    <div class="nilai_print">: <?php echo date('d/m/Y', strtotime($key->tanggal_lahir)); ?></div>
                </div>
                <div class="col-xs-12">
                    <div class="jdl_print" style="font-size: 7px;">NAMA OBAT/JLH</div>
                    <div class="nilai_print">: <?php echo $key->nama_obat; ?> / <?php echo $key->jumlah; ?></div>
                </div>
                <div class="col-xs-12">
                    <div class="jdl_print">ED</div>
                    <div class="nilai_print">: </div>
                </div>
                <div class="col-xs-12">
                    <div class="jdl_print">ATURAN PAKAI</div>
                    <?php
                    $aturan = $key->aturan_pakai;
                    ?>
                    <div class="nilai_print" style="font-size: 10px;">: <?php echo $aturan; ?></div>
                </div>
                <div class="col-xs-12" style="margin-top: -20px;height: 30px;margin-bottom: 10px;">
                    <center>
                        <div class="col-xs-12" style="font-size: 9px;"><b><?php echo strtoupper($key->waktu); ?></b></div>
                        <hr>
                    </center>
                </div>
                <?php
                $aturan = "";
                if ($key->anjuran != "") {
                    $aturan = $key->anjuran;
                    echo '<div class="col-xs-12"><div class="jdl_print" style="font-size: 10px;">ANJURAN</div><div class="nilai_print" style="font-size: 10px;">: ' . $aturan . '</div></div>';
                }
                ?>
            </div>
            <div class="pagebreak"> </div>
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
    window.onfocus = function() {
        window.close();
    }
</script>

<style>
    @media print {
        .myDivToPrint {
            background-color: white;
            height: 3.7cm;
            width: 5.7cm;
            position: fixed;
            top: 0;
            left: 0;
            margin: 0;
            padding: 15px;
            font-size: 14px;
            line-height: 18px;
        }

        .pagebreak {
            clear: both;
            page-break-after: always;
        }
    }
</style>

</html>