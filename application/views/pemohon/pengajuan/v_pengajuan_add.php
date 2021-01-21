<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/pemohon/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= isset($title) ? $title : "Tambah Pengajuan"; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Google Maps</a></div>
                <div class="breadcrumb-item">Marker</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title"><?= isset($title) ? $title : "Tambah Pengajuan"; ?></h2>
            <p class="section-lead">
                Lakukan permohonan izin rekemondasi pembangunan menara telekomunikasi
            </p>
            <div class="row">
                <div class="col-md-6 col-lg-8 col-sm-12">
                    <form action="<?= base_url('pemohon/pengajuan/create'); ?>" method="post">
                        <div class="card">
                            <div class="card-header">
                                <label for="text">Form untuk menambah pengajuan</label>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="email">Email</label>
                                        <input type="email"
                                               value="<?= $this->session->userdata('username'); ?>" class="form-control"
                                               readonly>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="email">Telepon</label>
                                        <input type="email"
                                               value="<?= $this->session->userdata('telp'); ?>" class="form-control"
                                               readonly>
                                    </div>
                                </div>
                                <div class="row">
                                 <div class="form-group col-lg-6 col-md-12">
                                     <label for="perusahaan">Pilih perusahaan</label>
                                     <select name="id_perusahaan" class="form-control select2" required>
                                         <option value="">--Nama Perusahaan --</option>
                                         <?php foreach ($perusahaan as $key => $value) :?>
                                             <option value="<?= $value->id_perusahaan;?>"><?= $value->nama_perusahaan;?></option>
                                         <?php endforeach;?>

                                     </select>
                                 </div>
                                <div class="form-group col-lg-6 col-md-12">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea name="keterangan" id="" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                            <button class="btn btn-lg btn-primary">Tambah</button>
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
