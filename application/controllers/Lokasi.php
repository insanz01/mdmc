<?php

class Lokasi extends CI_Controller {
  public function __construct() {
    parent::__construct();
    cek_login();

    $this->load->library('form_validation');
  }

  public function index() {
    $this->form_validation->set_rules('kabupaten');
    $this->form_validation->set_rules('kelurahan');
    $this->form_validation->set_rules('kecamatan');
    $this->form_validation->set_rules('desa');
    $this->form_validation->set_rules('jenis_bencana');

    if($this->form_validation->run() == FALSE) {
      $data['title'] = "Lokasi Bencana";
      $this->template->load('templates/dashboard', 'lokasi/tambah', $data);
    }
  }
}

 ?>
