<?php
class Newsubmission extends CI_Controller
{
	function home(){
		//Untuk Menampilkan daftar ajuan sendiri
		$this->load->view('themepart/header');

		$this->load->view('themepart/footer');
	}

	function submit($idsubmission){
		$this->db->query("update submission set status_submission='submitted' where id_submission=$idsubmission ");
		redirect('home/mysubmission');
	}

	function allsubmission(){
		//untuk menampilkan daftar ajuan semua jurusan tahun x
		$this->load->view('themepart/header');

		$this->load->view('themepart/footer');
	}
	
	function loadform($formx=1,$idsubmission){
		$this->load->view('themepart/header');

		$data['formx'] = $formx;
		$data['idsubmission']=$idsubmission;
		$this->load->view('form/navigation',$data);
		$this->load->model('submission');
		switch ($formx) {
			case 1:
				$data['standar1'] = $this->submission->getdatastandar1($idsubmission);
				$this->load->view('form/standar1',$data);
			break;
			case 2:
				$data['standar2'] = $this->submission->getdatastandar2($idsubmission);
				$this->load->view('form/standar2',$data);
			break;
			case 3:
				$this->load->view('form/standar3',$data);
			break;
			case 4:
				$this->load->view('form/standar4',$data);
			break;
			case 5:
				$this->load->view('form/standar5',$data);
			break;
			case 6:
				$this->load->view('form/standar6',$data);
			break;
			case 7:
				$this->load->view('form/standar7',$data);
			break;	
			case 8:
				$this->load->view('form/confirmsubmit',$data);
			break;			
			default:
				
			break;
		}
		$this->load->view('themepart/footer');

	}

	function savestandar1(){
		$idsubmission=$this->input->post('sbms');
		$fpath = $this->input->post('fpath');

		$idattachment = $this->simpanfile($fpath);

		$this->simpanstandar1form1($idsubmission,$idattachment);

	}

	private function simpanfile($filepath){
		$this->load->model('submission');
		$idattachment = $this->submission->savefile($filepath);
		return $idattachment;

	}

	private function simpanstandar1form1($idsubmission,$idattachment){
		$this->load->model('submission');
		$this->submission->insertstandar1($idsubmission,$idattachment);
	}


	// HANDLER STANDAR 2, 3 FUNGSI BERIKUT
	function savestandar2(){
		$idsubmission=$this->input->post('sbms');
		$fpath = $this->input->post('fpath');

		$idattachment = $this->simpanfile($fpath);

		$this->simpanstandar2form1($idsubmission,$idattachment);

	}

	private function simpanstandar2form1($idsubmission,$idattachment){
		$this->load->model('submission');
		$this->submission->insertstandar2($idsubmission,$idattachment);
	}


}
?>