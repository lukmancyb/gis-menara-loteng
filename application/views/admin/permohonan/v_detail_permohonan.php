<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!--script google map-->

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

                                    <?php if($data->status == 0 || $data->status == 3) :?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-light">
                                                Silahkan lakukan validasi permohonan
                                                agar pemohon dapat melengkapi berkas - berkas pendukung,
                                                Lakukan validasi sekarang :
                                                <a href='<?= base_url('admin-pengajuan/terima/'.$data->id);?>'
                                                    class="badge badge-secondary">Terima</a>
                                                <a href="#" class="badge badge-danger" data-toggle="modal"
                                                    data-target="#exampleModal">Tolak</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif;?>
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
                                                    <td><?= $value->source ? $value->source : ' - ';?></td>
                                                    <td><?= $value->status ? $value->status : ' - ';?></td>
                                                    <td>

                                                    </td>
                                                </tr>
                                                <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 text-md-right">
                                    <div class="float-lg-left mb-lg-0 mb-3">
                                        <button class="btn btn-primary btn-icon icon-left"><i
                                                class="fas fa-credit-card"></i>
                                            Process
                                            Payment</button>
                                        <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i>
                                            Cancel</button>
                                    </div>
                                    <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i>
                                        Print</button>
                                </div>
                            </div>
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
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
        <form action="<?=base_url('admin-pengajuan/tolak');?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_pengajuan" value="<?=$data->id;?>">
                    <input type="hidden" name="user" value="<?=$this->session->userdata('username');?>">
                    <textarea name="komentar" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<?php $this->load->view('_partials/js'); ?>

<!--end script google map-->