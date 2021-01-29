<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
    <body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <!-- <img src="<?php echo base_url(); ?>assets/img/" alt="logo" width="100" > -->
                        <?php if($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>×</span>
                                    </button>
                                    <?php echo $this->session->flashdata('error'); ?>
                                    <?php  $this->session->unset_userdata('error'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header "><h4>Registrasi Akun Baru</h4></div>
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url('auth/register'); ?>">
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="frist_name">Nama Lengkap</label>
                                        <input id="nama" type="text" class="form-control" name="nama"
                                               value="<?php echo set_value('nama'); ?>" autofocus required>
                                        <div class="text-danger mb-2">
                                            <?php echo form_error('nama'); ?>
                                        </div>

                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="email">Telepon</label>
                                        <input id="telepon" type="number" class="form-control" name="telepon"
                                               value="<?php echo set_value('telepon'); ?>" maxlength="15">
                                        <div class="text-danger mb-2">
                                            <?php echo form_error('telepon'); ?>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input id="username" type="email" class="form-control" name="username"
                                           value="<?php echo set_value('username'); ?>" required>
                                    <div class="text-danger mb-2">
                                        <?php echo form_error('username'); ?>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group  col-md-6 col-sm-12">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength"
                                               data-indicator="pwindicator" name="password" required>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                        <div class="text-danger mb-2">
                                            <?php echo form_error('password'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="passconf" class="d-block">Konfirmasi Password</label>
                                        <input id="passconf" type="password" class="form-control"
                                               name="passconf" required>
                                        <div class="text-danger mb-2">
                                            <?php echo form_error('passconf'); ?>
                                        </div>
                                    </div>


                                    <div class="form-group col-12">
                                        Sudah punya akun ? <a href="<?= base_url('auth/login'); ?>"> Login disini</a>
                                    </div>


                                    <div class="form-group col-12">
                                        <button type="submit" name="submit" id="submit" value="register"
                                                class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                    Copyright &copy; 2019 Diskominfo Kab. Lombok Tengah
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('_partials/js'); ?>