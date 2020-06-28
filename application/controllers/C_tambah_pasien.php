<?php 

class C_tambah_pasien extends CI_Controller {

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_tambah_pasien');
        $this->load->view('templates/footer');
    }

    public function tambah_pasien_aksi(){
        $this->_rules();
        if($this->form_validation->run() == FALSE ) {
            $this->index();
        } else {
            $nama              = $this->input->post('nama');
            $nik               = $this->input->post('nik');
            $alamat            = $this->input->post('alamat');
            $jenis_kelamin     = $this->input->post('jenis_kelamin');
            $no_telepon        = $this->input->post('no_telepon');

            $data = array(
                'nama'              => $nama,
                'nik'               => $nik,
                'alamat'            => $alamat,
                'no_telepon'        => $no_telepon,
                'jenis_kelamin'     => $jenis_kelamin,
            );

            $this->model_pasien->insert_data($data, 'tb_pasien');
            $this->session->set_flashdata('pesan',
             '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Pasien Berhasil Ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            redirect('c_data_pasien');
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required');
    } 
}


?>