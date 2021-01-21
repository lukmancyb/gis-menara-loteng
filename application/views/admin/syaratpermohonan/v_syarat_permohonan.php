<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!--script google map-->

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
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
            <?php if ($message = $this->session->flashdata('message_syarat')): ?>
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
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            List data syarat permohonan izin rekomendasi menara
                        </div>
                        <div class="card-body">
                            <table class="table" id="example1">
                                <thead>
                                <th>No</th>
                                <th>Syarat</th>
                                <th>Slug</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                <?php foreach ($syarat as $key => $value) : ?>
                                    <tr>
                                        <td><?= $key + 1; ?></td>
                                        <td width="40%"><?= $value->nama; ?></td>
                                        <td><?= $value->slug; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('syarat/edit/' . $value->id); ?>"
                                               style="color:white" class="btn btn-warning" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Edit"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="<?php echo base_url('syarat/delete/' . $value->id); ?>"
                                               class="btn btn-danger" id="koordinat_hapus" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Hapus"><i
                                                        class="fas fa-times"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <form action="<?= base_url('syarat/add'); ?>" method="post">
                        <div class="card">
                            <div class="card-header">
                                Tambah Data Syarat
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="nama">Nama Syarat</label>
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="nama">Slug</label>
                                        <input type="text" name="slug" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit" name="submit-information" value="true">
                                    Tambah Data
                                </button>
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
