<?php
class User extends CI_Controller
{
	function login(){
		$this->load->view('themepart/header');
		$this->load->view('user/loginform');
		$this->load->view('themepart/footer');
	}

	public function auth(){
		$username = $this->input->post('uname');
		$password = $this->input->post('psw');
		$hashedpassword = md5(clxsalt().$password);

		$this->load->model('Userlogin');
		if($this->Userlogin->checkuservailability($username,$hashedpassword)){
			if(isadmin()){
				redirect('admin');
			}else{
			redirect('home');
				
			}
		}else{
			redirect('user/login');
		}

	}
	public function usercan($capability=''){
		//if usercan(capability string) maka cek apakah user yang sedang login memiliki kemampuan seperti string yang diminta, jika ya return true jika tidak return false
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('user/login');
	}
}

?>