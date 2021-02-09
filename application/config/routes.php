<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'frontend';
$route['peta'] = 'frontend';

/**
 * ADMIN
 */

$route['admin-pengajuan'] = 'admin/adminpengajuan';
$route['admin-pengajuan-alasan/show/(:num)'] = 'admin/adminpengajuan/showKomentarById/$1';
$route['admin-pengajuan/detail/(:num)'] = 'admin/adminpengajuan/view/$1';
$route['admin-pengajuan/terima/(:num)'] = 'admin/adminpengajuan/terima/$1';
$route['admin-pengajuan/tolak'] = 'admin/adminpengajuan/tolak';

$route['admin-pemohon'] = 'admin/adminpemohon';
$route['admin-pemohon/detail_pemohon/(:num)'] = 'admin/adminpemohon/detail_pemohon/$1';
$route['admin-pemohon/validasi_pemohon'] = 'admin/adminpemohon/validasi_pemohon';

/**
 * PEMOHON
 */
$route['pengajuan'] = 'pemohon/pengajuan';
$route['pengajuan-alasan/show/(:num)'] = 'pemohon/pengajuan/showKomentarById/$1';
$route['pengajuan-edit/(:num)'] = 'pemohon/pengajuan/edit/$i';

$route['pengajuan-upload/show/(:num)'] = 'pemohon/detailpermohonan/showSyarat/$1';
$route['pengajuan-upload/update'] = 'pemohon/detailpermohonan/updateSyarat';


$route['detail-permohonan/(:num)'] = 'pemohon/detailpermohonan/show/$1';

$route['izin-menara'] = 'IzinMenara';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
