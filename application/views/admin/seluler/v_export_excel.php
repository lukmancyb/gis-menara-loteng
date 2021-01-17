<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
<center><h4>DATA MENARA TELEKOMUNIKASI </h4>
<h3>DINAS KOMUNIKASI DAN INFORMATIKA</h3>
<h1>KABUPATEN LOMBOK TENGAH</h1>
</center>
</table>
<table class="table table-striped table-bordered" style="font-size:12px;border:1px solid #cccccc; font-style:Times New roman" border="1" width="100">
  <thead>
  <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">Nama Perusahaan</th>
      <th rowspan="2">Nama SIte</th>
      <th rowspan="2">Site ID</th>
      <th rowspan="2">Alamat</th>
      <th rowspan="2">Kecamatan</th>
      <th rowspan="2">Desa</th>
      <th colspan="2">Titik Koordinat</th>
      <th rowspan="2">IMB</th>
      <th rowspan="2">Ketinggian Menara</th>
      <th rowspan="2">Tahun Pembangunan</th>
  </tr>
  <tr>
      <th>latitude</th>
      <th>Longitude</th>
  </tr>
  </thead>
  <tbody>
  <?php 
      $no=0;
      if($id_per=='' && $id_kec==''){
        $result = $dt_menara; 
      }
      elseif($id_kec=='' && isset($id_per)){
        $result = $this->db->query("SELECT a.*, b.nama_perusahaan, c.nama_kecamatan, d.nama_desa
        FROM tbl_menara_seluler a
        JOIN ref_perusahaan b ON a.id_perusahaan = b.id_perusahaan
        JOIN ref_kecamatan c ON a.id_kecamatan = c.id_kecamatan
        JOIN ref_desa d ON a.id_desa = d.id_desa
        WHERE a.id_perusahaan = '$id_per'");
      }
      elseif($id_per=='' && isset($id_kec)){
        $result = $this->db->query("SELECT a.*, b.nama_perusahaan, c.nama_kecamatan, d.nama_desa
        FROM tbl_menara_seluler a
        JOIN ref_perusahaan b ON a.id_perusahaan = b.id_perusahaan
        JOIN ref_kecamatan c ON a.id_kecamatan = c.id_kecamatan
        JOIN ref_desa d ON a.id_desa = d.id_desa
        WHERE a.id_kecamatan='$id_kec'");
      }
      else{
          $result = $this->db->query("SELECT a.*, b.nama_perusahaan, c.nama_kecamatan, d.nama_desa
          FROM tbl_menara_seluler a
          JOIN ref_perusahaan b ON a.id_perusahaan = b.id_perusahaan
          JOIN ref_kecamatan c ON a.id_kecamatan = c.id_kecamatan
          JOIN ref_desa d ON a.id_desa = d.id_desa
          WHERE a.id_perusahaan = '$id_per' AND a.id_kecamatan='$id_kec'");
      }
      foreach ($result->result() as $i) :
          $no++;
        
  ?>
  <tr>
      <td style="width:70px;"><?=$no;?></td>
      <td><?=$i->nama_perusahaan;?></td>
      <td><?=$i->nama_site;?></td>
      <td><?=$i->id_site;?></td>
      <td><?=$i->alamat_tower;?></td>
      <td><?=$i->nama_kecamatan;?></td>
      <td><?=$i->nama_desa;?></td>
      <td><?=$i->latitude;?></td>
      <td><?=$i->longitude;?></td>
      <td><?=$i->imb;?></td>
      <td><?=$i->tinggi_menara;?></td>
      <td><?=$i->tahun_pembangunan;?></td>
  </tr>
  <?php endforeach;?>
  </tbody>
</table>
