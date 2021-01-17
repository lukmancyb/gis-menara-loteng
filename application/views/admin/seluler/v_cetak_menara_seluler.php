
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
                <div class="breadcrumb-item"><?=$this->uri->segment(2);?></div>
            </div>
        </div>
        <div class="section-body">
            <form action="<?=base_url();?>tower/export_excel" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pilih Perusahaan</label>
                            <select class="form-control" name="id_per">
                                <option value="">Pilih Perusahaan</option>
                                <?php foreach($perusahaan as $item){ ?>
                                    <option value="<?=$item->id_perusahaan;?>"><?=$item->nama_perusahaan;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pilih Kecamatan</label>
                            <select class="form-control" name="id_kec">
                                <option value="">Pilih Kecamatan</option>
                                <?php foreach($kecamatan as $item){ ?>
                                    <option value="<?=$item->id_kecamatan;?>"><?=$item->nama_kecamatan;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">&nbsp;</label><br>
                            <button class="btn btn-primary"><i class="fas fa-print"></i> Cetak</button>
                        </div>
                    </div>
                    
                </div>                                  
            </form>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="example1">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Site</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th></th>
                                </thead>    
                                <tbody id="daftarkoordinattower">
                                    <?php
                                        $no = 1;
                                        foreach ($itemdatatower->result() as $d) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $d->nama_site;?></td>
                                        <td><?php echo $d->nama_perusahaan;?></td>
                                        <td><?php echo $d->nama_desa;?></td>
                                        <td><?php echo $d->nama_kecamatan;?></td>
                                        <td>
                                        <a href="<?php echo base_url('tower/edit/' . $d->id_tower); ?>" class="btn btn-warning"data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="far fa-edit"></i></a>   
                                        <a href="<?php echo base_url('tower/delete/' . $d->id_tower); ?>" class="btn btn-danger" id="koordinat_hapus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"><i class="fas fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                        $no++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section>
</div>
<?php $this->load->view('_partials/footer'); ?>
<?php $this->load->view('_partials/js'); ?>

