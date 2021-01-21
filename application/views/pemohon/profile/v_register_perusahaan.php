<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/pemohon/header');
?>

<!-- Main Content -->
<div class="main-content">

    <section class="section">
        <div class="section-header">
            <h1>
                <?php echo $title; ?>
            </h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">
                    <?php echo $title; ?>
                </div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, <?= $this->session->userdata('nama');?>
            </h2>
            <p class="section-lead">
                Daftarkan nama perusahaan , mohon mengisi dengan benar.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" action="<?= base_url('pemohon/profile/simpan_registrasi_perusahaan'); ?>">
                            <div class="card-header">
                                <h4>Registrasi Perusahaan</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Perusahaan</label>
                                        <input type="text" id="nama_perusahaan" name="nama_perusahaan" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Alamat Perusahaan</label>
                                        <textarea class="form-control" name="alamat_perusahaan" required></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" name="submit" id="submit"
                                        class="btn btn-primary btn-lg btn-block">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<?php $this->load->view('_partials/pemohon/footer'); ?>
<?php $this->load->view('_partials/pemohon/js'); ?>

