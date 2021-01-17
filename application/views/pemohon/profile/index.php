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
            <h2 class="section-title">Hi,
                <?php echo ucwords(strtolower($data->nama)); ?>
            </h2>
            <p class="section-lead">
                Rubah informasi anda pada form dibawah ini.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">

                        <form method="post" method="post" action="">
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <?php if (validation_errors()): ?>
                                    <div class="alert alert-danger alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                                <span>×</span>
                                            </button>
                                            <?php echo validation_errors('<p>', '</p>'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if ($message = $this->session->flashdata('message_profile')): ?>
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
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Lengkap</label>
                                        <input type="text" id="nama" name="nama" class="form-control"
                                               value="<?= $data->nama ?>">
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>No. Telepon</label>
                                        <input type="tel" id="telp" name="telp" class="form-control"
                                               value="<?= $data->telepon; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                               value="<?= $data->email; ?>">
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Password</label> * <label class="text-danger"> Kosongkan jika tidak diganti </label>
                                        <input type="password" name="password"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Perusahaan</label>
                                        <select class="form-control select2" name="nama_perusahaan" id="nama_perusahaan"
                                                required>
                                            <option value="" selected>--- Pilih Perusahaan ---</option>
                                            <?php foreach ($perusahaan as $item) : ?>
                                                <option value="<?= $item['nama_perusahaan']; ?>"><?= $item['nama_perusahaan']; ?></option>
                                            <?php endforeach; ?>
                                            <option value="lainnya">Lainnya</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Alamat Perusahan</label>
                                        <textarea class="form-control summernote-simple" id="alamat_perusahaan"
                                                  name="alamat_perusahaan"><?php echo $data->alamat_perusahaan; ?></textarea>
                                    </div>
                                </div>


                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" name="submit-information" value="true">Save Changes
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

