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
                        <form method="post" action="<?= base_url('pemohon/profile/update'); ?>">
                            <div class="card-header">
                                <h4>Data Pengguna</h4>
                            </div>
                            <div class="card-body">
                                <?php if ($this->session->flashdata('success_profile')): ?>
                                    <div class="alert alert-success alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                                <span>×</span>
                                            </button>
                                            <?php echo $this->session->flashdata('success_profile'); ?>
                                            <?php $this->session->unset_userdata('success_profile'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('error_profile')): ?>
                                    <div class="alert alert-danger alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                                <span>×</span>
                                            </button>
                                            <?php echo $this->session->flashdata('error_profile'); ?>
                                            <?php $this->session->unset_userdata('error_profile'); ?>
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
                                        <input type="telp" id="telp" name="telp" class="form-control"
                                               value="<?= $data->telp; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input type="email" id="username" name="username" class="form-control"
                                               value="<?= $data->username; ?>">
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Password</label> * <label class="text-danger"> Kosongkan jika tidak
                                            diganti </label>
                                        <input type="password" name="password"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" name="submit" id="submit"
                                        class="btn btn-primary btn-lg btn-block">
                                    Simpan Perubahan
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

