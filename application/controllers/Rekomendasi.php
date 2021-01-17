<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rekomendasi extends MY_Controller 
{
  public function __construct()
  {
    parent::__construct();


    // Cek apakah user sudah login

  }

  public function index() {
   
    $this->load->view('frontend/rekomendasi');
  }

}