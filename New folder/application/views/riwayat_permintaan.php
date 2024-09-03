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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/table_responsive.js"></script>

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
                                    <h5 class="modal-title">Detail Permintaan Obat</h5>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">No Rekamedis</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="detail_norekamedis" class="form-control" placeholder="No Rekamedis">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Nama Pasien</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="detail_nama_pasien" class="form-control" placeholder="No Rekamedis">
                                        </div>
                                    </div>

                                    <h3>Detail Transaksi Obat</h3>

                                    <div class="row" style="padding-top: 20px;">

                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Obat</th>
                                                            <th>Jumlah</th>
                                                            <th>Satuan</th>
                                                            <th>Aturan Pakai</th>
                                                            <th>Anjuran</th>
                                                            <th>Waktu</th>
                                                            <th>ED</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="row_obat">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <br><br><br>

                                <div class="modal-footer" style="padding-top: 20px;">
                                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /vertical form modal -->

                    <!-- Responsive integration -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Tabel Permintaan Obat Pasien</h5>
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
                                        <label for="">No Rekamedis</label>
                                        <input type="text" id="norm" class="form-control">
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
                                    <th>ID Permintaan</th>
                                    <th>Tanggal</th>
                                    <th>No Rekamedis</th>
                                    <th>Nama Pasien</th>
                                    <th>Usia</th>
                                    <th>Obat</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
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
        let norm = "";
        get_riwayat(tgl_awal, tgl_akhir, norm);
    });

    function cari_transaksi() {
        let tgl_awal = $("#tgl_awal").val();
        let tgl_akhir = $("#tgl_akhir").val();
        let norm = $("#norm").val();
        get_riwayat(tgl_awal, tgl_akhir, norm);
    }

    function get_riwayat(tgl_awal, tgl_akhir, norm) {
        $('#tabel_pasien').DataTable({
            "bDestroy": true,
            "bProcessing": true,
            "serverSide": true,
            "ordering": true,
            "order": [
                [0, 'asc']
            ],
            "ajax": {
                "url": " <?php echo base_url('master/getriwayat_permintaan'); ?> ",
                "type": "POST",
                "data": {
                    "tgl_awal": tgl_awal,
                    "tgl_akhir": tgl_akhir,
                    "norm": norm,
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
                    "data": "id_permintaan"
                }, {
                    "data": "tanggal"
                }, {
                    "data": "no_rekamedis"
                },
                {
                    "data": "nama_pasien"
                },
                {
                    "render": function(data, type, row) { // Tampilkan kolom aksi
                        var today = new Date();
                        var birthday = new Date(row.tanggal_lahir);
                        var year = 0;
                        if (today.getMonth() < birthday.getMonth()) {
                            year = 1;
                        } else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
                            year = 1;
                        }
                        var age = today.getFullYear() - birthday.getFullYear() - year;

                        if (age < 0) {
                            age = 0;
                        }
                        return age + " thn";
                    }
                },
                {
                    "render": function(data, type, row) { // Tampilkan kolom aksi
                        var html = `<button onclick="detailobat('` + row.id_permintaan + `','` + row.no_rekamedis + `','` + row.nama_pasien + `')" id="perawat" data-toggle="modal" data-target="#modal_form_vertical" style="width:100%" class="btn btn-info btn-xs">Detail</button>`;
                        return html;
                    }
                },
                {
                    "render": function(data, type, row) { // Tampilkan kolom aksi
                        var html = `<a onclick="cetak('`+row.id_permintaan+`')" id="perawat" style="width:100%" class="btn btn-success btn-xs">Cetak</a>`;
                        return html;
                    }
                },
                {
                    "render": function(data, type, row) { // Tampilkan kolom aksi
                        var html = '<button onclick="" id="perawat" style="width:100%" class="btn btn-danger btn-xs">Delete</button>'
                        return html;
                    }
                },
            ],
        });
    }

    function detailobat(id_permintaan,no_rekamedis,nama_pasien) {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('master/detail_obat_pasien'); ?>",
            data: {
                'id_permintaan': id_permintaan,
            },
            success: function(data) {
                let html = "";
                $("#detail_norekamedis").val(no_rekamedis);
                $("#detail_nama_pasien").val(nama_pasien);
                
                for (let index = 0; index < data.length; index++) {
                    html += `
                    <tr>
                    <td>` + (index+1)+ `</td>
                    <td>` + data[index].nama_obat + `</td>
                    <td>` + data[index].jumlah + `</td>
                    <td>` + data[index].satuan + `</td>
                    <td>` + data[index].aturan_pakai + `</td>
                    <td>` + data[index].anjuran + `</td>
                    <td>` + data[index].waktu + `</td>
                    <td>` + data[index].expired_date + `</td>
                    </tr>
                    `;
                }

                $("#row_obat").html(html);
            }
        });
    }

    function cetak(id_permintaan){
        window.open('<?php echo base_url('cetak/no_permintaan/'); ?>' + '/' + id_permintaan,"_blank");
    }
</script>

</html>