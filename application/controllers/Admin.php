<?php
/**
* 
*/
class Admin extends CI_Controller
{
	  public function __construct()
       {
            parent::__construct();
            if(null !== $this->session->userdata('idlogin')){

            }else{
            	redirect('User/login');
            }
       }
	function index(){
		
		$this->load->view('themepart/header');
		$this->load->view('admin/home');
		$this->load->view('themepart/footer');
	}

	function pengguna(){
		$q = $this->db->query("select a.*, b.* from login as a, user as b where a.id_login =b.id_login");
		$data['user'] = $q->result();
		$this->load->view('themepart/header');
		$this->load->view('admin/pengguna',$data);
		$this->load->view('themepart/footer');
	}

	function detailpengguna($idlogin){
		$q= $this->db->query("select a.*, b.* from login as a, user as b where a.id_login =b.id_login and a.id_login=$idlogin");

		$data['user'] = $q->result();
		$this->load->view('themepart/header');
		$this->load->view('admin/detailpengguna',$data);
		$this->load->view('themepart/footer');
	}

	function tambahpengguna(){
		$this->load->view('themepart/header');
		$this->load->view('admin/tambahpengguna');
		$this->load->view('themepart/footer');

	}

	function pengaturan(){
		$this->load->view('themepart/header');
		$this->load->view('admin/pengaturan');
		$this->load->view('themepart/footer');

	}
	function changeusername($idlogin){
		$newusername = $this->input->post('newusername');
		$this->db->query("update login set username='$newusername' where id_login=$idlogin");
		redirect('admin/detailpengguna/'.$idlogin);
	}
	function changerealname($idlogin){
		$newrealname = $this->input->post('newrealname');
		$this->db->query("update user set user_realname='$newrealname' where id_login=$idlogin");
		redirect('admin/detailpengguna/'.$idlogin);
	}
	function changepassword($idlogin){
		$newpassword = $this->input->post('newpassword');
		$hashedpassword = md5(clxsalt().$newpassword);
		$this->db->query("update login set password='$hashedpassword' where id_login=$idlogin");
		redirect('admin/detailpengguna/'.$idlogin);
	}
	function changeps($idlogin){
		$newps = $this->input->post('newps');
		$this->db->query("update user set ps='$newps' where id_login=$idlogin");
		redirect('admin/detailpengguna/'.$idlogin);
	}
	function changeposition($idlogin){
		$newposition = $this->input->post('newposition');
		$this->db->query("update user set position='$newposition' where id_login=$idlogin");
		redirect('admin/detailpengguna/'.$idlogin);
	}
	function simpantambahpengguna(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$realname = $this->input->post('realname');
		$position = $this->input->post('position');
		$ps = $this->input->post('ps');

		$hashedpassword = md5(clxsalt().$password);
		$this->db->query("insert into login (username,password,user_capability) values ('$username','$hashedpassword','editown,viewall,createsubmission')");
		$id = $this->db->insert_id();

		$this->db->query("insert into user (user_realname,position,ps,id_login) values('$realname','$position','$ps',$id)");
		redirect('admin/pengguna');
	}

}