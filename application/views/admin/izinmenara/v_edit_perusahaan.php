
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!--script google map-->

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?=$title;?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?=base_url()?>">Dashboard</a></div>
                <div class="breadcrumb-item"><?=$this->uri->segment(1);?></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title"><?=$title;?></h2>
            <p class="section-lead">
                <?=$title;?> di Kabupaten Lombok Tengah, NTB.
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
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" class="form-control" name="latitude" id="latitude">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" name="longitude" id="longitude">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="namasite">Nama Site</label>
                                    <input type="text" class="form-control" name="nama_site" id="nama_site">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="namaperusahaan">Nama Perusahaan</label>
                                    <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="alamat">Luas Lahan (Are)</label>
                                    <input type="text" class="form-control" name="luas_lahan" id="luas_lahan">
                                </div>
                            </div>
                            <div class="col-md-8">
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
                            <button class="btn btn-info btn-sm" id="simpandaftarkoordinattower"><span class="fas fa-save"></span> Simpan</button>
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
$(document).on('click','#clearmap',clearmap)
.on('click','#simpandaftarkoordinattower',simpandaftarkoordinattower)
.on('click','#hapusmarkertower',hapusmarkertower)
.on('click','#viewmarkertower',viewmarkertower);
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
        draggable : true,
        title: 'Simple GIS',
        map: map
        });
        markers.push(marker);
    }
    //membersihkan peta dari marker
    function clearmap(e){
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

    function simpandaftarkoordinattower(e){
        e.preventDefault();
        var datakoordinat = {
                            'latitude':$('#latitude').val(),
                            'longitude':$('#longitude').val(),
                            'nama_site':$('#nama_site').val(),
                            'nama_perusahaan':$('#nama_perusahaan').val(),
                            'alamat_tower':$('#alamat_tower').val(),
                            'tahun_kontrak':$('#tahun_kontrak').val(),
                            'tahun_pembangunan':$('#tahun_pembangunan').val(),
                            'luas_lahan':$('#luas_lahan').val(),
                            'tinggi_menara':$('#tinggi_menara').val(),
                            'imb':$('#imb').val(),
                            'ijin_operasi':$('#ijin_operasi').val()
                            
                        };
        console.log(datakoordinat);
        $.ajax({
            url : '<?php echo base_url("tower/simpandaftarkoordinattower") ?>',
            dataType : 'json',
            data : datakoordinat,
            type : 'POST',
            success : function(data,status){
                if (data.status!='error') {
                    $('#daftarkoordinattower').load('<?php echo base_url()."tower/koordinat" ?>');
                    alert(data.msg);
                    clearmap(e);
                }else{
                    alert(data.msg);
                }
            }
        })
    }
    function hapusmarkertower(e){
        e.preventDefault();
        var datakoordinat = {'id_tower':$(this).data('iddatatower')};
        $.ajax({
            url : '<?php echo base_url("tower/hapusmarkertower") ?>',
            data : datakoordinat,
            dataType : 'json',
            type : 'POST',
            success : function(data,status){
                if (data.status!='error') {
                    alert(data.msg);
                    $('#daftarkoordinattower').load('<?php echo current_url()."/ #daftarkoordinattower > *" ?>');
                    clearmap(e);
                }else{
                    alert(data.msg);
                }
            }
        })
    }
    function viewmarkertower(e){
        e.preventDefault();
        var datakoordinat = {'id_tower':$(this).data('iddatatower')};
        $.ajax({
            url : '<?php echo base_url("tower/viewmarkertower") ?>',
            data : datakoordinat,
            dataType : 'json',
            type : 'POST',
            success : function(data,status){
                if (data.status!='error') {
                    clearmap(e);
                    //load marker
                    $.each(data.msg,function(m,n){
                        var myLatLng = {lat: parseFloat(n["latitude"]), lng: parseFloat(n["longitude"])};
                        console.log(m,n);
                        $.each(data.datatower,function(k,v){
                            addMarker(v['namatower'],myLatLng);
                        })
                        return false;
                    })
                    //end load marker
                }else{
                    alert(data.msg);
                }
            }
        })
    }
    // Menampilkan marker lokasi tower
    function addMarker(nama,location) {
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title : nama
        });
        markers.push(marker);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!--end script google map-->