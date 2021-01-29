<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/pemohon/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= isset($title) ? $title : "Edit Pengajuan"; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Google Maps</a></div>
                <div class="breadcrumb-item">Marker</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title"><?= isset($title) ? $title : "Edit Pengajuan"; ?></h2>
            <p class="section-lead">
                Lakukan permohonan izin rekemondasi pembangunan menara telekomunikasi
            </p>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <form action="<?= base_url();?>pemohon/pengajuan/update" method="post"
                        enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <label for="text">Form untuk menambah pengajuan</label>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-lg-12 col-md-12">
                                        <input type="hidden" name="id" value="<?= $data->id;?>">

                                        <input type="hidden" name="file_url" value="<?= $data->file_url;?>">
                                        <label for="keterangan">Masukan Keterangan</label>
                                        <input type="text" value="<?=$data->keterangan;?>" name="keterangan" id=""
                                            class="form-control" required
                                            placeholder="Contoh : Permohonan izin menara telekomunikasi di desa ...">
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Surat Kuasa Dari Perusahaan</label><br>
                                        <label for="keterangan" class="text-grey"><i>File yang dimasukan harus
                                                pdf, ukuran maksimal 5 mb </i></label>

                                        <input type="file" name="nama_file" class="form-control">
                                        <?php if($this->session->flashdata('error')) :?>
                                        <label for="keterangan" class="text-danger">
                                            <?= $this->session->flashdata('error');?>
                                        </label>
                                        <?php endif;?>


                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-lg btn-primary">Ubah</button>
                                </div>
                            </div>
                    </form>
                </div>

            </div>
        </div>
</div>
</section>
</div>
</section>
</div>
<?php $this->load->view('_partials/pemohon/footer'); ?>
<?php $this->load->view('_partials/pemohon/js'); ?>
<?php //$this->load->view('_partials/pemohon/initmap'); ?>