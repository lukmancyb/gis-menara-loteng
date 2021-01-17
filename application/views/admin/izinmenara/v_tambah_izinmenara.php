<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!--script google map-->

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><?= $this->uri->segment(1); ?></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title"><?= $title; ?></h2>
            <p class="section-lead">
                <?= $title; ?> di Kabupaten Lombok Tengah, NTB.
            </p>
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="card">
                        <div class="card-body" style="height:600px;" id="map-canvas">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="card">
                        <div class="card-header"><span class="fas fa-list"></span> Form Koordinat</div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" id="form-data-izin" novalidate>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="latitude">Latitude</label>
                                            <input type="text" class="form-control" name="latitude" id="latitude" required>
                                            <div class="invalid-feedback">
                                                Field tidak boleh kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="longitude">Longitude</label>
                                            <input type="text" class="form-control" name="longitude" id="longitude" required>
                                            <div class="invalid-feedback">
                                                Field tidak boleh kosong
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="namaperusahaan">Nama Perusahaan</label>
                                            <!-- <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan"> -->
                                            <select class="form-control select2" name="id_perusahaan" onchange="checkPerusahaan()" id="id_perusahaan" style="width: 100%;" required>
                                                <!-- <option>---</option> -->
                                            </select>
                                            <p id="msg_perusahaan" style="color:red;">Pilih Perusahaan terlebih dahulu</p>
                                            <div class="invalid-feedback">
                                                Field tidak boleh kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Pemohon</label>
                                            <input type="text" class="form-control" name="nama_pemohon" id="nama_pemohon" required>
                                            <div class="invalid-feedback">
                                                Field tidak boleh kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" name="nama_lokasi" id="nama_lokasi"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nomor Izin</label>
                                            <input type="text" class="form-control" name="no_izin" id="no_izin" required>
                                            <div class="invalid-feedback">
                                                Field tidak boleh kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Tanggal Mulai Izin</label>
                                            <input type="text" class="form-control datepicker" name="izin_mulai_tgl" id="izin_mulai_tgl">
                                            <!-- <input type="text" class="form-control" name="izin_mulai_tgl" id="izin_mulai_tgl"> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Tanggal Izin Berakhir</label>
                                            <input type="text" class="form-control datepicker" name="izin_akhir_tgl" id="izin_akhir_tgl">

                                            <!-- <input type="number" class="form-control" name="izin_akhir_tgl" id="izin_akhir_tgl"> -->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Tahun Permohonan</label>
                                            <input type="number" class="form-control" name="thn_permohonan" id="thn_permohonan">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="alamat">Luas Lahan (Are)</label>
                                            <input type="text" class="form-control" name="luas_lahan" id="luas_lahan">
                                        </div>
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan" id="keterangan">
                                        </div>
                                    </div>
                               
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-success" onclick="validasiForm('#form-data-izin', '#dom-ajax');" style="color:white"><i class="fas fa-save" style="color:white"></i> Simpan</a>
                                    <!-- <button  class="btn btn-info btn-sm" onclick="simpanDataTower('#form-data-tower', '#dom-ajax');" ><span class="fas fa-save"></span> Simpan</button> -->
                                    <button class="btn btn-info btn-sm" id="clearmap"><span class="fas fa-globe"></span> ClearMap</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
