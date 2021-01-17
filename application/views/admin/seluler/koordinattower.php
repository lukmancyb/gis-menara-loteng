<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
          <div class="section-header">
            <h1><?=$title;?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url();?>">Dashboard</a></div>
              <div class="breadcrumb-item">Map</div>
            </div>
          </div>

          <div class="section-body">
            <!-- <h2 class="section-title">Gis Tower</h2>
            <p class="section-lead">
              Data Tower Jaringan seluler di Kabupaten Lombok Tengah, NTB.
            </p> -->

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div id="map" data-height="750"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
        </section>
      </div>
<?php $this->load->view('_partials/js'); ?>
<script>
var iconBase =
    '<?php echo base_url("assets/img/marker/") ?>';
// initialize map
var map = new GMaps({
  type: 'info',
  div: '#map',
  lat: -8.7023391,
  lng: 116.2059599,
  mapTypeId : google.maps.MapTypeId.ROADMAP,
  zoom: 10
});

// Added markers to the map
<?php
  foreach($datatower->result() as $d){
    $lat = $d->latitude;
    $long = $d->longitude;
    $alamat = $d->alamat_tower;
    $namaperusahaan = $d->id_perusahaan;
    $site = $d->nama_site;
    $tinggi = $d->tinggi_menara;
?>

map.addMarker({
  icon: iconBase + 'antenna-41.png',
  lat: <?php echo $lat;?>,
  lng: <?php echo $long;?>,
  title: '<?php echo $site;?>',
  infoWindow: {
    content: '<h6><?php echo $namaperusahaan;?></h6>Nama Site : <?php echo $site;?><br>Alamat : <?php echo $alamat;?><br>Tinggi Menara : <?php echo $tinggi;?>M'
  }
});

<?php
}
?>
</script>