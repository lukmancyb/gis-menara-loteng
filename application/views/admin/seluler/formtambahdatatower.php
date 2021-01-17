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
                            <form class="needs-validation" method="post" id="form-data-tower" novalidate>
                                <input type="hidden" id="created_by" value="<?= $this->session->userdata('id'); ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="latitude">Gambar</label>
                                            <div id="image-preview" class="image-preview" style="background-image: none; background-size: cover; background-position: center center; width: 100%;">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="image" id="nama_gambar">
                                            </div>
                                        </div>
                                    </div>
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
                                            <label for="namasite">Nama Site</label>
                                            <input type="text" class="form-control" name="nama_site" id="nama_site" required>
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
                                            <label>Kecamatan</label>
                                            <!-- <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan"> -->
                                            <select class="form-control select2" onchange="getDesaByKecamatan()" name="id_kecamatan" id="id_kecamatan" style="width: 100%;" required>
                                                <!-- <option>---</option> -->
                                            </select>
                                            <p id="msg_kecamatan" style="color:red;">Pilih kecamatan</p>
                                            <div class="invalid-feedback">
                                                Field tidak boleh kosong
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="namaperusahaan">Desa</label>
                                            <!-- <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan"> -->
                                            <select class="form-control select2" name="id_desa" onchange="checkDesa()"
                                                    id="id_desa" style="width: 100%;">
                                                <!-- <option>---</option> -->
                                            </select>
                                            <p id="msg_desa" style="color:red;">Pilih desa terlebih dahulu</p>
                                            <div class="invalid-feedback">
                                                Field tidak boleh kosong
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" name="alamat_tower" id="alamat_tower"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="alamat">Tahun Kontrak</label>
                                            <input type="number" class="form-control" name="tahun_kontrak" id="tahun_kontrak">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="alamat">Tahub Pembangunan</label>
                                            <input type="number" class="form-control" name="tahun_pembangunan" id="tahun_pembangunan">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="alamat">Tinggi Menara (M)</label>
                                            <input type="number" class="form-control" name="tinggi_menara" id="tinggi_menara">
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
                                            <label for="alamat">IMB</label>
                                            <input type="text" class="form-control" name="imb" id="imb">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Izin Operasi</label>
                                            <input type="text" class="form-control" name="ijin_operasi" id="ijin_operasi">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-success" onclick="validasiForm('#form-data-tower', '#dom-ajax');" style="color:white"><i class="fas fa-save" style="color:white"></i> Simpan</a>
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
<?php $this->load->view('_partials/initmap'); ?>
<script>
    var forms = document.getElementsByClassName('needs-validation');
    $(document).ready(function() {
        /**
        Hide label pemberitahuan
         */
        $('#msg_perusahaan').hide();
        $('#msg_kecamatan').hide();
        $('#msg_desa').hide();
        $('#id_desa').prop('disabled', true);

        //Ambil data perusahaan dari ajax
        getDataPerusahaan();
        //Ambil data kecamatan dari ajax
        getDataKecamatan();
        //Disable tombol simpan
        // $('#simpan_data_tower').prop('disabled', true);
    });

    function checkPerusahaan() {
        var id_perusahaan = $('#id_perusahaan option:selected').val();
        if (id_perusahaan == "") {
            $('#msg_perusahaan').show();
        } else {
            $('#msg_perusahaan').hide();

        }
    }

    function checkDesa() {
        var id_perusahaan = $('#id_desa option:selected').val();
        if (id_perusahaan == "") {
            $('#msg_desa').show();
        } else {
            $('#msg_desa').hide();

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
    //Fungsi ambil data kecamatan
    function getDataKecamatan() {

        $.ajax({
            url: '<?php echo base_url(); ?>perusahaan/get_kecamatan',
            dataType: 'json',
            type: 'GET',
            success: function(data) {
                var html = '';
                html = '<option value="" required> -- Pilih -- </option>';
                for (item in data) {
                    html += '<option value="' + data[item].id_kecamatan + '">' + data[item].nama_kecamatan + '</option>';
                    // console.log(html);
                }
                $('#id_kecamatan').html(html);

            }
        });
    }
    //END KECAMATAN
    //Fungsi ambil data kecamatan
    function getDesaByKecamatan() {

        var id_kecamatan = $('#id_kecamatan option:selected').val();
        if (id_kecamatan == "") {
            $('#msg_kecamatan').show();
            $('#msg_desa').show();
            var html = '<option value="" required> -- Pilih -- </option>';
            $("#id_desa").html(html);
            $('#id_desa').prop('disabled', true);

        } else {
            $('#msg_kecamatan').hide();
            $('#msg_desa').hide();
            $('#id_desa').prop('disabled', false);
            $.ajax({
                url: '<?php echo base_url(); ?>perusahaan/get_desa_by_kecamatan',
                data: {
                    'id_kecamatan': id_kecamatan
                },
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    var html = '';
                    html = '<option value="" required> -- Pilih -- </option>';
                    for (item in data) {
                        html += '<option value="' + data[item].id_desa + '">' + data[item].nama_desa + '</option>';
                        // console.log(html);
                    }
                    $('#id_desa').html(html);

                }
            });
        }
    }
    //END KECAMATAN


    // VALIDASI DATA TOWER
    function validasiForm(obj, res) {

        var id_kecamatan = $('#id_kecamatan option:selected').val();
        var id_desa = $('#id_desa option:selected').val();
        var id_perusahaan = $('#id_perusahaan option:selected').val();
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
            } else if (id_perusahaan == "") {
                $('#msg_perusahaan').show();
            } else if (id_kecamatan == "") {
                $('#msg_kecamatan').show();
            } else if (id_desa == "") {
                $('#msg_desa').show();
            } else {
                $('#msg_perusahaan').hide();
                $('#msg_kecamatan').hide();
                $('#msg_desa').hide();
                var data = $(obj).serialize();
                simpanDataTower(data)
            }
        });
    }


    // FUNGI SIMPAN DATA TOWER
    function simpanDataTower(obj) {
        $.ajax({
            url: base_url + 'tower/simpan_data_tower',
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
        var myLatlng = new google.maps.LatLng(-8.6972643, 116.2798958);

        var myOptions = {
            zoom: 10,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

        var marker = new google.maps.Marker({
            draggable: true,
            position: myLatlng,
            map: map,
            title: "Your location"
        });

        google.maps.event.addListener(marker, 'dragend', function(event) {
            document.getElementById("latitude").value = this.getPosition().lat();
            document.getElementById("longitude").value = this.getPosition().lng();
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