<?php
class Userlogin extends CI_Model
{
	public function checkuservailability($uname='',$password)
	{
		$db = $this->db->query("select * from login where username='$uname' and password='$password'");
		if($db->num_rows()>0){
			$userdata = $this->getalluserdata($db);
			return $userdata;
		}else{
			return false;
		}
	}

	private function getalluserdata($db){
		$resutl = $db->result_array();
		$idlogin = $resutl[0]['id_login'];
		$ddb = $this->db->query("select * from user where id_login=$idlogin");
		if($ddb->num_rows()>0){
			$result2 = $ddb->result_array();

			$this->session->set_userdata('userrealname',$result2[0]['user_realname']);
			$this->session->set_userdata('iduser',$result2[0]['id_user']);
			$this->session->set_userdata('position',$result2[0]['position']);
			$this->session->set_userdata('ps',$result2[0]['ps']);
			$this->session->set_userdata('idlogin',$idlogin);
			return true;
		}else{
			return false;
		}

	}
}
?>