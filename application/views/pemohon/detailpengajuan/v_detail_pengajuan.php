<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/pemohon/header');
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?=$title;?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?=base_url()?>">Dashboard</a></div>
                <div class="breadcrumb-item"><?=$this->uri->segment(1);?></div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-md-8">
                    <?php if ($message = $this->session->flashdata('session_permohonan')): ?>
                    <div
                        class="alert <?= ($message['status']) ? 'alert-success' : 'alert-danger'; ?> alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            <i><?php echo  $message['message']; ?></i>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="invoice">
                        <div class="invoice-print">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="invoice-title">
                                        <h5>Permohonan</h5>
                                        <div class="text-warning"> No : <?=$data->nomor_pengajuan;?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <address>
                                                <strong>Dari : </strong><br><br>
                                                <div> <?= $data->nama_perusahaan;?></div>
                                                <div> <?= $data->email_pemohon;?></div>
                                                <div class="text-grey mt-1"> <?= $data->alamat_perusahaan;?></div>
                                                <div class="mt-1 mb-3">Ket : <i class="text-dark">"
                                                        <?=$data->keterangan;?>
                                                        "</i></div>
                                                <!-- <a target="blank"
                                                    href='<?= base_url('assets/files/pengajuan/'.$data->file_url);?>'
                                                    class="btn btn-info btn-sm">Surat Kuasa</a> -->
                                            </address>
                                        </div>
                                        <div class="col-md-6 text-md-right">
                                            <address>
                                                <strong>Diajukan:</strong>
                                                <div class="mb-3">
                                                    <?= Carbon\Carbon::parse($data->created_at)->diffForHumans();?>
                                                </div>
                                                <strong> Status </strong> : <br>
                                                <?php if($data->status == 1) :?>
                                                <span class="badge badge-success">Diterima</span>
                                                <?php elseif($data->status == 2) :?>
                                                <span class="badge badge-danger">Ditolak</span>
                                                <?php elseif($data->status == 3) :?>
                                                <span class="badge badge-warning">Sudah Direvisi</span>
                                                <?php else :?>
                                                <span class="badge badge-info">Belum Di Proses</span>
                                                <?php endif ;?><br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php if(count($data_permohonan) > 0):?>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="section-title">Syarat Permohonan</div>
                                    <p class="section-lead">Semua syarat yang diajukan pemohon</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-md " id="example1">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Syarat</th>
                                                    <th>Source</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($data_permohonan as $key => $value) :?>
                                                <tr>
                                                    <td><?= ++$key;?></td>
                                                    <td><?= $value->nama;?></td>
                                                    <td>
                                                        <?php if($value->source) :?>
                                                            <a href="#" onclick='showFile("<?=$value->source;?>")' >Lihat</a>
                                                        <?php else :?>
                                                            -
                                                        <?php endif;?>
                                                    </td>
                                                    <td>
                                                        <?php if($value->status == 1) :?>
                                                        <span class="badge badge-info">Diajukan</span>
                                                        <?php elseif($value->status == 2) :?>
                                                        <span class="badge badge-success">Diterima</span>
                                                        <?php elseif($value->status == 3) :?>
                                                        <span class="badge badge-danger">Ditolak</span>
                                                        <?php else :?>
                                                        -
                                                        <?php endif ;?>
                                                    </td>
                                                    <td>
                                                        <?php if($value->status == 2) :?>
                                                        Sudah Diterima
                                                        <?php elseif($value->status == 1) :?>
                                                        Menunggu validasi
                                                        <?php elseif($value->status == 3) :?>
                                                        <a href="#" class="badge badge-warning" data-toggle="modal"
                                                            onclick="uploadSyarat(<?= $value->id;?>)">Upload Ulang</a>
                                                        <?php else :?>
                                                        <a href="#" class="badge badge-secondary" data-toggle="modal"
                                                            onclick="uploadSyarat(<?= $value->id;?>)">Upload File</a>
                                                        <?php endif ;?>
                                                    </td>


                                                </tr>
                                                <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <iframe frameborder="0" width="100%" height="600"
                        src="<?= base_url('assets/files/pengajuan/'.$data->file_url);?>"></iframe>
                </div>
            </div>
        </div>
        <section>
</div>
<?php $this->load->view('_partials/pemohon/footer'); ?>
<?php $this->load->view('_partials/pemohon/js'); ?>
<?php $this->load->view('pemohon/detailpengajuan/js/js_pemohon_detailpengajuan');?>
<?php $this->load->view('pemohon/detailpengajuan/modal/modal_upload_file_syarat');?>
<?php $this->load->view('pemohon/detailpengajuan/modal/modal_show_file');?>

<?php //$this->load->view('_partials/pemohon/initmap'); ?>