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

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Form horizontal -->
                            <div class="panel panel-flat">

                                <div class="panel-body">
                                    <fieldset class="content-group">
                                        <legend class="text-bold">Profil Pasien</legend>

                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-lg-12">No RM</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" id="no_rm" placeholder="No Rekamedis" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-lg-12">Nama Pasien</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" id="nama_pasien" placeholder="Nama Pasien" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-lg-12">Tanggal Lahir</label>
                                                        <div class="col-lg-12">
                                                            <input id="tgl_lahir" type="date" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-lg-12">Tanggal</label>
                                                        <div class="col-lg-12">
                                                            <input id="tanggal" type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-lg-12">No Registrasi</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" id="no_registrasi" placeholder="No Registrasi Pasien" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-lg-12">Alamat</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" id="alamat" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row" style="padding-top: 20px;">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <input type="button" style="width: 100%;" onclick="cari_pasien()" class="btn btn-success btn-xs" value="Cari Pasien">
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-right" style="padding-top: 20px;">
                                                <div class="col-md-6">
                                                    <input type="button" style="width: 100%;" class="btn btn-warning btn-xs" value="Bersihkan">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="button" onclick="tambahpasien()" style="width: 100%;" class="btn btn-info btn-xs" value="Simpan Pasien Baru">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!-- /form horizontal -->
                        </div>
                        <div class="col-md-8">


                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Detail Permintaan Obat</h5>
                                </div>

                                <div class="panel-body">
                                    <div class="form-horizontal">
                                        <fieldset class="content-group">
                                            <legend class="text-bold">Permintaan Obat</legend>

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="col-md-12">
                                                        <center>
                                                            <div class="form-group">
                                                                <center>
                                                                    <p style="font-size: 22px;"><b>NO RESEP</b></p>
                                                                </center>
                                                                <div class="col-lg-12">
                                                                    <input type="text" style="text-align: center; font-size: 18px;" name="" class="form-control" placeholder="Masukan No Resep" id="no_resep">
                                                                </div>
                                                            </div>
                                                        </center>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-12">Nama Obat</label>
                                                            <div class="col-lg-12">
                                                                <select name="" class="form-control" id="sel_obat">

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-lg-12">Aturan Pakai</label>
                                                                    <div class="col-lg-4">
                                                                        <input style="border-width: 1px;border-color: #dddddd; text-align: center;" type="text" name="" class="form-control" id="aturan1">
                                                                    </div>
                                                                    <div class="col-lg-4"><br>
                                                                        <center><label for=""> x sehari</label></center>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <input type="text" style="border-width: 1px;border-color: #dddddd;text-align: center;" name="" class="form-control" id="aturan2">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-lg-12">Satuan</label>
                                                                    <div class="col-lg-12">
                                                                        <select name="" class="form-control" id="sel_satuan">

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2"><br>
                                                                        <center><label for="" style="">Tiap</label></center>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <input type="text" style="border-width: 1px;border-color: #dddddd;text-align: center;" name="" class="form-control" id="aturan3">
                                                                    </div>
                                                                    <div class="col-lg-2"><br>
                                                                        <center><label for="">Jam</label></center>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <input type="text" style="border-width: 1px;border-color: #dddddd;text-align: center;" name="" class="form-control" id="aturan4">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label class="control-label col-lg-12">Jumlah</label>
                                                            <div class="col-lg-12">
                                                                <input id="jumlah" min="0" type="number" value="0" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-lg-12">Waktu</label>
                                                                <div class="col-lg-12">
                                                                    <select name="" class="form-control" id="sel_waktu">
                                                                        <option value="Sesudah Makan">Sesudah Makan</option>
                                                                        <option value="Sebelum Makan">Sebelum Makan</option>
                                                                        <option value="Sebelum Makan">1 Jam Sebelum Makan</option>
                                                                        <option value="Saat Makan">Saat Makan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-lg-12">Anjuran</label>
                                                                <div class="col-lg-12">
                                                                    <select name="" class="form-control" id="sel_anjuran">
                                                                        <option value="">-</option>
                                                                        <option value="ANTIBIOTIK JANGAN SISA">ANTIBIOTIK JANGAN SISA</option>
                                                                        <option value="KOCOK DAHULU">KOCOK DAHULU</option>
                                                                        <option value="JIKA NYERI">JIKA NYERI</option>
                                                                        <option value="PAGI">PAGI</option>
                                                                        <option value="SIANG">SIANG</option>
                                                                        <option value="SORE">SORE</option>
                                                                        <option value="MALAM">MALAM</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <button style="width: 100%;" onclick="addtotable()" class="btn btn-success btn-xs">Tambah Obat</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button style="width: 100%;" class="btn btn-warning btn-xs">Bersihkan</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bordered panel body table -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Detail Permintaan Obat</h5>
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="detail_obat" class="table table-bordered table-framed">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Satuan</th>
                                            <th>Jumlah</th>
                                            <th>Aturan Pakai</th>
                                            <th>Anjuran</th>
                                            <th>Waktu</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="row_detail_obat">
                                    </tbody>
                                </table>
                                <div class="col-md-12" style="padding-top: 20px;">
                                    <div class="col-md-12">
                                        <button onclick="insert_permintaan()" class="btn btn-info btn-xs">Simpan dan Cetak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /bordered panel body table -->

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
        $('#sel_satuan').select2();
        $('#sel_obat').select2();
        $('#sel_anjuran').select2();
        $('#sel_aturan_pakai').select2();
        satuan_obat();
        master_obat();
        aturan_pakai();
    });
