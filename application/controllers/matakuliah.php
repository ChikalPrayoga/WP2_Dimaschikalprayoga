<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        echo "masuk";
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required');
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
