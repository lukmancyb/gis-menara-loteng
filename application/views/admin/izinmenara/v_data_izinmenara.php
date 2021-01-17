<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!--script google map-->

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><?= $this->uri->segment(1); ?></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title"><?= $title; ?></h2>
            <p class="section-lead">
                <?= $title; ?> di Kabupaten Lombok Tengah, NTB.
            </p>
      
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                    <div class="card-header"><a href="<?php echo base_url(); ?>izinmenara/tambah" class="btn btn-primary">Tambah Baru</a></div>
                        <div class="card-body">
                            <table class="table table-responsive" id="example1">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Nama Pemohon</th>
                                    <th>Alamat / Lokasi</th>
                                    <th>No Izin</th>
                                    <th>Tgl Mulai Berlaku</th>
                                    <th>Tgl Berakhir</th>
                                    <th>Tahun Permohonan</th>
                                    <th>Keterangan</th>
                                    <th></th>
                                </thead>
                                <tbody id="daftarkoordinattower">
                                    <?php
                                    $no = 1;
                                    foreach ($itemizinmenara->result() as $d) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $d->nama_perusahaan; ?></td>
                                            <td><?php echo $d->nama_pemohon; ?></td>
                                            <td><?php echo $d->nama_lokasi; ?></td>
                                            <td><?php echo $d->no_izin; ?></td>
                                            <td><?php echo $d->izin_mulai_tgl; ?></td>
                                            <td><?php echo $d->izin_akhir_tgl; ?></td>
                                            <td><?php echo $d->thn_permohonan; ?></td>
                                            <td><?php echo $d->keterangan; ?></td>
                                            <td>
                                                <a onclick="" style="color:white" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="far fa-edit"></i></a>
                                                <a href="<?=base_url();?>izinmenara/delete/<?= $d->id; ?>" class="btn btn-danger" id="koordinat_hapus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"><i class="fas fa-times"></i></a>

                                            </td>
                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
</div>
<?php $this->load->view('_partials/footer'); ?>
<?php $this->load->view('_partials/js'); ?>

<script>
    var forms = document.getElementsByClassName('needs-validation');
    $(document).ready(function() {
        $("#btnSave").show();
        $("#btnUpdate").hide();
        $("#btnReset").hide();
        $("#btnUpdate").prop('disabled', true);
        $("#btnSave").prop('disabled', false);

    });

    function reset() {
        $("#btnSave").show();
        $("#btnUpdate").hide();
        $("#btnReset").hide();
        $("#btnUpdate").prop('disabled', true);
        $("#btnSave").prop('disabled', false);
        $(forms).trigger("reset");
    }

    function editData(id) {
        $.ajax({
            url: base_url + 'perusahaan/get_perusahaan_by_id/' + id,
            method: "GET",
            async: true,
            dataType: 'json',
            success: function(res) {
                var res = JSON.parse(JSON.stringify(res));
                // console.log(res);
                if (res.success) {
                    console.log(res);
                    $('#nama_perusahaan').val(res.data.nama_perusahaan);
                    $('#alamat_perusahaan').val(res.data.alamat_perusahaan);
                    $('#hp_perusahaan').val(res.data.hp_perusahaan);
                    $('#id_perusahaan').val(res.data.id_perusahaan);

                    $("#btnSave").hide();
                    $("#btnUpdate").show();
                    $("#btnReset").show();
                    $("#btnUpdate").prop('disabled', false);
                    $("#btnSave").prop('disabled', true);

                    // showAlert(res.msg, "success", "Info", 3000);
                    // $(forms).trigger("reset");
                } else {
                    showAlert(res, "warning", "Info", 0);
                }
            },
            error: function(err) {
                swal("Error", "Tidak bisa terhubung ke server", "warning");
            }
        });

    }

    function simpanDataPerusahaan(obj) {
        var validation = Array.prototype.filter.call(forms, function(form) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
            } else {
                var data = $(obj).serialize();
                $.ajax({
                    url: base_url + 'perusahaan/simpan_data_perusahaan',
                    method: "POST",
                    data: data,
                    async: true,
                    dataType: 'json',
                    success: function(res) {
                        var res = JSON.parse(JSON.stringify(res));
                        // console.log(data);
                        if (res.success) {
                            showAlert(res.msg, "success", "Info", 3000);
                            $(forms).trigger("reset");
                            reloadPage();
                        } else {
                            showAlert(data.msg, "warning", "Info", 0);
                        }
                    },
                    error: function(err) {
                        swal("Error", "Tidak bisa terhubung ke server", "warning");
                    }
                });

            }
        });



    }

    function editDataPerusahaan(obj) {
        var validation = Array.prototype.filter.call(forms, function(form) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
            } else {
                var data = $(obj).serialize();
                $.ajax({
                    url: base_url + 'perusahaan/edit_data_perusahaan',
                    method: "POST",
                    data: data,
                    async: true,
                    dataType: 'json',
                    success: function(res) {
                        var res = JSON.parse(JSON.stringify(res));
                        // console.log(data);
                        if (res.success) {
                            showAlert(res.msg, "success", "Info", 3000);
                            $(forms).trigger("reset");
                            reloadPage()
                        } else {
                            showAlert(data.msg, "warning", "Info", 0);
                        }
                    },
                    error: function(err) {
                        swal("Error", "Tidak bisa terhubung ke server", "warning");
                    }
                });

            }
        });



    }

    function reloadPage() {
        setTimeout(location.reload.bind(location), 4000);
    }
</script>