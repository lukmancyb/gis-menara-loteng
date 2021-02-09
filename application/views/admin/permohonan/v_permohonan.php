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
            <h2 class="section-title"><?= isset($title) ? $title : "Pengajuan"; ?></h2>
            <p class="section-lead">
                Lakukan pengajuan izin rekemondasi pembangunan menara telekomunikasi
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
                                    <th>Nomor Permohonan</th>
                                    <th>Dari Perusahaan</th>
                                    <th>Keterangan</th>
                                    <th>Telepon</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>File</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                    <?php foreach($data as $key => $value) :?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url();?>admin-pengajuan/detail/<?=$value->id;?>"
                                                class="btn btn-icon btn-info" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Lihat Detail">
                                                <i class="fas fa-eye">
                                                </i>
                                            </a>
                                        </td>
                                        <td><?= $value->nomor_pengajuan;?></td>
                                        <td><?= $value->nama_perusahaan;?></td>
                                        <td><?= $value->keterangan;?></td>
                                        <td><?= $value->telepon_pemohon;?></td>
                                        <td><?= $value->created_at;?></td>
                                        <td>
                                            <a target="blank"
                                                href='<?= base_url('assets/files/pengajuan/'.$value->file_url);?>'>
                                                Lihat
                                            </a>
                                        </td>
                                        <td>
                                        <?php if($value->status == 1) :?>
                                                <span class="badge badge-success">Diterima</span>
                                                <a href="#" data-toggle="modal" onclick='showDetail(<?= json_encode($value->id);?>)' class="badge badge-secondary">Riwayat</a>
                                           <?php elseif($value->status == 2) :?>
                                                 <span class="badge badge-danger">Ditolak</span>
                                                <a href="#" data-toggle="modal" onclick='showDetail(<?= json_encode($value->id);?>)' class="badge badge-secondary">Riwayat</a>
                                            <?php elseif($value->status == 3) :?>
                                                <span  class="badge badge-warning">Revisi</span>
                                                <a href="#" data-toggle="modal" onclick='showDetail(<?= json_encode($value->id);?>)' class="badge badge-secondary">Riwayat</a>
                                            <?php else :?>
                                                <span class="badge badge-info">Menunggu Validasi</span>
                                            <?php endif ;?>
                                        </td>

                                    </tr>
                                    <?php endforeach;?>
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
<?php $this->load->view('admin/permohonan/modal/modal_show_komentar');?>
<?php $this->load->view('admin/permohonan/js/js_pengajuan');?>

<?php //$this->load->view('_partials/pemohon/initmap'); ?>