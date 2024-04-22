<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_siswa');
        $data['tampil'] = $this->M_siswa->read();
        $this->load->view('halaman_utama', $data);
    }

    public function tambah_siswa()
    {
        $this->load->view('form_tambah_siswa');
    }

    public function simpan()
    {
        $this->nama = $this->input->post('txtnama');

        $data = array(
            'nim' => $this->input->post('txtnim'),
            'nama' => $this->input->post('txtnama'),
            'jk' => $this->input->post('gender'),
            'alamat' => $this->input->post('txtalamat'),
            'foto' => $this->simpan_gambar()
        );

        $this->load->model('M_siswa');
        $this->M_siswa->create($data);
    }

    public function simpan_gambar()
    {
        $config['upload_path'] = 'assets/gambar/';
        $config['allowed_type'] = 'jpg|jpeg|png';
        $config['max_size'] = '10240';
        $config['file_name'] = $this->nama;
        $config['overwrite'] = true;

        $this->load->library('uplaod', $config);
        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    public function ambil_data($nim)
    {
        //menuju ke model
        $this->load->model('M_siswa');
        $row = $this->M_siswa->get_by_nim($nim);

        //menuju ke view
        $data['tampil'] = $this->M_siswa->get_by_nim($nim);

        if ($row) {
            $this->load->view('form_edit_siswa', $data);
        } else {
            redirect(base_url());
        }
    }

    public function ubah_siswa($nim)
    {
        $this->nama = $this->input->post('txtnama');

        $data = array(
            'nim' => $this->input->post('txtnim'),
            'nama' => $this->input->post('txtnama'),
            'jk' => $this->input->post('gender'),
            'alamat' => $this->input->post('txtalamat'),
            'foto' => $this->simpan_gambar()
        );

        $this->load->model('M_siswa');
        $this->M_siswa->update($nim, $data);
    }

    public function hapus($nim)
    {
        $this->load->model('M_siswa');
        $this->M_siswa->delete($nim);
        redirect(base_url());
    }

    public function cetak_pdf()
    {
        $this->load->model('M_siswa');
        $ambil['tampil'] = $this->M_siswa->read();

        $this->load->library('pdfgenerator');
        $paper = 'A4';
        $orientation = "landscape";
        $html = $this->load->view('coba', $ambil, true);
        $this->pdfgenerator->generate($html, $paper, $orientation);
    }
}
