<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('FasilitasModel');
		$this->load->model('PeminjamanModel');

		if (!$this->session->userdata('email')) {
			return redirect('auth/login');
		}
	}

	public function mahasiswa()
	{
		$data['title'] = 'Si Pinjam';
		$data['user'] = $this->UserModel->getUserByEmail($this->session->userdata('email'));
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/mahasiswa/index_mahasiswa');
		$this->load->view('templates/footer');

		return redirect('mahasiswa/pinjam');
	}

	public function mahasiswa_pinjam()
	{
		$data['title'] = 'Si Pinjam';
		$data['user'] = $this->UserModel->getUserByEmail($this->session->userdata('email'));
		$data['fasilitas'] = $this->FasilitasModel->getAllFasilitas();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/mahasiswa/pinjam_mahasiswa', $data);
		$this->load->view('templates/footer');
	}

	public function mahasiswa_pinjam_detail($id_fasilitas)
	{

		$data['title'] = 'Si Pinjam';
		$data['user'] = $this->UserModel->getUserByEmail($this->session->userdata('email'));
		$data['fasilitas'] = $this->FasilitasModel->getFasilitasByID($id_fasilitas);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/mahasiswa/pinjam_mahasiswa_detail', $data);
		$this->load->view('templates/footer');
	}

	public function mahasiswa_status()
	{
		$data['title'] = 'Si Pinjam';
		$dataUser = $this->UserModel->getUserByEmail($this->session->userdata('email'));
		$data['user'] = $dataUser;

		$data['peminjaman'] = $this->PeminjamanModel->getPeminjamanByUser($dataUser['id_user']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/mahasiswa/status_mahasiswa', $data);
		$this->load->view('templates/footer');
	}

	public function dosen()
	{
		$data['title'] = 'Si Pinjam';
		$this->load->view('templates/header', $data);
		$this->load->view('user/dosen/index_dosen');
		$this->load->view('templates/footer');
	}



	public function staff()
	{
		$data['title'] = 'Si Pinjam';
		$dataUser = $this->UserModel->getUserByEmail($this->session->userdata('email'));
		$data['user'] = $dataUser;
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('user/staff/index_staff');
		$this->load->view('templates/footer');
	}

	public function admin_peminjaman()
	{
		$data['title'] = 'Si Pinjam';
		$dataUser = $this->UserModel->getUserByEmail($this->session->userdata('email'));
		$data['peminjaman'] = $this->PeminjamanModel->getAllPeminjaman();
		$data['user'] = $dataUser;
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('user/admin/admin_peminjaman');
		$this->load->view('templates/footer');
	}

	public function admin_kelola()
	{
		$data['title'] = 'Si Pinjam';
		$dataUser = $this->UserModel->getUserByEmail($this->session->userdata('email'));
		$data['fasilitas'] = $this->FasilitasModel->getAllFasilitas();
		$data['user'] = $dataUser;
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin', $data);
		$this->load->view('user/admin/admin_kelola');
		$this->load->view('templates/footer');
	}

	public function admin_kelola_tambah()
	{
		$dataInputan = [
			'nama_fasilitas' => $this->input->post('name'),
			'ready_amount' => $this->input->post('jumlah'),
			'total_amount' => $this->input->post('jumlah')
		];

		$this->FasilitasModel->addFasilitas($dataInputan);

		return redirect('admin/kelola');
	}
}
