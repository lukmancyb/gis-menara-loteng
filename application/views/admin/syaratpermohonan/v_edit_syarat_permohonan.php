<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!--script google map-->

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= isset($title) ? $title : "Syarat Pengajuan"; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><?= $this->uri->segment(1); ?></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title"><?= $title; ?></h2>
            <p class="section-lead">
                <?= $title; ?> di Kabupaten Lombok Tengah, NTB.
            </p>

            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <form action="<?= base_url('syarat/update');?>" method="post">
                    <div class="card">
                        <div class="card-header">
                            Tambah Data Syarat
                        </div>

                        <div class="card-body">
                            <?php if($message = $this->session->flashdata('message_syarat')): ?>
                                <div class="alert <?php echo ($message['status']) ? 'alert-success' : 'alert-danger'; ?> alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                            <span>×</span>
                                        </button>
                                        <?php echo $message['message']; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                               <div class="row">
                                   <div class="form-group col-12">
                                       <label for="nama">Nama Syarat</label>
                                       <input type="hidden" name="id" class="form-control" value="<?= $data->id;?>" readonly>
                                       <input type="text" name="nama" class="form-control" value="<?= $data->nama;?>" required>
                                   </div>
                                   <div class="form-group col-12">
                                       <label for="nama">Slug</label>
                                       <input type="text" name="slug" class="form-control" value="<?= $data->slug;?>" required>
                                   </div>
                               </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary" type="submit" name="submit-information" value="true">Update Data</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <section>
</div>
<?php $this->load->view('_partials/footer'); ?>
<?php $this->load->view('_partials/js'); ?>
