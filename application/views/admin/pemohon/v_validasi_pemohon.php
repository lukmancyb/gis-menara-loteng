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
            <h2 class="section-title"><?=$title;?></h2>
            <p class="section-lead">
                <?=$title;?> segera mungkin agar pengguna dapat melakukan pengajuan rekomendasi
            </p>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Lakukan Validasi Perusahaan
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="alert alert-warning alert-has-icon">
                                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                        <div class="alert-body">
                                            <div class="alert-title">Sebelum Melakukan Validasi</div>
                                            Pastikan memilih perusahaan yang tepat,
                                            perhatikan perusahaan yang mungkin saja ganda
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-12">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="perusahaan">Nama Pemohon</label>
                                        <div class="text-primary"><?= $data->created_by;?></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="perusahaan">Nama Perusahaan</label>
                                        <div class="text-danger"><strong><?= $data->nama_perusahaan;?></strong></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="perusahaan">Hp Perusahaan</label>
                                        <div class="text-primary"><?= $data->hp_perusahaan;?></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="perusahaan">Dibuat Tanggal</label>
                                        <div class="text-primary"><?= $data->created_at;?></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="perusahaan">Alamat</label>
                                        <div class="text-primary"><?= $data->alamat_perusahaan;?></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <form action="<?= base_url();?>admin-pemohon/validasi_pemohon" method="POST">
                                        <div class="form-group">
                                            <label>Perusahaan</label>
                                            <select class="form-control select2" name="id_perusahaan"
                                                style="width: 100%;" required>
                                                <option value='' selected disabled>-- Pilih Perusahaan --</option>
                                                <?php foreach($perusahaan as $key => $value) :?>
                                                <option value="<?= $value->id_perusahaan;?>">
                                                <?= $value->nama_perusahaan;?> 
                                                </option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="created_by" value="<?= $data->created_by;?>">
                                            <button class="btn btn-success" type="submit">Validasi</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
</div>
<?php $this->load->view('_partials/js'); ?>

<!--end script google map-->