</script>

<script>
    function satuan_obat() {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('master/satuan_obat'); ?>",
            success: function(data) {
                var html = "";
                for (let index = 0; index < data.length; index++) {
                    html += `<option data-id="` + data[index].id + `" data-satuan="` + data[index].satuan + `">` + data[index].satuan + `</option>`
                }

                $("#sel_satuan").html(html);
            }
        });
    }

    function master_obat() {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('master/obat'); ?>",
            success: function(data) {
                var html = "";
                for (let index = 0; index < data.length; index++) {
                    html += `<option data-id="` + data[index].id + `" data-namaobat="` + data[index].nama_obat + `">` + data[index].nama_obat + `</option>`
                }

                $("#sel_obat").html(html);
            }
        });
    }

    function aturan_pakai() {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('master/aturan_pakai'); ?>",
            success: function(data) {
                var html = "";
                for (let index = 0; index < data.length; index++) {
                    html += `<option data-id="` + data[index].id + `" data-aturanpakai="` + data[index].aturan_pakai + `">` + data[index].aturan_pakai + `</option>`
                }

                $("#sel_aturan_pakai").html(html);
            }
        });
    }

    function cari_pasien() {
        var no_rm = $("#no_rm").val();
        $("#nama_pasien").val("");
        $("#tgl_lahir").val("");
        $("#no_registrasi").val("");
        $("#nama_pasien").prop('disabled', false);
        $("#tgl_lahir").prop('disabled', false);
        $("#no_registrasi").prop('disabled', false);
        $("#tanggal").prop('disabled', false);
        $("#alamat").prop('disabled', false);
        if (no_rm == "") {
            Swal.fire({
                icon: 'error',
                width: 500,
                title: 'Gagal',
                text: 'Periksa Kembali Inputan. No Rekamedis Tidak Boleh Kosong.',
            })
        } else {
            if (no_rm.length < 5) {
                Swal.fire({
                    icon: 'error',
                    width: 500,
                    title: 'Gagal',
                    text: 'Periksa Kembali Inputan. No Rekamedis Harus Terdiri Dari 5 Karakter.',
                });
            } else {
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    data: {
                        'no_rm': no_rm,
                    },
                    url: "<?php echo base_url('master/get_pasien'); ?>",
                    success: function(data) {
                        if (data == "gagal") {
                            Swal.fire({
                                icon: 'error',
                                width: 500,
                                title: 'Pencarian Gagal',
                                text: 'Data Tidak Ditemukan. Periksa Kembali Inputan No Rekamedis.',
                            });
                        } else {

                            var date = new Date(),
                                yr = date.getFullYear(),
                                month = date.getMonth(),
                                day = date.getDate(),
                                hours = date.getHours(),
                                time = date.getMinutes(),
                                newDate = yr + '' + month + '' + day + '' + hours + '' + time + '' + data.no_rekamedis;

                            $("#no_rm").val(data.no_rekamedis);
                            $("#nama_pasien").val(data.nama_pasien);
                            $("#tgl_lahir").val(data.tanggal_lahir);
                            $("#alamat").val(data.alamat);
                            $("#no_registrasi").val(newDate);
                            $("#nama_pasien").prop('disabled', true);
                            $("#tgl_lahir").prop('disabled', true);
                            $("#no_registrasi").prop('disabled', true);
                            $("#tanggal").prop('disabled', true);
                            $("#alamat").prop('disabled', true);
                        }
                    }
                });
            }
        }
    }

    function addtotable() {
        let i = 0;
        // let result = $.parseJSON(data);
        let aturan_pakai = "";
        if ($("#aturan1").val() == "") {
            aturan_pakai = "Tiap " + $("#aturan3").val() + " jam " + $("#aturan4").val() + " " + $("#sel_satuan").find(':selected').data('satuan');
        } else if ($("#aturan3").val() == "") {
            aturan_pakai = $("#aturan1").val() + " x sehari " + $("#aturan2").val() + " " + $("#sel_satuan").find(':selected').data('satuan');
        } else {
            aturan_pakai = $("#aturan1").val() + " x sehari " + $("#aturan2").val() + " " + $("#sel_satuan").find(':selected').data('satuan');
        }
        var table = document.getElementById('detail_obat').getElementsByTagName('tbody')[0];
        var jumlah = document.getElementById("row_detail_obat").rows.length;
        var row = table.insertRow(jumlah);
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var cell4 = row.insertCell(4);
        var cell5 = row.insertCell(5);
        var cell6 = row.insertCell(6);
        var cell7 = row.insertCell(7);
        var cell8 = row.insertCell(8);
        var cell9 = row.insertCell(9);
        cell0.innerHTML = jumlah + 1;
        cell1.innerHTML = $("#sel_obat").find(':selected').data('namaobat');
        cell2.innerHTML = $("#sel_satuan").find(':selected').data('satuan');
        // cell1.style.display = 'none';
        cell3.innerHTML = $("#jumlah").val();
        cell4.innerHTML = aturan_pakai;
        cell5.innerHTML = $("#sel_anjuran").val();
        // cell6.style.display = "7";
        cell6.innerHTML = $("#sel_waktu").val();
        cell7.innerHTML = '<button type="button" style="width: 100%;" class="btn bg-danger btn-labeled legitRipple" onclick="hapus_obat(this)" id="btn_tambah"><b><i class="icon-trash"></i></b> Hapus</button>';
        cell8.innerHTML = $("#sel_obat").find(':selected').data('id');
        cell8.style.display = 'none';
        cell9.innerHTML = $("#sel_satuan").find(':selected').data('id');
        cell9.style.display = 'none';

    }

    function insert_permintaan() {
        var tanggal = $('#tanggal').val();
        var no_rm = $('#no_rm').val();
        var no_resep = $('#no_resep').val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('permintaan/insert_permintaan'); ?>",
            async: false,
            data: {
                "tanggal": tanggal,
                "no_rm": no_rm,
            },
            success: function(data) {
                var oTable = document.getElementById('detail_obat');
                var rowLength = oTable.rows.length;
                var id_permintaan = data;

                for (i = 1; i < rowLength; i++) {
                    var oCells = oTable.rows.item(i).cells;
                    var cellLength = oCells.length;
                    var nama_obat = oCells.item(1).innerHTML;
                    var satuan = oCells.item(2).innerHTML;
                    var jumlah = oCells.item(3).innerHTML;
                    var aturan_pakai = oCells.item(4).innerHTML;
                    var anjuran = oCells.item(5).innerHTML;
                    var waktu = oCells.item(6).innerHTML;
                    var id_obat = oCells.item(8).innerHTML;
                    // console.log(id_permintaan, nama_obat, satuan, jumlah, ed, aturan_pakai, satuan, waktu);
                    insert_detail_permintaan(no_resep, id_permintaan, id_obat, nama_obat, satuan, jumlah, aturan_pakai, anjuran, waktu, tanggal);
                }

                // window.location.href = '<?php echo base_url('cetak/no_permintaan/'); ?>' + '/' + id_permintaan;
                window.open('<?php echo base_url('cetak/no_permintaan/'); ?>' + '/' + id_permintaan, "_blank");

            }
        })
    }

    function insert_detail_permintaan(no_resep, id_permintaan, id_obat, nama_obat, satuan, jumlah, aturan_pakai, anjuran, waktu, tanggal) {
        var id_permintaan = id_permintaan;
        var id_obat = id_obat;
        var nama_obat = nama_obat;
        var satuan = satuan;
        var jumlah = jumlah;
        var aturan_pakai = aturan_pakai;
        var anjuran = anjuran;
        var waktu = waktu;
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('permintaan/insert_detail_permintaan'); ?>",
            data: {
                'no_resep': no_resep,
                'id_permintaan': id_permintaan,
                'id_obat': id_obat,
                'nama_obat': nama_obat,
                'satuan': satuan,
                'jumlah': jumlah,
                'ed': "",
                'aturan_pakai': aturan_pakai,
                'anjuran': anjuran,
                'waktu': waktu,
                'tanggal': tanggal
            },
            success: function(data) {

            }
        });
    }

    function hapus_obat(element) {

        Swal.fire({
            title: 'Hapus Penerimaan',
            text: "Apakah Yakin Dihapus?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'YA',
            cancelButtonText: "TIDAK",
        }).then((result) => {
            if (result.isConfirmed) {
                var row = element.parentNode.parentNode.rowIndex;
                document.getElementById('detail_obat').deleteRow(row);
                Swal.fire(
                    'Terhapus!',
                    'Berhasil Menghapus Permintaan Obat',
                    'success'
                )
            }
        });

    }

    function tambahpasien() {
        var norekamedis = $("#no_rm").val();
        var namapasien = $("#nama_pasien").val();
        var tanggallahir = $("#tgl_lahir").val();
        var alamat = $("#alamat").val();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('pasien/insert_pasien'); ?>",
            data: {
                'norekamedis': norekamedis,
                'namapasien': namapasien,
                'tanggallahir': tanggallahir,
                'alamat': alamat,
            },
            success: function(data) {
                Swal.fire({
                    icon: 'success',
                    width: 500,
                    title: 'Berhasil',
                    text: 'Berhasil Menyimpan Pasien Sebagai Pasien Baru.',
                });
            }
        });
    }
</script>

</html>