<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pemohon extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('pemohon/index');
    }

}