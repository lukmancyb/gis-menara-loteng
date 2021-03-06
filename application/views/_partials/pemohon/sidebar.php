<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>pemohon/dashboard">GIS Jaringan</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>pemohon/dashboard">GIS</a>
        </div>


        <ul class="sidebar-menu">
            <li class="menu-header">Home</li>
            <li class="<?php echo $this->uri->uri_string() == 'pemohon/dashboard' ? 'active' : ''; ?>">
                <a href="<?php echo base_url(); ?>pemohon/dashboard"><i class="fas fa-th-large"></i> <span>Home</span></a>
            </li>
            <li class="<?php echo $this->uri->uri_string() == 'pemohon/pengajuan' ||
            $this->uri->uri_string() == 'pemohon/pengajuan/add'   ? 'active' : ''; ?>">
                <a href="<?php echo base_url(); ?>pemohon/pengajuan"><i class="fas fa-file"></i> <span>Pengajuan</span></a>
            </li>
            <li class="menu-header">Menu Pengguna</li>
            <li class="<?php echo $this->uri->uri_string() == 'pemohon/profile' || $this->uri->uri_string() ==  'pemohon/profile/register_perusahaan' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url(); ?>pemohon/profile"><i class="fas fa-info"></i>
                    <span>Profil</span></a>
            </li>
            <li>
                <a class="nav-link" href="<?php echo base_url(); ?>auth/logout"><i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
        </ul>
    </aside>
</div>