<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/pemohon/header');
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
                            <?php if ($user->id_perusahaan == 0) : ?>
                            <div class="alert alert-warning alert-dismissible show fade">
                                <div class="alert-body">
                                    Anda dapat menambahkan permohonan setelah melengkapi data profil prusahaan anda.
                                </div>
                            </div>
                            <?php else:?>
                            <a href="<?= base_url('pemohon/pengajuan/add'); ?>" class="btn btn-primary">Tambah Pengajuan
                                Baru</a>
                            <?php endif; ?>
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
                                    <?php foreach ($pengajuan as $key => $value) : ?>
                                    <tr>
                                        <td style="width: 10%;">
                                        <form action="<?= base_url();?>pemohon/pengajuan/delete" method="post">
                                            <a href="<?= base_url('pengajuan-edit/'.$value->id);?>"
                                                class="btn btn-warning" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Edit"><i class="far fa-edit"></i></a>
                                                
                                                <input type="hidden" name="file_url" value="<?= $value->file_url;?>">
                                                <input type="hidden" name="id" value="<?= $value->id;?>">
                                                <button type="submit" class="btn btn-danger" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Batalkan"><i
                                                        class="fas fa-times"></i></button>
                                            </form>
                                        </td>
                                        <td><?= $key + 1; ?></td>
                                        <td><a href='<?=base_url();?>detail-permohonan/<?=$value->id;?>'><?= $value->nomor_pengajuan; ?></a></td>
                                        <td><?= $value->keterangan; ?></td>
                                        <td><?= $value->file_url; ?></td>
                                        <td><?= $value->created_at; ?></td>
                                        <td>
                                            <span
                                                class="badge <?= $value->status ? "badge-primary" : "badge-warning"; ?> "><?= $value->status ? "Diterima" : "Belum Diproses" ; ?></span>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
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