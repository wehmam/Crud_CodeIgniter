<?php 

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = "Form Tambah Data Mahasiswa";
        $data['jurusan'] = ["Teknik Informatika","Sistem Infromasi","DKV","Teknik Sipil","Teknik Mesin","Management"];

        $this->form_validation->set_rules('nim','Nim','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('no_hp','No Handphone','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
            
        }
        else
        {
            $this->Mahasiswa_model->tambahData();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('mahasiswa');
        }
    }
    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusData($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('mahasiswa');
    }
    public function detail($id)
    {
        $data['judul'] = "Detail Data Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['judul'] = "Form Ubah Data Mahasiswa";
        $data['jurusan'] = ["Teknik Informatika","Sistem Infromasi","DKV","Teknik Sipil","Teknik Mesin","Management"];

        $this->form_validation->set_rules('nim','Nim','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('no_hp','No Handphone','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/ubah',$data);
            $this->load->view('templates/footer');
            
        }
        else
        {
            $this->Mahasiswa_model->ubahData();
            $this->session->set_flashdata('flash','Diubah');
            redirect('mahasiswa');
        }
    }
}