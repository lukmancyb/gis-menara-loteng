
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
     
        <div class="col-md-8">
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
        <div class="col-md-4 col-sm-4">
            <div class="card">
                <div class="card-body" style="height:600px;" id="map-canvas">
                </div>
            </div>
        </div>
    </div>
</div>

<section>
</div>
<?php $this->load->view('_partials/js'); ?>

<!--end script google map-->