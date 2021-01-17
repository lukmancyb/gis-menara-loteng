<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Google Maps</a></div>
        <div class="breadcrumb-item">Marker</div>
      </div>
    </div>

    <div class="section-body">
      <!-- <h2 class="section-title">Gis Tower</h2>
      <p class="section-lead">
        Data Tower Jaringan seluler di Kabupaten Lombok Tengah, NTB.
      </p> -->

      <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Menara Telekomunikasi</h4>
                  </div>
                  <div class="card-body">
                    <?=$jml_menara_seluler;?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Menara Bakti</h4>
                  </div>
                  <div class="card-body">
                  <?=$jml_menara_bakti;?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Area Blankspot</h4>
                  </div>
                  <div class="card-body">
                  <?=$jml_area_blankspot;?>
                  </div>
                </div>
              </div>
            </div> 
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Perusahaan</h4>
                  </div>
                  <div class="card-body">
                  <?=$jml_perusahaan;?>
                  </div>
                </div>
              </div>
            </div>                 
          </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div id="chart_perusahaan"></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div id="chart_kecamatan"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div id="map" data-height="550"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</section>
</div>
<?php $this->load->view('_partials/footer'); ?>
<?php $this->load->view('_partials/js'); ?>
<?php $this->load->view('_partials/initmap'); ?>
<script>
  var chart = AmCharts.makeChart("chart_perusahaan", {
    "type": "serial",
    "theme": "none",
    "marginRight": 70,
    "titles": [{
            "text": "Grafik Jumlah Menara Telekomunikasi Berdasarkan Perusahaan",
            "size": 16
        }],
    "dataProvider": <?=$statistik_perusahaan;?>,
    "startDuration": 1,
    "graphs": [{
      "balloonText": "<b>[[category]]: [[value]]</b>",
      "fillColorsField": "color",
      "fillAlphas": 0.9,
      "lineAlpha": 0.2,
      "type": "column",
      "labelText": "[[value]]",
      "valueField": "jml_menara_seluler"
    }],
    "chartCursor": {
      "categoryBalloonEnabled": false,
      "cursorAlpha": 0,
      "zoomable": false
    },
    "categoryField": "nama_perusahaan",
    "categoryAxis": {
      "gridPosition": "start",
      "labelRotation": 45
    },
    "export": {
      "enabled": true
    }

  });

  var chart = AmCharts.makeChart("chart_kecamatan", {
    "type": "serial",
    "theme": "none",
    "marginRight": 70,
    "titles": [{
            "text": "Grafik Jumlah Menara Telekomunikasi Berdasarkan Kecamatan",
            "size": 16
        }],
    "dataProvider": <?=$statistik_kec;?>,
    "startDuration": 1,
    "graphs": [{
      "balloonText": "<b>[[category]]: [[value]]</b>",
      "fillColorsField": "color",
      "fillAlphas": 0.9,
      "lineAlpha": 0.2,
      "type": "column",
      "labelText": "[[value]]",
      "valueField": "jml_menara_seluler"
    }],
    "chartCursor": {
      "categoryBalloonEnabled": false,
      "cursorAlpha": 0,
      "zoomable": false
    },
    "categoryField": "nama_kecamatan",
    "categoryAxis": {
      "gridPosition": "start",
      "labelRotation": 45
    },
    "export": {
      "enabled": true
    }

  });

  
</script>
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
        url: base_url + 'dashboard/data_all',
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
        icon: iconBase + 'antenna-41.png',
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