</div>
<?php $this->load->view('_partials/js'); ?>
<script>
    var forms = document.getElementsByClassName('needs-validation');
    $(document).ready(function() {
        /**
        Hide label pemberitahuan
         */
        $('#msg_perusahaan').hide();

        getDataPerusahaan();

    });

    function checkPerusahaan() {
        var id_perusahaan = $('#id_perusahaan option:selected').val();
        if (id_perusahaan == "") {
            $('#msg_perusahaan').show();
        } else {
            $('#msg_perusahaan').hide();

        }
    }


    //Fungsi ambil data perusahaan
    function getDataPerusahaan() {
        $.ajax({
            url: '<?php echo base_url(); ?>perusahaan/get_perusahaan',
            dataType: 'json',
            type: 'GET',
            success: function(data) {
                var html = '';
                html = '<option value="" required> -- Pilih -- </option>';
                for (item in data) {
                    html += '<option value="' + data[item].id_perusahaan + '">' + data[item].nama_perusahaan + '</option>';
                    // console.log(html);
                }
                $('#id_perusahaan').html(html);
            }
        });
    }

    function validasiForm(obj, res) {

        var id_perusahaan = $('#id_perusahaan option:selected').val();
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
            } else if (id_perusahaan == "") {
                $('#msg_perusahaan').show();
            } else {
                $('#msg_perusahaan').hide();
                var data = $(obj).serialize();
                simpanDataIzin(data)
            }
        });
    }


    // FUNGI SIMPAN DATA TOWER
    function simpanDataIzin(obj) {
        $.ajax({
            url: base_url + 'izinmenara/simpan_data_izin',
            method: "POST",
            data: obj,
            async: true,
            dataType: 'json',
            success: function(res) {
                var res = JSON.parse(JSON.stringify(res));
                // console.log(data);
                if (res.success) {
                    showAlert(res.msg, "success", "Info", 3000);
                    $(forms).trigger("reset");
                } else {
                    showAlert(data.msg, "warning", "Info", 0);
                }
            },
            error: function(err) {
                swal("Error", "Tidak bisa terhubung ke server", "warning");
            }
        });
    }




    $(document).on('click', '#clearmap', clearmap)
        // .on('click', '#simpandaftarkoordinattower', simpandaftarkoordinattower)
        .on('click', '#hapusmarkertower', hapusmarkertower)
        .on('click', '#viewmarkertower', viewmarkertower);
    var map;
    var markers = [];

    function initialize() {
        var mapOptions = {
            zoom: 14,
            // Center di kota praya
            center: new google.maps.LatLng(-8.6972643, 116.2798958)
        };

        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        // Add a listener for the click event
        google.maps.event.addListener(map, 'click', addLatLng);
        google.maps.event.addListener(map, "click", function(event) {
            var lat = event.latLng.lat();
            var lng = event.latLng.lng();
            $('#latitude').val(lat);
            $('#longitude').val(lng);
            //alert(lat +" dan "+lng);
        });
    }

    /**
     * Handles click events on a map, and adds a new point to the marker.
     * @param {google.maps.MouseEvent} event
     */
    function addLatLng(event) {
        var marker = new google.maps.Marker({
            position: event.latLng,
            draggable: true,
            title: 'Simple GIS',
            map: map
        });
        markers.push(marker);
    }
    //membersihkan peta dari marker
    function clearmap(e) {
        e.preventDefault();
        $('#latitude').val('');
        $('#longitude').val('');
        setMapOnAll(null);
    }
    //buat hapus marker
    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
        markers = [];
    }
    //end buat hapus marker

    function simpandaftarkoordinattower(e) {
        e.preventDefault();
        var datakoordinat = {
            'latitude': $('#latitude').val(),
            'longitude': $('#longitude').val(),
            'nama_site': $('#nama_site').val(),
            'nama_perusahaan': $('#nama_perusahaan').val(),
            'alamat_tower': $('#alamat_tower').val(),
            'tahun_kontrak': $('#tahun_kontrak').val(),
            'tahun_pembangunan': $('#tahun_pembangunan').val(),
            'luas_lahan': $('#luas_lahan').val(),
            'tinggi_menara': $('#tinggi_menara').val(),
            'imb': $('#imb').val(),
            'ijin_operasi': $('#ijin_operasi').val()

        };
        console.log(datakoordinat);
        $.ajax({
            url: '<?php echo base_url("tower/simpandaftarkoordinattower") ?>',
            dataType: 'json',
            data: datakoordinat,
            type: 'POST',
            success: function(data, status) {
                if (data.status != 'error') {
                    $('#daftarkoordinattower').load('<?php echo base_url() . "tower/koordinat" ?>');
                    alert(data.msg);
                    clearmap(e);
                } else {
                    alert(data.msg);
                }
            }
        })
    }

    function hapusmarkertower(e) {
        e.preventDefault();
        var datakoordinat = {
            'id_tower': $(this).data('iddatatower')
        };
        $.ajax({
            url: '<?php echo base_url("tower/hapusmarkertower") ?>',
            data: datakoordinat,
            dataType: 'json',
            type: 'POST',
            success: function(data, status) {
                if (data.status != 'error') {
                    alert(data.msg);
                    $('#daftarkoordinattower').load('<?php echo current_url() . "/ #daftarkoordinattower > *" ?>');
                    clearmap(e);
                } else {
                    alert(data.msg);
                }
            }
        })
    }

    function viewmarkertower(e) {
        e.preventDefault();
        var datakoordinat = {
            'id_tower': $(this).data('iddatatower')
        };
        $.ajax({
            url: '<?php echo base_url("tower/viewmarkertower") ?>',
            data: datakoordinat,
            dataType: 'json',
            type: 'POST',
            success: function(data, status) {
                if (data.status != 'error') {
                    clearmap(e);
                    //load marker
                    $.each(data.msg, function(m, n) {
                        var myLatLng = {
                            lat: parseFloat(n["latitude"]),
                            lng: parseFloat(n["longitude"])
                        };
                        console.log(m, n);
                        $.each(data.datatower, function(k, v) {
                            addMarker(v['namatower'], myLatLng);
                        })
                        return false;
                    })
                    //end load marker
                } else {
                    alert(data.msg);
                }
            }
        })
    }
    // Menampilkan marker lokasi tower
    function addMarker(nama, location) {
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title: nama
        });
        markers.push(marker);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!--end script google map-->