<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('model_users'));
        $this->load->model('pemohon/model_pemohon');

    }

    public function cekAkun()
    {
        // Memanggil model users
        $this->load->model('model_users');

        // Mengambil data dari form login dengan method POST
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Jalankan function cekAkun pada model_users
        $query = $this->model_users->cekAkun($username, $password);


        // Jika query gagal maka return false
        if (!$query) {

            // Mengatur pesan error validasi data
            $this->form_validation->set_message('cekAkun', 'Username atau password yang Anda masukkan salah!');
            return false;

            // Jika berhasil maka set user session dan return true
        } else {
            if (!$query->active) {
                $this->form_validation->set_message('cekAkun', 'Akun anda belum aktif');
                return false;
            }

            // data user dalam bentuk array
            $userData = array(
                'id' => $query->id,
                'username' => $query->username,
                'level' => $query->level,
                'avatar' => $query->avatar,
                'nama' => $query->nama,
                'alamat' => $query->alamat,
                'telp' => $query->telp,
                'logged_in' => true
            );

            // set session untuk user
            $this->session->set_userdata($userData);

            return TRUE;
        }
    }

    public function login()
    {
        // Jika user telah login, redirect ke base_url
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('level') === 'administrator') {
                redirect('dashboard');
            } else {
                redirect('pemohon/pemohon');
            }
        }

        // Jika form di submit jalankan blok kode ini
        if ($this->input->post('submit')) {

            // Mengatur validasi data username,
            // required = tidak boleh kosong
            $this->form_validation->set_rules('username', 'Username', 'required');

            // Mengatur validasi data password,
            // required = tidak boleh kosong
            // callback_cekAkun = menjalankan function cekAkun()
            $this->form_validation->set_rules('password', 'Password', 'required|callback_cekAkun');

            // Mengatur pesan error validasi data
            $this->form_validation->set_message('required', '%s tidak boleh kosong!');

            // Jalankan validasi jika semuanya benar maka redirect ke controller dashboard
            if ($this->form_validation->run() === TRUE) {
                if ($this->session->userdata('level') === 'administrator') {
                    redirect('dashboard');
                } else {
                    redirect('pemohon/pemohon');
                }
            }
        }


        // Jalankan view auth/login.php
        $data = array(
            'title' => "Login"
        );
        $this->load->view('layout/login', $data);

    }


    public function register()
    {
        if ($this->session->userdata('logged_in')) redirect('dashboard');
        if ($this->input->post('submit')) {
            $this->form_validation->set_data($this->input->post());
            if ($this->form_validation->run('signup')) {
                $post = $this->input->post();
                $email = $post['username'];
                $data = array(
                    'nama' => $post['nama'],
                    'username' => $post['username'],
                    'password' => password_hash($post['password'], PASSWORD_DEFAULT),
                    'telp' => $post['telepon'],
                    'active' => '0'
                );

                $token = base64_encode(random_bytes(32));

                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->model_users->insert($data);
                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'verify');
                $this->session->set_flashdata('message', "Selamat akun anda sudah dibuat, silahkan login");
                redirect('auth/login', 'refresh');
            }
        }

        $data = array('title' => 'Register');
        $this->load->view('layout/v_register', $data);
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'mahir.ganti@gmail.com',
            'smtp_pass' => 'mlukm4nh@kim',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];
        $this->load->library('email', $config);
        $this->email->from('mahir.ganti@gmail.com', 'Gis Menara Loteng');
        $this->email->to($this->input->post('username'));

        if ($type == 'verify') {

            $user_email = $this->input->post('username');

            $message = 'Klik link untuk verifikasi akun anda : <a href="' . base_url() .
                'auth/verify?email=' . $user_email . '&token=' . $token . '"> Activate </a>';

            $this->email->subject('Verifikasi Akun');
            $this->email->message();
        }
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

//if ($this->model_users->insert($data)) {
//$query = $this->model_users->cekAkun($post['username'], $post['password']);
//$userData = array(
//'id' => $query->id,
//'username' => $query->username,
//'level' => $query->level,
//'email' => $query->username,
//'telepon' => $post['telepon'],
//'nama' => $query->nama,
//'logged_in' => true
//);
//    // set session untuk user
//$data_pemohon = array(
//'id_user' => $query->id,
//'nama' => $query->nama,
//'email' => $query->username,
//'telepon' => $post['telepon'],
//'created_at' => date('Y-m-d H:i:s')
//);
//$this->model_pemohon->insert($data_pemohon);
//$this->session->set_userdata($userData);
//redirect('pemohon/pemohon');
//}


    public function logout()
    {
        // Hapus semua data pada session
        $this->session->sess_destroy();

        // redirect ke halaman login
        redirect('auth/login');
    }

    public function username_check($email)
    {
        $data = $this->model_users->get_where(
            array('username' => $email)
        )->result();

        if (!empty($data)) {
            $this->form_validation->set_message('username_check', 'Username sudah digunakan, gunakan yang berbeda');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}