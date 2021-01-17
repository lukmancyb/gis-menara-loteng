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
                        <div class="card-header"><span class="fas fa-list"></span> Form Tambah</div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" id="form-data-perusahaan" novalidate>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="alamat">Nama Perusahaan</label>
                                            <input type="text" class="form-control" value="" name="id_perusahaan" id="id_perusahaan" hidden>

                                            <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" required>
                                            <div class="invalid-feedback">
                                                Field tidak boleh kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="alamat">Alamat Perusahaan</label>
                                            <input type="text" class="form-control" name="alamat_perusahaan" id="alamat_perusahaan">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="alamat">Kontak Perusahaan</label>
                                            <input type="number" class="form-control" name="hp_perusahaan" id="hp_perusahaan">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <a class="btn btn-success" id="btnSave" onclick="simpanDataPerusahaan('#form-data-perusahaan', '#dom-ajax');" style="color:white; "><i class="fas fa-save" style="color:white"></i> Tambah</a>
                                    <a class="btn btn-info" id="btnUpdate" onclick="editDataPerusahaan('#form-data-perusahaan', '#dom-ajax');" style="color:white; display:none;"><i class="fas fa-save" style="color:white"></i> Update</a>
                                    <a class="btn btn-danger" id="btnReset" onclick="reset()" style="color:white; display:none;"><i class="fas fa-save" style="color:white"></i> Reset</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="example1">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Alamat</th>
                                    <th>Kontak</th>
                                    <th></th>
                                </thead>
                                <tbody id="daftarkoordinattower">
                                    <?php
                                    $no = 1;
                                    foreach ($itemdataperusahaan->result() as $d) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $d->nama_perusahaan; ?></td>
                                            <td><?php echo $d->alamat_perusahaan; ?></td>
                                            <td><?php echo $d->hp_perusahaan; ?></td>
                                            <td>
                                                <a onclick="editData(<?= $d->id_perusahaan; ?>)" style="color:white" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="far fa-edit"></i></a>
                                                <a href="<?php echo base_url('perusahaan/delete/' . $d->id_perusahaan); ?>" class="btn btn-danger" id="koordinat_hapus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"><i class="fas fa-times"></i></a>

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
        setTimeout(location.reload.bind(location), 2000);
    }
</script>