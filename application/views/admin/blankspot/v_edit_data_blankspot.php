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
                            <input type="hidden" class="form-control" value="<?= $dblank->id_area_blankspot; ?>" name="id_area_blankspot" id="id_area_blankspot" required>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="latitude">Latitude</label>
                                            <input type="text" class="form-control" value="<?= $dblank->latitude; ?>" name="latitude" id="latitude" required>
                                            <div class="invalid-feedback">
                                                Field tidak boleh kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="longitude">Longitude</label>
                                            <input type="text" class="form-control" value="<?= $dblank->longitude; ?>" name="longitude" id="longitude" required>
                                            <div class="invalid-feedback">
                                                Field tidak boleh kosong
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="namasite">Lokasi / Area Blankspot</label>
                                            <input type="text" class="form-control" value="<?= $dblank->lokasi; ?>" name="lokasi" id="lokasi" required>
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
                                                <option value="<?= $dblank->id_kecamatan; ?>" selected><?= $dblank->nama_kecamatan; ?></option>
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
                                            <select class="form-control select2" name="id_desa" onchange="checkDesa()" id="id_desa" style="width: 100%;">
                                                <!-- <option>---</option> -->
                                                <option value="<?= $dblank->id_desa; ?>" selected><?= $dblank->nama_desa; ?></option>


                                            </select>
                                            <p id="msg_desa" style="color:red;">Pilih desa terlebih dahulu</p>
                                            <div class="invalid-feedback">
                                                Field tidak boleh kosong
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Tahun </label>
                                            <input type="number" class="form-control" value="<?= $dblank->tahun; ?>" name="tahun" id="tahun">
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
    var id_desa = $("#id_desa option:selected").val();
    var id_kecamatan = $("#id_kecamatan option:selected").val();

    var forms = document.getElementsByClassName('needs-validation');
    $(document).ready(function() {
        /**
        Hide label pemberitahuan
         */
        $('#msg_kecamatan').hide();
        $('#msg_desa').hide();
        $('#id_desa').prop('disabled', true);


        getDataKecamatan();
        //Disable tombol simpan
        // $('#simpan_data_tower').prop('disabled', true);
    });



    function checkDesa() {
        var id_perusahaan = $('#id_desa option:selected').val();
        if (id_perusahaan == "") {
            $('#msg_desa').show();
        } else {
            $('#msg_desa').hide();

        }
    }


    function getDataKecamatan() {


        $.ajax({
            url: base_url + 'master/get_kecamatan',
            method: "GET",
            async: true,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    if (data[i].id_kecamatan === id_kecamatan) {
                        console.log("true");
                        html += '<option  value=' + data[i].id_kecamatan + ' selected >' + data[i].nama_kecamatan + '</option>';
                    }
                    else{
                        html += '<option  value=' + data[i].id_kecamatan + '>' + data[i].nama_kecamatan + '</option>';
                    }
                }
                $('#id_kecamatan').html(html);
            }
        });

        // console.log('id' + id_kecamatan)
        // $.ajax({
        //     url: '<?php echo base_url(); ?>master/get_kecamatan',
        //     dataType: 'json',
        //     type: 'GET',
        //     success: function(data) {
        //         console.log(data);
        //         var html = '';
        //         var id_kec = id_kecamatan;
        //         // html = '<option value="" required> -- Pilih -- </option>';
        //         for (item in data) {
        //             // console.log(item)
        //             if (item.id_kecamatan = id_kec) {
        //                 console.log("true");
        //                 html += '<option  value=' + data[item].id_kecamatan + ' selected >' + data[item].nama_kecamatan + '</option>';
        //             }
        //             html += '<option  value=' + data[item].id_kecamatan + '>' + data[item].nama_kecamatan + '</option>';
        //         }
        //         $('#id_kecamatan').html(html);

        //     }
        // });
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
                url: '<?php echo base_url(); ?>master/get_desa_by_kecamatan',
                data: {
                    'id_kecamatan': id_kecamatan
                },
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    var html = '';
                    html = '<option value="" required> -- Pilih -- </option>';
                    for (item in data) {
                        if (item.id_desa == id_desa) {
                            html += '<option  value=' + data[item].id_desa + ' selected >' + data[item].nama_desa + '</option>';
                        }
                        html += '<option  value=' + data[item].id_desa + '>' + data[item].nama_desa + '</option>';
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
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
            } else if (id_kecamatan == "") {
                $('#msg_kecamatan').show();
            } else if (id_desa == "") {
                $('#msg_desa').show();
            } else {
                $('#msg_kecamatan').hide();
                $('#msg_desa').hide();
                var data = $(obj).serialize();
                updateDataBakti(data)
            }
        });
    }



    // FUNGI SIMPAN DATA TOWER
    function updateDataBakti(obj) {
        $.ajax({
            url: base_url + 'blankspot/update_data_blankspot',
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
    var markers = [];

    var map;

    function initialize() {
        var lat = $('#latitude').val();
        var long = $('#longitude').val();
        var myLatlng = new google.maps.LatLng(lat, long);

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