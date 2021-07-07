<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index()
    {
        $data['title'] = 'Login | SiPinjam';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
    }

    public function loginProses()
    {
        $emailInput = $this->input->post('email');
        $passwordInput = $this->input->post('password');

        $dataUserLogin = $this->UserModel->getUserByEmail($emailInput);

        if ($dataUserLogin == null) {
            // user tidak ditemukan
            $this->session->set_flashdata('error', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                User tidak ditemukan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');

            return redirect('auth/login');
        } else {
            if (password_verify($passwordInput, $dataUserLogin['password'])) {
                echo "password smaa";
            } else {

                $this->session->set_flashdata('error', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    email atau password salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
                return redirect('auth/login');
            }
        }
    }

    public function register()
    {
        $data['title'] = 'Register | SiPinjam';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/register');
        $this->load->view('templates/footer');
    }

    public function registerProses()
    {

        $dataInput = [
            'nama' => $this->input->post('nama-input'),
            'nomor_induk' => $this->input->post('nomor-input'),
            'jenis_kelamin' => $this->input->post('jenis-kelamin'),
            'alamat' => $this->input->post('alamat-input'),
            'email' => $this->input->post('email-input'),
            'status' => $this->input->post('status-input'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role' => 1
            // 'password2-input' => $this->input->post('password2'),
        ];

        $this->UserModel->insertUser($dataInput);

        return redirect(base_url('auth/login'));
    }
}
