<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {



public function profile()
    {
        $data = konfigurasi('Profile');
        $data['get_all_userdata'] = $this->Model_Profileguru->get_by_id($this->session->userdata('id_guru'));
        $this->template->load('template_guru/header', 'template_guru/sidebar', 'template_guru/footer' , $data);
    }

    public function updateProfile()
    {
        $this->form_validation->set_rules('nig_guru', 'Nig_guru', 'trim|required|min_length[4]|max_length[15]');
        $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'trim|required|min_length[2]|max_length[15]');
        $this->form_validation->set_rules('asal_kota', 'Asal_kota', 'trim|required|min_length[2]|max_length[15]');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'trim|required|min_length[8]|max_length[50]');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'trim|required|min_length[11]|max_length[12]');
		$this->form_validation->set_rules('no_telp', 'No_telp', 'trim|required|min_length[11]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[11]|max_length[12]');

        $id_guru = $this->session->userdata('id_guru');
        $data = array(
            'nig_guru' => $this->input->post('nig_guru'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'asal_kota' => $this->input->post('asal_kota'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_telp' => $this->input->post('no_telp'),
			'password' => $this->input->post('password'),
			'alamat' => $this->input->post('alamat'),
        );
        if ($this->form_validation->run() == true) {
            if (!empty($_FILES['photo']['name'])) {
                $upload = $this->_do_upload();

                //delete file
                $user = $this->Model_Profileguru->get_by_id($this->session->userdata('id_guru'));
                if (file_exists('assets_guru/avatar/'.$user->photo) && $user->photo) {
                    unlink('assets_guru/avatar/'.$user->photo);
                }

                $data['photo'] = $upload;
            }
            $result = $this->Model_Profileguru->update($data, $id);
            if ($result > 0) {
                $this->updateProfil();
                $this->session->set_flashdata('msg', show_succ_msg('Data Profile Berhasil diubah, silakan lakukan login ulang!'));
                redirect('auth/profile');
            } else {
                $this->session->set_flashdata('msg', show_err_msg('Data Profile Gagal diubah'));
                redirect('auth/profile');
            }
        } else {
            $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
            redirect('auth/profile');
        }
    }

    // public function updatePassword()
    // {
    //     $this->form_validation->set_rules('passLama', 'Password Lama', 'trim|required|min_length[5]|max_length[25]');
    //     $this->form_validation->set_rules('passBaru', 'Password Baru', 'trim|required|min_length[5]|max_length[25]');
    //     $this->form_validation->set_rules('passKonf', 'Password Konfirmasi', 'trim|required|min_length[5]|max_length[25]');

    //     $id = $this->session->userdata('id');
    //     if ($this->form_validation->run() == true) {
    //         if (password_verify($this->input->post('passLama'), $this->session->userdata('password'))) {
    //             if ($this->input->post('passBaru') != $this->input->post('passKonf')) {
    //                 $this->session->set_flashdata('msg', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
    //                 redirect('auth/profile');
    //             } else {
    //                 $data = ['password' => get_hash($this->input->post('passBaru'))];
    //                 $result = $this->Model_Profileguru->update($data, $id);
    //                 if ($result > 0) {
    //                     $this->updateProfil();
    //                     $this->session->set_flashdata('msg', show_succ_msg('Password Berhasil diubah'));
    //                     redirect('auth/profile');
    //                 } else {
    //                     $this->session->set_flashdata('msg', show_err_msg('Password Gagal diubah'));
    //                     redirect('auth/profile');
    //                 }
    //             }
    //         } else {
    //             $this->session->set_flashdata('msg', show_err_msg('Password Salah'));
    //             redirect('auth/profile');
    //         }
    //     } else {
    //         $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
    //         redirect('auth/profile');
    //     }
    // }

    // private function _do_upload()
    // {
    //     $config['upload_path']          = 'assets_guru/avatar/';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['max_size']             = 100; //set max size allowed in Kilobyte
    //     $config['max_width']            = 1000; // set max width image allowed
    //     $config['max_height']           = 1000; // set max height allowed
    //     $config['file_name']            = round(microtime(true) * 1000);
    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('photo')) {
    //         $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
    //         redirect('auth/profile');
    //     }
    //     return $this->upload->data('file_name');
    // }
}
