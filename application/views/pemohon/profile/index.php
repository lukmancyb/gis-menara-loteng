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
            <?php if ($message = $this->session->flashdata('perusahaan_add')): ?>
                <div class="alert <?php echo $message['status'] ? 'alert-success' : 'alert-danger'; ?> alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        <?php echo $message['msg']; ?>
                        <?php $this->session->unset_userdata('perusahaan_add'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row mt-sm-4">
                <div class="col-md-12 col-lg-6">
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
                                        <input type="disa" id="username" name="username" class="form-control" value="<?= $data->username;?>" disabled readonly>
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
                <?php if ($data->id_perusahaan == 0) : ?>
                    <?php if ($is_company_registered > 0) : ?>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Data Perusahaan</h4>
                                </div>
                                <div class="card-body">

                                    <div class="alert alert-warning alert-dismissible show fade">
                                        <div class="alert-body">
                                            Anda sudah melakukan registrasi data perusahaan , mohon menunggu proses
                                            validasi
                                            oleh admin, Terima kasih
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <form method="post" action="<?= base_url('pemohon/profile/index'); ?>">
                                    <div class="card-header">
                                        <h4>Data Perusahaan</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-danger alert-dismissible show fade">
                                            <div class="alert-body">
                                                Mohon melengkapi data perusahaan untuk dapat melakukan proses pengajuan
                                                izin .
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label>Nama Perusahaan</label>
                                                <input type="text" name="nama_perusahaan"
                                                       value="<?= set_value('nama_perusahaan'); ?>"
                                                       class="form-control">
                                                <div class="text-danger mb-2">
                                                    <?php echo form_error('nama_perusahaan'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>Nomor Telepon Perusahaan</label>
                                                <input type="number" name="hp_perusahaan"
                                                       value="<?= set_value('hp_perusahaan'); ?>" class="form-control">
                                                <div class="text-danger mb-2">
                                                    <?php echo form_error('hp_perusahaan'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-12">
                                                <label>Alamat Perusahaan</label>
                                                <textarea name="alamat_perusahaan"
                                                          value="<?= set_value('alamat_perusahaan'); ?>"
                                                          class="form-control"
                                                ></textarea>
                                                <div class="text-danger mb-2">
                                                    <?php echo form_error('alamat_perusahaan'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" name="submit" id="submit" value="submit_perusahaan"
                                                class="btn btn-warning btn-lg">
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

            </div>
        </div>
    </section>
</div>
<?php $this->load->view('_partials/pemohon/footer'); ?>
<?php $this->load->view('_partials/pemohon/js'); ?>

