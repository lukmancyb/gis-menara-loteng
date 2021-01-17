<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
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
        <?php echo ucwords(strtolower($this->session->userdata('nama'))); ?>
      </h2>
      <p class="section-lead">
        Rubah informasi anda pada form dibawah ini.
      </p>

      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="post" id="basic-form" method="post" action="" enctype="multipart/form-data">
              <div class="card-header">
                <h4>Edit Profile</h4>
              </div>
              <div class="card-body">
                <?php if(validation_errors()): ?>
                <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                      <span>×</span>
                    </button>
                    <?php echo validation_errors('<p>', '</p>'); ?>
                  </div>
                </div>
                <?php endif; ?>
                <?php if($message = $this->session->flashdata('message_profile')): ?>
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
                    <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $this->session->userdata('nama'); ?>">
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label>No. Telepon</label>
                    <input type="tel" id="telp" name="telp" class="form-control" value="<?php echo $this->session->userdata('telp'); ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Avatar</label>
                    <input type="file" name='avatar' class="form-control">
                  </div>
                  <div class="form-group col-md-5 col-12">
                    <label>Password</label> * Kosongkan jika tidak diganti
                    <input type="password" id="konfirmasi_password" name="konfirmasi_password" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <label>Alamat</label>
                    <textarea class="form-control summernote-simple" id="alamat" name="alamat"><?php echo $this->session->userdata('alamat'); ?></textarea>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary" name="submit-information" value="true">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_partials/footer'); ?>