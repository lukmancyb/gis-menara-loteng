  <!-- Header -->
  <?php $this->load->view('_partials/front/template/header'); ?>
  <!-- /.Header -->

  <!-- Navbar -->
  <?php $this->load->view('_partials/front/template/navbar'); ?>
  <!-- /.navbar -->
  <!-- <form method="get">
          <div class="form-group">
            <input type="text" name="q" value="<?php echo $this->input->get('q') ?>" class="form-control col-sm-6" id="place-input">
          </div>
        </form> -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="container-fluid top20px">
      <div class="row">
        <div class="col-md-12">
          <div id="map"></div>

          <a class="float" data-toggle="collapse" data-target="#collapse_utama" href="#" role="button" data-placement="left" title="MENU UTAMA">
            <i class="fa fa-bars my-float"></i>
          </a>
          <a class="delete" role="button" href="#" id="hapusMarker" data-toggle="tooltip" data-placement="left" title="HAPUS MARKERS">
            <i class="fa fa-trash my-float"></i>
          </a>
          <div id="collapse_utama" class="panel-collapse collapse show" style="position: absolute; top: 80px; right: 0px;width: 332px;
           overflow-x: hidden; max-height: calc(100% - 110px); overflow-y: scroll;">
            <div class="accordion" id="accordionExample">
              <ul class="list-group">

                <li class="list-group-item" data-toggle="collapse" data-target="#colapse-menara"><i class="fa fa-building"></i><strong> MENARA TELEKOMUNIKASI</strong> </li>
                <div id="colapse-menara" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="form-check" style="margin-left: 15px;">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input menara_check" id="semua" value="all"> SEMUA
                        </label>
                      </div>
                    </li>
                    <li class="list-group-item" data-toggle="collapse" data-target="#colapse-perusahaan"><i class="fa fa-arrow-left" style="margin-left:15px"></i> Berdasarkan Perusahaan</li>
                    <div id="colapse-perusahaan" class="card-body" style="background: #ffffff">
                      <?php foreach ($perusahaan->result() as $item) : ?>
                        <div class="form-check" style="margin-left:35px">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input menara_check" id="perusahaan" value="<?= $item->id_perusahaan; ?>"> <small><?= $item->nama_perusahaan; ?> <strong> [<?= $this->db->get_where('tbl_menara_seluler', array('id_perusahaan' => $item->id_perusahaan))->num_rows(); ?>]</strong></small>
                          </label>
                        </div>
                      <?php endforeach; ?>
                    </div>
                    <li class="list-group-item" data-toggle="collapse" data-target="#colapse-kecamatan"><i class="fa fa-arrow-left" style="margin-left:15px"></i> Berdasarkan Kecamatan</li>
                    <div id="colapse-kecamatan" class="card-body" style="background: #ffffff">
                      <?php foreach ($kecamatan->result() as $item) : ?>
                        <div class="form-check" style="margin-left: 35px;">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input menara_check" id="kecamatan" value="<?= $item->id_kecamatan; ?>"> <?= $item->nama_kecamatan; ?> <strong> [<?= $this->db->get_where('tbl_menara_seluler', array('id_kecamatan' => $item->id_kecamatan))->num_rows(); ?>]</strong>
                          </label>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  </ul>
                </div>
                <li class="list-group-item" data-toggle="collapse" data-target="#colapse-bakti"><i class="fa fa-university"></i><strong> MENARA BANTUAN BAKTI</strong> </li>
                <div id="colapse-bakti" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <ul class="list-group">
                    <div class="card-body" style="background: #ffffff">
                      <?php
                      foreach ($men_bakti->result() as $item) : ?>
                        <div class="form-check" style="margin-left:35px">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input bakti_check" id="bakti" value="<?= $item->kategori; ?>">
                              <small>
                              <?php 
                                if ($item->kategori == 1) {
                                  echo "Sekolah";
                                } else {
                                  echo "Desa";
                                }
                              ?>
                              </small>
                          </label>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  </ul>
                </div>
                <li class="list-group-item" data-toggle="collapse" data-target="#colapse-blank"><i class="fa fa-wifi"></i><strong> AREA BLANKSPOT</strong> </li>
                <div id="colapse-blank" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="form-check" style="margin-left: 15px;">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input menara_blank" id="all_blank" value="all"> Area Blankspot
                        </label>
                      </div>
                    </li>
                  </ul>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php $this->load->view('_partials/front/template/footer'); ?>
    <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFY_kt0xcpNKV9a9Z6dvim9HWQ8aPYslg&callback=initMap&libraries=&v=weekly" defer></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?libraries=places,geometry,visualization,weather&sensor=true&language=id-ID&key=AIzaSyDBxF6NnfC8OuhM0lSUs85SEZ03tx6Xs2o" defer></script> -->

    <script>
      var base_url = '<?= base_url() ?>';
      var iconBase =
        '<?php echo base_url("assets/img/marker/") ?>';
      var map;
      var marker_seluler = [];
      var marker_bakti = [];
      var marker_blankspot = [];
      $(function() {
        $('.delete').tooltip()
        $('.float').tooltip()
      })
      $(document).ready(function() {

        $('#hapusMarker').click(function() {
          deleteMarkerSeluler();
          deleteMarkerBakti();
          deleteMarkerBlankspot();
          $('input:checkbox').prop('checked', false);

        })

        // ### FUNGSI CEK MENARA BAKTI#

        $('.menara_blank').change(function() {
          console.log(this.checked);
          if (this.checked) {
            fetch_data_blankspot();
          } else {
            deleteMarkerBlankspot()

          }
        })

        $('.bakti_check').click(function() {
          var bakti = get_filter_text('bakti');
          console.log(bakti);
          if (bakti.length != 0) {
            fetch_data_menara_bakti(bakti);
            showMarkerBakti(map)
          } else {
            console.log('bace else')
            deleteMarkerBakti();
          }
        })


        $('#semua').click(function() {
          $('#semua' + ':checked').each(function() {
            if (this.value == "all") {
              var perusahaan = get_filter_text('perusahaan');
              var kecamatan = get_filter_text('kecamatan');
              fetch_data_menara(perusahaan, kecamatan);
              showMarkerSeluler(map)

            } else {
              deleteMarkerSeluler();
            }
            console.log(this.value)
          })

        })

        $('.menara_check').click(function() {
          var perusahaan = get_filter_text('perusahaan');
          var kecamatan = get_filter_text('kecamatan');

          if (perusahaan.length != 0 || kecamatan.length != 0) {
            fetch_data_menara(perusahaan, kecamatan);
            showMarkerSeluler(map)

          } else {
            deleteMarkerSeluler();
          }
        })

        function get_filter_text(text_id) {
          var filterData = [];
          $('#' + text_id + ':checked').each(function() {
            filterData.push($(this).val())

          })
          return filterData
        }
      })

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


      /**############ AJAX CALL ###########**/

      function fetch_data_menara_bakti(kategori) {
        console.log(kategori)
        $.ajax({
          url: base_url + 'frontend/get_data_bakti',
          dataType: 'json',
          type: 'POST',
          data: {
            category: kategori
          },
          success: function(data, status) {
            if (data.success) {
              // console.log(data)
              deleteMarkerBakti();
              var alldata = data.data;
              for (item in alldata) {
                addMarkerBakti(alldata[item])

              }
            } else {
              // console.log("data tidak ada")
              showAlert("Data tidak ditemukan", "warning", "Info", 2000);
            }
          }
        })
      }

      function fetch_data_blankspot() {
        $.ajax({
          url: base_url + 'frontend/get_data_blankspot',
          dataType: 'json',
          type: 'GET',
          success: function(data, status) {
            if (data.success) {
              // console.log(data)
              deleteMarkerBlankspot();
              var alldata = data.data;
              for (item in alldata) {
                addMarkerBlankspot(alldata[item])

              }
            } else {
              // console.log("data tidak ada")
              showAlert("Data tidak ditemukan", "warning", "Info", 2000);
            }
          }
        })
      }


      function fetch_data_menara(data_perusahaan, data_kecamatan) {
        console.log(data_perusahaan)

        $.ajax({
          url: base_url + 'frontend/get_data_tower',
          dataType: 'json',
          type: 'POST',
          data: {
            perusahaan: data_perusahaan,
            kecamatan: data_kecamatan
          },

          success: function(data, status) {

            if (data.success) {
              deleteMarkerSeluler();
              var alldata = data.data;
              for (item in alldata) {
                addMarkerSeluler(alldata[item])

              }
            } else {
              deleteMarkerSeluler();
              // console.log("data tidak ada")
              showAlert("Data tidak ditemukan", "warning", "Info", 2000);
            }
          }
        })
      }
      /**############ END FUNGSI CHECKBOX  ###########**/

      /**############ FUNGSI MARKERS  ###########**/
      var currWindow = false;

      function addMarkerSeluler(data) {

        var content =

          `<div class="col-12">
              <a href="<?= base_url(); ?>assets/img/news/img12.jpg" target="blank">
                <img src="<?= base_url(); ?>assets/img/news/img12.jpg" width="100px">
              <a>
              <h5>${data.nama_site}</h5>
                <small>${data.nama_perusahaan}</small><br>
                <small>${data.nama_desa}, ${data.nama_kecamatan}</small>
                <p></p>
                <a href="https://www.google.com/maps/dir/?api=1&destination=${data.latitude},${data.longitude}" target="blank" class="btn btn-primary">Lihat Rute</a>
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
          id: data.id_perusahaan
        });

        marker.addListener('click', function() {
          if (currWindow) {
            currWindow.close();
          }
          currWindow = infowindow
          infowindow.open(map, marker);
        });
        marker_seluler.push(marker);

      }

      function addMarkerBakti(data) {

        var content =

          `<div class="col-12">
                <a href="<?= base_url(); ?>assets/img/news/img12.jpg" target="blank">
                  <img src="<?= base_url(); ?>assets/img/news/img12.jpg" width="100px">
                <a>
                <h5>${data.nama_site_lokasi}</h5>
                  <small>${data.nama_desa}, ${data.nama_kecamatan}</small>
                  <p></p>
                  <a href="https://www.google.com/maps/dir/?api=1&destination=${data.latitude},${data.longitude}" target="blank" class="btn btn-primary">Lihat Rute</a>
              </div>
            </article>
          </div>`
        var infowindow = new google.maps.InfoWindow({
          content: content
        });
        var marker = new google.maps.Marker({
          icon: iconBase + 'bakti2.png',
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

      function addMarkerBlankspot(data) {

        var content =

          `<div class="col-12">
          <a href="<?= base_url(); ?>assets/img/news/img12.jpg" target="blank">
          <img src="<?= base_url(); ?>assets/img/news/img12.jpg" width="100px">
          <a>
          <h5>${data.lokasi}</h5>
          <small>${data.tahun}</small><br>
          <small>${data.nama_desa}, ${data.nama_kecamatan}</small>
          <p></p>
          <a href="https://www.google.com/maps/dir/?api=1&destination=${data.latitude},${data.longitude}" target="blank" class="btn btn-primary">Lihat Rute</a>
          </div>
          </article>
          </div>`
        var infowindow = new google.maps.InfoWindow({
          content: content
        });
        var marker = new google.maps.Marker({
          icon: iconBase + 'blankspot.png',
          position: {
            lat: parseFloat(data.latitude),
            lng: parseFloat(data.longitude)
          },
          map: map,
        });

        marker.addListener('click', function() {
          if (currWindow) {
            currWindow.close();
          }
          currWindow = infowindow
          infowindow.open(map, marker);
        });
        marker_blankspot.push(marker);

      }


      function showMarkerSeluler() {
        setMapOnAll(map, marker_seluler);
      }

      function deleteMarkerSeluler() {
        setMapOnAll(null, marker_seluler);
        marker_seluler = [];
      }

      function showMarkerBakti() {
        setMapOnAll(map, marker_bakti);
      }

      function deleteMarkerBakti() {
        setMapOnAll(null, marker_bakti);
        marker_bakti = [];

      }

      function deleteMarkerBlankspot() {
        setMapOnAll(null, marker_blankspot);
        marker_blankspot = [];

      }


      function setMapOnAll(map, type) {
        for (var i = 0; i < type.length; i++) {
          type[i].setMap(map);
        }
      }

      /**############ END FUNGSI MARKERS  ###########**/
    </script>
    <!-- /.footer -->