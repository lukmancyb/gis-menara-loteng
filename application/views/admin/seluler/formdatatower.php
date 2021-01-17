
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
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header"><a href="<?php echo base_url(); ?>tower/tambah" class="btn btn-primary">Tambah Baru</a></div>
                <div class="card-body">
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

<section>
</div>
<?php $this->load->view('_partials/footer'); ?>
<?php $this->load->view('_partials/js'); ?>

