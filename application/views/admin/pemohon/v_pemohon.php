<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= isset($title) ? $title : "Pengajuan"; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Google Maps</a></div>
                <div class="breadcrumb-item">Marker</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title"><?= isset($title) ? $title : "Daftar Pengajuan Perusahaan"; ?></h2>
            <p class="section-lead">
                Daftar pengajuan perusahaan yang melakukan permohonan
            </p>
            <?php if ($message = $this->session->flashdata('validasi_pemohon')): ?>
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
                                    <th>Nama Perusahaan</th>
                                    <th>Alamat</th>
                                    <th>Hp</th>
                                    <th>Diajukan Pada</th>
                                    <th>Diajukan Oleh</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                <?php if(!is_null($data)) :?>
                                    <?php foreach($data as $key => $value) :?>
                                    <tr>
                                        <td class="text center">
                                            <a href="<?= base_url('admin-pemohon/detail_pemohon/'.$value->id_perusahaan);?>"
                                                class="btn btn-primary">Detail</a>
                                        </td>
                                        <td><?= $key +1 ;?></td>
                                        <td><?= $value->nama_perusahaan ;?></td>
                                        <td><?= $value->alamat_perusahaan ;?></td>
                                        <td><?= $value->hp_perusahaan ;?></td>
                                        <td><?= $value->created_at ;?></td>
                                        <td><?= $value->created_by ;?></td>
                                        <td>
                                            <?= !$value->is_active ? 
                                        '<span class="badge badge-warning">Belum Diverifikasi</span>' : 
                                        '<span class="badge badge-success">Sudah Diverifikasi</span>' ;?>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                <?php else :?>
                                    <tr>
                                        <td colspan="8">Belum ada data untuk validasi pemohon</td>
                                    </tr>
                                <?php endif;?>
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
<?php $this->load->view('_partials/footer'); ?>
<?php $this->load->view('_partials/js'); ?>
<?php //$this->load->view('_partials/pemohon/initmap'); ?>