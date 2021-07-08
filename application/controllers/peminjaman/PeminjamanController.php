<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PeminjamanController extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('FasilitasModel');
		$this->load->model('PeminjamanModel');

		if(!$this->session->userdata('email')) {
			return redirect('auth/login');
		}
	}

    public function prosesPeminjaman() {
        $dataInputan = [
            'id_user' => $this->input->post('id_user'),
            'id_fasilitas' => $this->input->post('id_fasilitas'),
            'amount' => $this->input->post('jumlah_pinjam'),
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali')
        ];

        $this->PeminjamanModel->addPeminjaman($dataInputan);
        $this->FasilitasModel->decrementFasilitas($dataInputan['amount'], $dataInputan['id_fasilitas']);

        return redirect('mahasiswa/status');

    }

    public function setujuiPeminjaman($id_peminjaamn) {
        $this->db->set('id_petugas', 1);
        $this->db->where('id_peminjaman', $id_peminjaamn);
        $this->db->update('peminjaman');
        return redirect('admin/peminjaman');
    }

}