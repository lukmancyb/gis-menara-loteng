<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/pemohon/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= isset($title) ? $title : "Detail Pengajuan"; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Google Maps</a></div>
                <div class="breadcrumb-item">Marker</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title"><?= isset($title) ? $title : "Detail Pengajuan"; ?></h2>
            <p class="section-lead">
                Detail pengajuan izin rekomendasi pembangunan menara
            </p>
            <?php if ($message = $this->session->flashdata('session_pengajuan')): ?>
            <div
                class="alert <?= ($message['status']) ? 'alert-success' : 'alert-danger'; ?> alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    <?php echo $message['message']; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                           
                        </div>
                        <div class="card-body">
                            <table class="table" id="example1">
                                <thead>
                                    <th>#</th>
                                    <th>No</th>
                                    <th>Nomor Permohonan</th>
                                    <th>Keterangan</th>
                                    <th>File</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                            </table>
                        </div>

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