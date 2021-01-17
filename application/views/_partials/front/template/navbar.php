<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
  <div class="container">
    <a href="<?=base_url();?>frontend" class="navbar-brand">
      <img src="<?= base_url(); ?>assets/res/dist/img/logo.png" alt=" " class="brand-image img-circle elevation-3"
        style="opacity: .8">
      <span class="brand-text font-weight-light"><b>GIS MENARA</b></span>
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <!-- PENCARIAN MENARA -->
        <!-- <form class="form-inline ml-0 ml-md-3" method="get">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="text" name="q"
              value="<?php echo $this->input->get('q') ?>" class="form-control col-sm-6" id="place-input"
              placeholder="Search" aria-label="Search">

            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form> -->
        <li class="nav-item">
          <a href="<?= base_url(); ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('rekomendasi'); ?>" class="nav-link">Rekomendasi Menara</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('auth/login'); ?>" class="nav-link">Login</a>
        </li>


      </ul>

    </div>

    <!-- Right navbar links -->
    <!-- <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
              class="fas fa-th-large"></i></a>
        </li>
      </ul> -->
  </div>
</nav>
<!-- /.navbar