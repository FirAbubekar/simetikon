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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/extensions/row_reorder.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/datatables_extension_row_reorder.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/datatables_basic.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-default header-highlight">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo_light.png" alt=""></a>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

            </ul>

        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <?php $this->load->view('template/side_menu'); ?>

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?php echo $title; ?></span> - <?php echo $subtitle; ?></h4>
                        </div>

                    </div>

                    <div class="breadcrumb-line breadcrumb-line-component">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> <?php echo $detail_title; ?></a></li>
                            <li><a href="form_inputs_basic.html"><?php echo $detail_subtitle1; ?></a></li>
                            <li class="active"><?php echo $detail_subtitle2; ?></li>
                        </ul>

                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Vertical form modal -->
                    <div id="modal_form_vertical" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h5 class="modal-title">Tambah Data Pasien</h5>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label col-lg-12">No Rekamedis</label>
                                        <div class="col-lg-12">
                                            <input type="text" id="norekamedis" class="form-control" placeholder="No Rekamedis">
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top: 20px;">

                                        <div class="col-md-6">
                                            <table class="table datatable-basic">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>ID Permintaan</th>
                                                        <th>nama_obatal</th>
                                                        <th>No Rekamedis</th>
                                                        <th>Nama Pasien</th>
                                                        <th>Usia</th>
                                                        <th>Obat</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="row_obat">

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>

                                <br><br><br>

                                <div class="modal-footer" style="padding-top: 20px;">
                                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                    <button onclick="tambahpasien()" class="btn btn-success btn-xs">Tambah Pasien</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /vertical form modal -->

                    <!-- Responsive integration -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Tabel Transaksi Obat Keluar</h5>
                        </div>

                        <div class="panel-body">
                            <!-- <form action=""> -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <label for="">Tanggal Awal</label>
                                            <input type="date" id="tgl_awal" value="<?php echo date('Y-m-d'); ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <label for="">Tanggal Akhir</label>
                                            <input type="date" id="tgl_akhir" value="<?php echo date('Y-m-d'); ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <label for="">Nama Obat</label>
                                            <input type="text" id="nama_obat" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 20px;">
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <button style="width: 100%;" class="btn btn-success" onclick="cari_transaksi()">Cari Transaksi</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <button style="width: 100%;" class="btn btn-danger" onclick="bersihkan_transaksi()">Bersihkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- </form> -->
                        </div>

                        <table id="tabel_pasien" class="table datatable-row-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Obat</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>ED</th>
                                    <th>Aturan Pakai</th>
                                    <th>Anjuran</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- /responsive integration -->

                    <?php $this->load->view('template/footer'); ?>

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

<script type="text/javascript">
    $(document).ready(function() {
        let tgl_awal = $("#tgl_awal").val();
        let tgl_akhir = $("#tgl_akhir").val();
        let nama_obat = "";
        get_riwayat(tgl_awal, tgl_akhir, nama_obat);
    });

    function cari_transaksi() {
        let tgl_awal = $("#tgl_awal").val();
        let tgl_akhir = $("#tgl_akhir").val();
        let nama_obat = $("#nama_obat").val();
        get_riwayat(tgl_awal, tgl_akhir, nama_obat);
    }

    function get_riwayat(tgl_awal, tgl_akhir, nama_obat) {
        $('#tabel_pasien').DataTable({
            "bDestroy": true,
            "bProcessing": true,
            "serverSide": true,
            "ordering": true,
            "order": [
                [0, 'asc']
            ],
            "ajax": {
                "url": " <?php echo base_url('master/getriwayat_obatkeluar'); ?> ",
                "type": "POST",
                "data": {
                    "tgl_awal": tgl_awal,
                    "tgl_akhir": tgl_akhir,
                    "nama_obat": nama_obat,
                }
            },
            "deferRender": true,
            "aLengthMenu": [
                [10, 25, 50, 100],
                [10, 25, 50, 100]
            ],
            "columns": [{
                    "data": null,
                    "class": "align-top",
                    "orderable": false,
                    "searchable": false,
                    "render": function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                }, {
                    "data": "created_date"
                }, {
                    "data": "nama_obat"
                },
                {
                    "data": "jumlah"
                },
                {
                    "data": "satuan"
                },
                {
                    "data": "expired_date"
                },
                {
                    "data": "aturan_pakai"
                },
                {
                    "data": "anjuran"
                },
                {
                    "data": "waktu"
                },
            ],
        });
    }

    function detailobat(id_permintaan) {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('master/detail_obat_pasien'); ?>",
            data: {
                'id_permintaan': id_permintaan,
            },
            success: function(data) {
                let html = "";

                for (let index = 0; index < data.length; index++) {
                    html += `
                    <tr>
                    <td>` + data[index].nama_obat + `</td>
                    <td>` + data[index].aturan_pakai + `</td>
                    <td>` + data[index].jumlah + `</td>
                    <td>` + data[index].satuan + `</td>
                    <td>` + data[index].expired_date + `</td>
                    <td>` + data[index].waktu + `</td>
                    <td>` + data[index].satuan + `</td>
                    <td>` + data[index].expired_date + `</td>
                    <td>` + data[index].waktu + `</td>
                    </tr>
                    `;
                }

                $("#row_obat").html(html);
            }
        });
    }
</script>

</html>