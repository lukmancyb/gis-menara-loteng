
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
                <div class="card-header"><span class="fas fa-list"></span> Form Koordinat <button class="btn btn-info btn-sm" id="clearmap"><span class="fas fa-globe"></span> ClearMap</button></div>
                <div class="card-body">
                    <form method="post" id="edit-koordinat-form" method="post">
                    <?php if(validation_errors()): ?>
                    <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                        <span>×</span>
                        </button>
                        <?php echo validation_errors('<p>', '</p>'); ?>
                    </div>
                    </div>
                    <?php endif; ?>
                    <?php if($message = $this->session->flashdata('message')): ?>
                    <div class="alert <?php echo ($message['status']) ? 'alert-success' : 'alert-danger'; ?> alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                        <span>×</span>
                        </button>
                        <?php echo $message['message']; ?>
                    </div>
                    </div>
                    <?php endif; ?>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" class="form-control" name="latitude" id="latitude" value="<?=$dtower->latitude;?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" name="longitude" id="longitude" value="<?=$dtower->longitude;?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="namasite">Nama Site</label>
                                    <input type="text" class="form-control" name="nama_site" id="nama_site" value="<?=$dtower->nama_site;?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="namaperusahaan">Nama Perusahaan</label>
                                    <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" value="<?=$dtower->nama_perusahaan;?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat_tower" id="alamat_tower"><?=$dtower->alamat_tower;?></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="alamat">Tahun Kontrak</label>
                                    <input type="number" class="form-control" name="tahun_kontrak" id="tahun_kontrak" value="<?=$dtower->tahun_kontrak;?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="alamat">Tahub Pembangunan</label>
                                    <input type="number" class="form-control" name="tahun_pembangunan" id="tahun_pembangunan" value="<?=$dtower->tahun_pembangunan;?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="alamat">Tinggi Menara (M)</label>
                                    <input type="number" class="form-control" name="tinggi_menara" id="tinggi_menara" value="<?=$dtower->tinggi_menara;?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="alamat">Luas Lahan (Are)</label>
                                    <input type="text" class="form-control" name="luas_lahan" id="luas_lahan" value="<?=$dtower->luas_lahan;?>">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="alamat">IMB</label>
                                    <input type="text" class="form-control" name="imb" id="imb" value="<?=$dtower->imb;?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="alamat">Izin Operasi</label>
                                    <input type="text" class="form-control" name="ijin_operasi" id="ijin_operasi" value="<?=$dtower->ijin_operasi;?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <input type="hidden" class="form-control" name="id_tower" id="id_tower" value="<?=$dtower->id_tower;?>"> -->
                            <button class="btn btn-info btn-sm" name="submit" type="submit" value="<?php echo $dtower->id_tower; ?>"><span class="fas fa-save"></span> Simpan</button>
                            
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
<!--end script google map-->
<script>
$(document).on('click','#clearmap',clearmap)
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

    // map.addMarker({
    // icon: iconBase + 'antenna-42.png',
    // lat: <?=$dtower->latitude;?>,
    // lng: <?=$dtower->longitude;?>,
    // title: '<?=$dtower->nama_site;?>',
    // infoWindow: {
    //     content: '<h6><?php echo $dtower->nama_perusahaan;?></h6>Nama Site : <?php echo $dtower->nama_site;?><br>Alamat : <?php echo $dtower->alamat_tower;?><br>Tinggi Menara : <?php echo $dtower->tinggi_menara;?>M'
    // }
    // });
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

<?php $this->load->view('_partials/end'); ?>
