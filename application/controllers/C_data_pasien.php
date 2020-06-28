<?php 

class C_data_pasien extends CI_Controller {
    public function index() {
        $data['pasien'] = $this->model_pasien->get_data('tb_pasien')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_pasien', $data);
        $this->load->view('templates/footer');
    }
    
}


?>