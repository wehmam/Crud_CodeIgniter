<?php 


class Mahasiswa_model extends CI_model 
{
    public function getAllMahasiswa()
    {
        return $this->db->get('identitas_mahasiswa')->result_array();
    }
    public function tambahData()
    {
        $data = array(
            'nim' => $this->input->post('nim', true),
            'nama' => $this->input->post('nama',true),
            'alamat' => $this->input->post('alamat',true),
            'jurusan' => $this->input->post('jurusan',true),
            'no_hp' => $this->input->post('no_hp',true),
            'tahun_masuk' => $this->input->post('tahun_masuk',true),
    );
    
    $this->db->insert('identitas_mahasiswa', $data);
    }
  
    public function hapusData($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('identitas_mahasiswa');
    }
    public function getMahasiswaById($id)
    {
        return $this->db->get_where('identitas_mahasiswa',['id' => $id])->row_array();
    }
    public function ubahData()
    {
        $data = array(
            'nim' => $this->input->post('nim', true),
            'nama' => $this->input->post('nama',true),
            'alamat' => $this->input->post('alamat',true),
            'jurusan' => $this->input->post('jurusan',true),
            'no_hp' => $this->input->post('no_hp',true),
            'tahun_masuk' => $this->input->post('tahun_masuk',true),      
    );
    $this->db->replace('identitas_mahasiswa',$data);
    }
}