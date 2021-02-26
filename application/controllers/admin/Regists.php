<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
<?php
public function index()
    {
        // print_r('TEXT');
         $this->load->view('admin/vregister');
    }
public function proses_register()
{
    $this->load->library('form_validation');
    $this->load->library('session');

    $this->form_validation->set_rules('nama1', 'Nama1', 'required');
    $this->form_validation->set_rules('nama2', 'Nama2', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    
    if ($this->form_validation->run() == FALSE) {
        $errors = $this->form_validation->error_array();
        $this->session->set_flashdata('errors', $errors);
        $this->session->set_flashdata('input', $this->input->post());
        redirect('auth/register');
    } else {
        $nama1 = $this->input->post('nama1');
        $nama2 = $this->input->post('nama2');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'nama1' => $nama1,
            'nama2' => $nama2,
            'email' => $email,
            'password' => $pass
        ];
        $insert = $this->auth_model->register("admin", $data);
        if($insert){
            echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('index.php/auth/login').'";</script>';
        }
    }
} 
?> 
</body>
</html>