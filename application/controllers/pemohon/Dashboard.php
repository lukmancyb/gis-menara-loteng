<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();

    }

    public function index(){
        $this->load->view('pemohon/index');
    }

}