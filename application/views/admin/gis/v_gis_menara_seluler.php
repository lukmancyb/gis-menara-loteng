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
<?php $this->load->view('_partials/initmap'); ?>
<script>
  var base_url = '<?= base_url() ?>';
  var iconBase = '<?php echo base_url("assets/img/marker/") ?>';
  var marker_bakti = [];
  var map;
  $(document).ready(function() {
      fetch_all();      
  });
  // initialize map
  function initMap() {
      var location = {
        lat: -8.685107,
        lng: 116.3362384
      };
      map = new google.maps.Map(
        document.getElementById('map'), {
          zoom: 10.5,
          center: location,
          fullscreenControl: false,
          mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            position: google.maps.ControlPosition.BOTTOM_CENTER
          },
          zoomControl: true,
          zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_BOTTOM
          },
          scaleControl: true,
          streetViewControl: true,
          streetViewControlOptions: {
            position: google.maps.ControlPosition.LEFT_BOTTOM
          },
        });

      /*var markerCluster = new MarkerClusterer(map, markers);*/
    }
    //Ambil data perusahaan dari ajax
    function fetch_all() {
      $.ajax({
        url: base_url + 'gis/data_seluler',
        dataType: 'json',
        type: 'get',
        success: function(data, status) {
          console.log(data)
          if (data.success) {
            var alldata = data.data;
            for (item in alldata) {
              addMarker(alldata[item])

            }
          } else {
            // console.log("data tidak ada")
            showAlert("Data tidak ditemukan", "warning", "Info", 2000);
          }
        }
      })
    }
    var currWindow = false;
    // Added markers to the map
    function addMarker(data) {

      var content =

        `<div class="col-12">
              <a href="<?= base_url(); ?>assets/img/news/img12.jpg" target="blank">
                <img src="<?= base_url(); ?>assets/img/news/img12.jpg" width="100px">
              <a>
              <h5>${data.nama_perusahaan}</h5>
                <small>${data.alamat}</small><br>
                <small>${data.nama_desa}, ${data.nama_kecamatan}</small>
                <p></p>
                <a href="#" class="btn btn-primary">Get Route</a>
            </div>
          </article>
        </div>`
      var infowindow = new google.maps.InfoWindow({
        content: content
      });
      var marker = new google.maps.Marker({
        icon: iconBase + 'seluler.png',
        position: {
          lat: parseFloat(data.latitude),
          lng: parseFloat(data.longitude)
        },
        map: map,
        id: data.id_menara_bakti,
      });

      marker.addListener('click', function() {
        if (currWindow) {
          currWindow.close();
        }
        currWindow = infowindow
        infowindow.open(map, marker);
      });
      marker_bakti.push(marker);

    }
  

  

  
</script>