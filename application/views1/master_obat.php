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

                    <!-- Responsive integration -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Master Obat</h5>
                        </div>

                        <div class="panel-body">
                            <button type="button" class="btn btn-info btn-sm" onclick="bukamodal()" data-toggle="modal" data-target="#modal_form_vertical">Tambah Obat <i class="icon-user-plus position-right"></i></button>
                            <!-- Vertical form modal -->
                            <div id="modal_update_obat" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h5 class="modal-title">Update Data Obat</h5>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row" style="padding-top: 20px;">

                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label col-lg-12">Nama Obat</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" id="detail_namaobat" class="form-control" placeholder="Nama Obat">
                                                            <input type="hidden" id="detail_id" class="form-control" placeholder="Nama Obat">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-lg-12">Satuan</label>
                                                        <div class="col-lg-12">
                                                            <select name="detail_satuan" class="form-control" id="detail_satuan">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="modal-footer" style="padding-top: 20px;">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <button onclick="updateobat()" class="btn btn-success btn-xs">Update Obat</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="modal_form_vertical" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h5 class="modal-title">Tambah Data Obat</h5>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row" style="padding-top: 20px;">

                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label col-lg-12">Nama Obat</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" id="namaobat" class="form-control" placeholder="Nama Obat">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-lg-12">Satuan</label>
                                                        <div class="col-lg-12">
                                                            <select name="satuan" class="form-control" id="satuan">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="modal-footer" style="padding-top: 20px;">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <button onclick="tambahobat()" class="btn btn-success btn-xs">Tambah Obat</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table id="tabel_pasien" class="table datatable-row-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Obat</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Created Date</th>
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
        get_pasien();
    });

    function get_pasien() {
        $('#tabel_pasien').DataTable({
            "bDestroy": true,
            "bProcessing": true,
            "serverSide": true,
            "ordering": true,
            "order": [
                [0, 'asc']
            ],
            "ajax": {
                "url": " <?php echo base_url('master/getriwayat_obat'); ?> ",
                "type": "POST",
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
                    "data": "nama_obat"
                }, {
                    "data": "jumlah"
                }, {
                    "data": "satuan"
                },
                {
                    "data": "created_date"
                }, {
                    "render": function(data, type, row) { // Tampilkan kolom aksi
                        var html = `<button onclick="edit_obat('` + row.id + `')" id="perawat" data-toggle="modal" data-target="#modal_update_obat" style="width:100%" class="btn btn-success btn-xs">Edit <i class="icon-pencil position-right"></i></button>`;
                        return html;
                    }
                },
                {
                    "render": function(data, type, row) { // Tampilkan kolom aksi
                        var html = `<button onclick="delete_obat('` + row.id + `')" id="perawat" style="width:100%" class="btn btn-danger btn-xs">Delete<i class="icon-trash position-right"></i></button>`;
                        return html;
                    }
                },
            ],
        });
    }

    function bukamodal() {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('master/satuan_obat'); ?>",
            success: function(data) {
                let html = "";

                for (let index = 0; index < data.length; index++) {
                    html += `<option value="` + data[index].satuan + `">` + data[index].satuan + `</option>`
                }

                $("#satuan").html(html);
            }
        });

    }

    function tambahobat(){
        var namaobat = $("#namaobat").val();
        var satuan = $("#satuan").val();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('obat/insert_obat'); ?>",
            data: {
                'namaobat': namaobat,
                'satuan': satuan,
            },
            success: function(data) {
                $('#modal_form_vertical').modal('toggle');
                $('#tabel_pasien').DataTable().ajax.reload();
            }
        });
    }

    function edit_obat(id_obat) {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('master/get_detail_obat'); ?>",
            data: {
                'id': id_obat,
            },
            success: function(data) {
                $("#detail_namaobat").val(data.nama_obat);
                $("#detail_id").val(data.id);
                setobat(data.satuan);

                // $("#detail_satuan").val(data.satuan);
            }
        });
    }

    function setobat(satuan) {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('master/satuan_obat'); ?>",
            success: function(data) {
                let html = "";
                let select = "";

                for (let index = 0; index < data.length; index++) {
                    if (data[index].satuan == satuan) {
                        select = "selected";
                    }else{
                        select="";
                    }
                    html += `<option `+select+` value="` + data[index].satuan + `">` + data[index].satuan + `</option>`
                }

                $("#detail_satuan").html(html);
            }
        });

    }

    function updateobat() {
        var namaobat = $("#detail_namaobat").val();
        var satuan = $("#detail_satuan").val();
        var id = $("#detail_id").val();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('obat/update_obat'); ?>",
            data: {
                'id': id,
                'namaobat': namaobat,
                'satuan': satuan,
            },
            success: function(data) {
                $('#modal_update_obat').modal('toggle');
                $('#tabel_pasien').DataTable().ajax.reload();
            }
        });
    }

    function delete_obat(id) {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('obat/delete_obat'); ?>",
            data: {
                'id': id,
            },
            success: function(data) {
                $('#tabel_pasien').DataTable().ajax.reload();
            }
        });
    }
</script>

</html>