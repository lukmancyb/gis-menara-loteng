<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo isset($title) ? $title : "Gis"; ?> &mdash; Aplikasi GIS (Geogrphic Information System) Jaringan</title>

  <!-- General CSS Files -->
  <link rel="icon" type="image/png" href="<?= base_url(); ?>/favicon.png" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <!--index-->  

<!--bootstrap_modal-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/prism/prism.css">

<!--components_gallery-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/chocolat/dist/css/chocolat.css">

<!--components_user-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">

<!--forms_editor-->
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/codemirror/theme/duotone-dark.css">
  

<!--userdinas-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

<!--modules_ion_icons-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/ionicons/css/ionicons.min.css">

<!--modules_toastr-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/izitoast/css/iziToast.min.css">

<!--auth_login-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-social/bootstrap-social.css">

<!--auth_register-->
  

<!--features_profile-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-social/bootstrap-social.css">
  

<!--features_setting_detail-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/codemirror/theme/duotone-dark.css">

<!--features_tickets-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.css">
  


  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
  <script src="<?php echo base_url(); ?>assets/js/date_time.js"></script>
  <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
  <script src="https://www.amcharts.com/lib/3/serial.js"></script>
  <script src="https://www.amcharts.com/lib/3/pie.js"></script>
  <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <style>
    #chart_perusahaan {
        height	: 500px;
        font-size	: 11px;
    }
    #chart_kecamatan {
        height	: 500px;
        font-size	: 11px;
    }
    #odp {
        height	: 550px;
        font-size	: 11px;
    }
  </style>


</head>

<?php
if ($this->uri->segment(2) == "layout_transparent") {
  $this->load->view('_partials/layout-2');
  $this->load->view('_partials/sidebar-2');
}elseif ($this->uri->segment(2) == "layout_top_navigation") {
  $this->load->view('_partials/layout-3');
  $this->load->view('_partials/navbar');
}elseif ($this->uri->uri_string != "auth/login" && $this->uri->uri_string != "auth/register" && $this->uri->segment(2) != "auth_forgot_password"&& $this->uri->segment(2) != "auth_register" && $this->uri->segment(2) != "auth_reset_password" && $this->uri->segment(2) != "errors_503" && $this->uri->segment(2) != "errors_403" && $this->uri->segment(2) != "errors_404" && $this->uri->segment(2) != "errors_500" && $this->uri->segment(2) != "utilities_contact" && $this->uri->segment(2) != "utilities_subscribe") {
  $this->load->view('_partials/layout');
  $this->load->view('_partials/sidebar');
}
?>
