<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <!-- <img src="<?php echo base_url(); ?>assets/img/" alt="logo" width="100" > -->
            </div>

            <div class="card card-primary">
              <h1 style="text-align: center">Masuk</h1>
              <h6 style="text-align: center">Halaman Login</h6>
              <?php if(validation_errors()): ?>
                <div class="alert alert-warning alert-dismissible show fade">
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                      <span>×</span>
                    </button>
                    <?php echo validation_errors('<p>', '</p>'); ?>
                  </div>
                </div>
              <?php endif; ?>
                <?php if($this->session->flashdata('message')): ?>
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            <?php echo $this->session->flashdata('message'); ?>
                            <?php  $this->session->unset_userdata('message'); ?>
                        </div>
                    </div>
                <?php endif; ?>
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

              <div class="card-body">
                <form method="post" id="login-form" action="<?php echo base_url('auth/login'); ?>">
                  <div class="form-group">
                    <label class="control-label">Nama Pengguna / Email</label>
                    <input id="username" type="text" class="form-control" name="username">
                  </div>

                  <div class="form-group">
                    <label class="control-label">Kata Sandi</label>
                    <input id="password" type="password" class="form-control" name="password">
                  </div>

                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> -->
                    <div class="form-group">
                        Belum punya akun ? <a href="<?= base_url('auth/register'); ?>"> Daftar disini</a>
                    </div>

                  <div class="form-group">
                    <button type="submit" name="submit" id="submit" value="login" class="btn btn-primary btn-lg btn-block">
                      Masuk
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <!-- <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="<?php echo base_url(); ?>dist/auth_register">Create One</a>
            </div> -->
            <div class="simple-footer">
              Copyright &copy; 2019 Diskominfo Kab. Lombok Tengah
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php $this->load->view('_partials/js'); ?>