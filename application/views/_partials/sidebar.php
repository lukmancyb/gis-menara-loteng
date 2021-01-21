<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>">GIS Jaringan</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>">GIS</a>
        </div>


        <ul class="sidebar-menu">
            <?php if ($this->session->userdata('level') === 'user') : ?>
                <li class="menu-header">Data Menara</li>

                <li class="<?php echo $this->uri->uri_string() == 'tower' ? 'active' : ''; ?>">
                    <a href="<?php echo base_url(); ?>tower"><i class="fas fa-th-large"></i> <span>Menara Seluler</span></a>
                </li>
            <?php else : ?>
                <li class="<?php echo $this->uri->uri_string() == 'dashboard' || $this->uri->uri_string() == '' ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo base_url(); ?>dashboard"><i class="fas fa-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="menu-header">Data Menara</li>

                <li class="<?php echo $this->uri->uri_string() == 'tower' ? 'active' : ''; ?>">
                    <a href="<?php echo base_url(); ?>tower"><i class="fas fa-th-large"></i> <span>Menara Seluler</span></a>
                </li>

                <!-- BANTUAN BAKTI -->
                <li class="<?php echo $this->uri->uri_string() == 'bakti' ? 'active' : ''; ?>">
                    <a href="<?php echo base_url(); ?>bakti"><i class="fas fa-broadcast-tower"></i>
                        <span> Bantuan Bakti</span></a>
                </li>
                <li class="">
                    <a href="<?php echo base_url(); ?>blankspot"><i class="fas fa-exclamation-triangle"></i> <span> Blankspot Area</span></a>
                </li>
                <!-- END BANTUAN BAKTI -->

                <!--  BLANK SPOT -->

                <!-- END BLANK SPOT -->

                <!-- <li class="<?php echo $this->uri->uri_string() == 'tower/koordinat' ? 'active' : ''; ?>">
        <a href="<?php echo base_url(); ?>tower/koordinat"><i class="fas fa-map-marker-alt"></i> <span> Map</span></a>
      </li> -->

                <li class="menu-header">Peta Sebaran Menara (GIS)</li>
                <li class="<?php echo $this->uri->uri_string() == 'gis/menara-seluler' || $this->uri->uri_string() == 'gis/menara-bakti' || $this->uri->uri_string() == 'gis/area-blankspot' ? 'dropdown active' : ''; ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                class="fas fa-map-marker-alt"></i>
                        <span>Peta / GIS</span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo $this->uri->uri_string() == 'gis/menara-seluler' ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>gis/menara-seluler">Menara Seluler</a>
                        </li>
                        <li class="<?php echo $this->uri->uri_string() == 'gis/menara-bakti' ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>gis/menara-bakti">Menara BAKTI</a>
                        </li>
                        <li class="<?php echo $this->uri->uri_string() == 'gis/area-blankspot' ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>gis/area-blankspot">Area Blankspot</a>
                        </li>
                    </ul>
                </li>


                <li class="menu-header">Menu Izin Menara</li>
                <li class="<?php echo $this->uri->uri_string() == 'izin-menara' ? 'active' : ''; ?>">
                    <a href="<?php echo base_url(); ?>izin-menara"><i class="fas fa-columns"></i>
                        <span>Data Izin Menara</span></a>
                </li>
                <!-- <li class="<?php echo $this->uri->uri_string() == 'izinmenara' ? 'dropdown active' : ''; ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Daftar Izin</span></a>
        <ul class="dropdown-menu">
          
        </ul>
      </li> -->
                <li class="menu-header">Menu Master</li>
                <li class="<?php echo $this->uri->uri_string() == 'perusahaan' || $this->uri->uri_string() == 'syarat' ? 'active dropdown' : ''; ?>">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-database"></i> <span>Master</span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo $this->uri->uri_string() == 'syarat' ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>syarat">Data Syarat Permohoan</a>
                        </li>
                        <li class="<?php echo $this->uri->uri_string() == 'perusahaan' ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>perusahaan">Data Perusahaan</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-header">Cetak Laporan</li>
                <li class="<?php echo $this->uri->uri_string() == 'tower/cetak' ? 'dropdown active' : ''; ?>">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-print"></i> <span>Laporan</span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo $this->uri->uri_string() == 'tower/cetak' ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>tower/cetak">Cetak Menara Seluler</a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>


            <li class="menu-header">Menu Keluar</li>
            <li>
                <a class="nav-link" href="<?php echo base_url(); ?>auth/logout"><i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
        </ul>
    </aside>
</div>