<?php
class Mctrl extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
		header('content-type: application/json; charset=utf-8');
	}
	function index(){
		//silent is gold
	}

	function userauth(){


		$obj = json_decode(file_get_contents('php://input'));
		$username = $obj->uname;
		$password = $obj->psw;
		// $username = "mi";
		// $password = "dewi";
		$hashedpassword = md5(clxsalt().$password);

		$datauserdb = $this->checkuservailability($username,$hashedpassword);

		if($datauserdb!=false){
			$datauserdb[0]["authencicated"]=true;
			if(isadmin()){

				echo json_encode($datauserdb);
			}else{

				echo json_encode($datauserdb);
			}
		}else{
			$datauserdb = [["authencicated"=>false]];
				echo json_encode($datauserdb);
		}
	}

	private function checkuservailability($uname='',$password)
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
			return $result2;
		}else{
			return false;
		}

	}

	function submissions(){
		$obj = json_decode(file_get_contents('php://input'));

			$this->session->set_userdata('userrealname',$obj->id_login);
			$this->session->set_userdata('iduser',$obj->id_user);
			$this->session->set_userdata('position',$obj->position);
			$this->session->set_userdata('ps',$obj->ps);
			$this->session->set_userdata('idlogin',$obj->id_login);
			$this->load->model('submission');
		 $data = $this->submission->getsubmisstedsubmissionbyothers();

		echo json_encode($data);
	}






	//--------------------- DATA MANIPULATION -------------------

	function getdata31(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q4 = $this->db->query("select * from mahasiswa_dan_lulusan where id_submission=$idsubmission order by tskex desc");
		$data4 = $q4->result();

		header('Content-Type: application/json');
		echo json_encode($data4);


	}

	function getjumlah31(){
		$idsubmission=$this->input->post('idsubmission');
		$this->load->model('submission');

		echo "<tr>
            <th>Jumlah</th>
            <td>".$this->submission->getjumlahdayatampung31($idsubmission)."</td>
            <td>".$this->submission->getjumlahmhsregikutseleksi31($idsubmission)."</td>
            <td>".$this->submission->getjumlahmhsreglulusseleksi31($idsubmission)."</td>
            <td>".$this->submission->getjumlahmhsbarubukantransfer31($idsubmission)."</td>
            <td>".$this->submission->getjumlahmhsbarutransfer31($idsubmission)."</td>
            <td>".$this->submission->getjumlahmhstotalbukantransfer31($idsubmission)."</td>
            <td>".$this->submission->getjumlahmhstotaltransfer31($idsubmission)."</td>
            <td>".$this->submission->getjumlahmhslulusanbukantransfer31($idsubmission)."</td>
            <td>".$this->submission->getjumlahmhslulusantransfer31($idsubmission)."</td>
            <td colspan='7'></td>
        </tr>";
	}


	function getdatastandar32(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;

		$this->load->model('submission');
		$s = $this->submission->selectdatastandar32($idsubmission);
		header('Content-Type: application/json');
		echo json_encode($s);

	}




	function getdatastandar33(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar33($idsubmission);
		header('Content-Type: application/json');
		echo json_encode($h);
	}



	function getdatastandar34(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar34($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}



	function getdatastandar35(){
	$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar35($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}



	function getdatastandar36(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar36($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}



	function getdatastandar37(){
			$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar37($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}



	function getdatastandar41(){
			$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar41($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}


	function getdatastandar42(){
			$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;

		$this->load->model('submission');
		$h = $this->submission->selectdatastandar42($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}



	//--------------------------


	function getdatastandar43(){
			$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar43($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}





	function getdatadetaildataajardosentetap(){
		$idparent = $this->input->post('iddataajardosentetap');
		$this->load->model('submission');
		$h = $this->submission->selectdetail44($idparent);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function simpandatadetaildataajardosentetap(){
		$modalidparent = $this->input->post('field1');
		$st4f41c1modal = $this->input->post('field2');
		$st4f41c2modal = $this->input->post('field3');
		$st4f41c3modal = $this->input->post('field4');
		$st4f41c4modal = $this->input->post('field5');
		$st4f41c5modal = $this->input->post('field6');
		$this->load->model('submission');
		$this->submission->insertdatadetaildataajardosentetap($modalidparent,$st4f41c1modal,$st4f41c2modal,$st4f41c3modal,$st4f41c4modal,$st4f41c5modal);


		echo $modalidparent;
	}

	function getdata44(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdatal44($idsubmission);
		$datacollection = array();
		/**
		the idea is to put an array of datacollection[primarydata][secondarydata]

		**/


		foreach ($h as $datautama) {
			$arrayofsecondarydata = array();
			$arrayofsecondarydata['namadosen'] =$datautama->nama_dosen;
			$rowspan = $this->countrecordbasedonparentid($datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps);
				$datasekunder = $this->getdetailbyparentid($datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps);
				$arrayofsecondarydata['bidang_keahlian'] = $datautama->bidang_keahlian;
				$arrayofsecondarydata['detail'] = $datasekunder;

				array_push($datacollection,$arrayofsecondarydata);
		}


		echo json_encode($datacollection);

	}

	function getdata45(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdatal45($idsubmission);
		$datacollection = array();
		/**
		the idea is to put an array of datacollection[primarydata][secondarydata]

		**/


		foreach ($h as $datautama) {
			$arrayofsecondarydata = array();
			$arrayofsecondarydata['namadosen'] =$datautama->nama_dosen;
			$rowspan = $this->countrecordbasedonparentid($datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps);
				$datasekunder = $this->getdetailbyparentid($datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps);
				$arrayofsecondarydata['bidang_keahlian'] = $datautama->bidang_keahlian;
				$arrayofsecondarydata['detail'] = $datasekunder;

				array_push($datacollection,$arrayofsecondarydata);
		}


		echo json_encode($datacollection);

	}
	// with this down function from function above
	private function getdetailbyparentid($idparent){
		$this->load->model('submission');
		$h = $this->submission->selectdetail44($idparent);
		return $h;
	}

	private function countrecordbasedonparentid($parentid){
		$result = $this->db->query("select * from detail_data_ajar_dosen_tetap_bidang_sesuai_ps where id_data_ajar_dosen_tetap_bidang_sesuai_ps=$parentid");

		return $result->num_rows();

	}
	//------------------------------------------------








	function getdata46(){
			$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdata46($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function gettotal46(){
		$idsubmission=$this->input->post('idsubmission');

		$q = $this->db->query("select sum(jumlah_kelas) as jk, sum(jumlah_pertemuan_direncanakan) as jpr, sum(jumlah_pertemuan_terlaksana) as jpt from data_ajar_dosen_tetap_keahlian_diluar_bidang_ps where id_submission=$idsubmission");
		$data = $q->result();
		echo "

		<tr>

			<td colspan='5'>Total</td>
			<td>".$data[0]->jk."</td>
			<td>".$data[0]->jpr."</td>
			<td>".$data[0]->jpt."</td>";
			if(isdraf($idsubmission)){
				echo "<td></td>";
			}

		echo "</tr>

		";
	}






	function getdatastandar47(){
			$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar47($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}



	function getdata48(){
			$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdata48($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}


	function getdata49(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdata49($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}



	function getdata410(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->load->model('submission');
		$h = $this->submission->selectdata410($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}



	function getdetail411(){
		$idparent = $this->input->post('idprnt');
		$hs = $this->db->query("select * from detail_kegiatan_dosen_tetap_dalam_seminar where id_kegiatan_dosen_tetap_dalam_seminar=$idparent");
		$data = $hs->result();
		foreach ($data as $dt) {
			echo "<tr>";
				echo "<td>".$dt->jenis_kegiatan."</td>";
				echo "<td>".$dt->tempat."</td>";
				echo "<td>".$dt->waktu."</td>";
				echo "<td> ";
					if($dt->penyaji==1){echo ' &#10004 ';}
				echo " </td>";
				echo "<td> ";
					if($dt->peserta==1){echo ' &#10004 ';}
				echo " </td>";
				echo "<td><a href='".base_url('submissionfile/download')."/".$dt->id_attachmentfile."'>Download File</a></td>";
				echo "<td><button class='btn btn-danger' onClick='hapusdetail411(".$dt->id_detail_kegiatan_dosen_tetap_dalam_seminar.",".$dt->id_kegiatan_dosen_tetap_dalam_seminar.")'><span class='glyphicon glyphicon-remove'></span></td>";

			echo "</tr>";
		}
	}

	function getdata411(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;

		$duquery = $this->db->query("select * from kegiatan_dosen_tetap_dalam_seminar where id_submission=$idsubmission");
		$datautama = $duquery->result();
		$nmr=1;
		foreach ($datautama as $du) {
				$rowspan = $this->countitembasedparent($du->id_kegiatan_dosen_tetap_dalam_seminar);

				$datasekunderquery = $this->db->query("select * from detail_kegiatan_dosen_tetap_dalam_seminar where id_kegiatan_dosen_tetap_dalam_seminar=".$du->id_kegiatan_dosen_tetap_dalam_seminar);
				$datasekunder = $datasekunderquery->result();

				if($rowspan==0){
					echo "<tr>";
						echo "<td>".$nmr."</td>";
						echo "<td>".$du->nama_dosen."</td>";
							echo "<td></td>";
							echo "<td></td>";
							echo "<td></td>";
							echo "<td></td>";
							echo "<td></td>";
							echo "<td></td>";
						if(isdraf($idsubmission)){

						echo "<th><button class='btn btn-danger' onClick='hapusdata411(".$du->id_kegiatan_dosen_tetap_dalam_seminar.")'><span class='glyphicon glyphicon-remove'></span></th>";
						}

					echo "</tr>";
				}elseif ($rowspan==1) {
					echo "<tr>";
						echo "<td>".$nmr."</td>";
						echo "<td>".$du->nama_dosen."</td>";
							echo "<td>".$datasekunder[0]->jenis_kegiatan."</td>";
							echo "<td>".$datasekunder[0]->tempat."</td>";
							echo "<td>".$datasekunder[0]->waktu."</td>";
							echo "<td> ";
								if($datasekunder[0]->penyaji==1){echo ' &#10004 ';}
							echo " </td>";
							echo "<td> ";
								if($datasekunder[0]->peserta==1){echo ' &#10004 ';}
							echo " </td>";
							echo "<td><a href='".base_url('submissionfile/download')."/".$datasekunder[0]->id_attachmentfile."'>Download File</a></td>";
						if(isdraf($idsubmission)){

						echo "<th><button class='btn btn-danger' onClick='hapusdata411(".$du->id_kegiatan_dosen_tetap_dalam_seminar.")'><span class='glyphicon glyphicon-remove'></span></th>";
						}

					echo "</tr>";
				}else{
					$idb = 1;


					foreach ($datasekunder as $ds) {

							if ($idb==1) {
								echo "<tr>";
									echo "<td rowspan='$rowspan'>".$nmr."</td>";
									echo "<td rowspan='$rowspan'>".$du->nama_dosen."</td>";
										echo "<td>".$ds->jenis_kegiatan."</td>";
										echo "<td>".$ds->tempat."</td>";
										echo "<td>".$ds->waktu."</td>";
										echo "<td> ";
											if($ds->penyaji==1){echo ' &#10004 ';}
										echo " </td>";
										echo "<td> ";
											if($ds->peserta==1){echo ' &#10004 ';}
										echo " </td>";
										echo "<td><a href='".base_url('submissionfile/download')."/".$ds->id_attachmentfile."'>Download File</a></td>";
									if(isdraf($idsubmission)){

									echo "<th rowspan='$rowspan'><button class='btn btn-danger' onClick='hapusdata411(".$du->id_kegiatan_dosen_tetap_dalam_seminar.")'><span class='glyphicon glyphicon-remove'></span></th>";
									}
								echo "</tr>";
							}else{
								echo "<tr>";
										echo "<td>".$ds->jenis_kegiatan."</td>";
										echo "<td>".$ds->tempat."</td>";
										echo "<td>".$ds->waktu."</td>";
										echo "<td> ";
											if($ds->penyaji==1){echo ' &#10004 ';}
										echo " </td>";
										echo "<td> ";
											if($ds->peserta==1){echo ' &#10004 ';}
										echo " </td>";
										echo "<td><a href='".base_url('submissionfile/download')."/".$ds->id_attachmentfile."'>Download File</a></td>";


								echo "</tr>";
							}
						$idb++;
					}
				}



			$nmr++;
		}
	}

	private function countitembasedparent($parentid){
		$a = $this->db->query("select * from detail_kegiatan_dosen_tetap_dalam_seminar where id_kegiatan_dosen_tetap_dalam_seminar=$parentid");
		return $a->num_rows();
	}


	function hapusdata411(){
		$idrecord= $this->input->post('idr');
		$this->db->query("delete from kegiatan_dosen_tetap_dalam_seminar where id_kegiatan_dosen_tetap_dalam_seminar=$idrecord");
		$this->db->query("delete from detail_kegiatan_dosen_tetap_dalam_seminar where id_kegiatan_dosen_tetap_dalam_seminar=$idrecord");
	}


	function simpaninduk412(){
		$idsubmission = $this->input->post('idsubmission');
		$namadosen = $this->input->post('namadosen');

		$data = array('nama_dosen'=>$namadosen,'id_submission'=>$idsubmission);
		$this->db->insert('pencapaian_prestasi_dosen',$data);
		echo $this->db->insert_id();
	}

	function simpandetail412(){
		$st4f412c1modal= $this->input->post('field1');
		$st4f412c2modal= $this->input->post('field2');
		$st4f412c4modal= $this->input->post('field3');
		$st4f412c5modal= $this->input->post('field4');
		$st4f412c6modal= $this->input->post('field5');

		$data = array(
			      'prestasi_yang_dicapai'=>$st4f412c1modal,
			      'waktu_pencapaian'=>$st4f412c2modal,
			      'tingkat'=>$st4f412c4modal,
			      'id_attachmentfile'=>$st4f412c5modal,
			      'id_pencapaian_prestasi_dosen'=>$st4f412c6modal
			);
		$this->db->insert('detail_pencapaian_prestasi_dosen',$data);
	}

	function getdetail412(){
		$idparent = $this->input->post('idp');
		$data =  $this->db->query("select * from detail_pencapaian_prestasi_dosen where id_pencapaian_prestasi_dosen=$idparent");
		$datatabel = $data->result();
		foreach ($datatabel as $dt) {
			echo "<tr>";
				echo "<td>".$dt->prestasi_yang_dicapai."</td>";
				echo "<td>".$dt->waktu_pencapaian."</td>";
				echo "<td>".$dt->tingkat."</td>";
				echo "<td><a href='".base_url('submissionfile/download')."/".$dt->id_attachmentfile."'>Download File</a></td>";
				echo "<th rowspan='$rowspan'><button class='btn btn-danger' onClick='hapusdetail412(".$dt->id_detail_pencapaian_prestasi_dosen.",".$dt->id_pencapaian_prestasi_dosen.")'><span class='glyphicon glyphicon-remove'></span></th>";
			echo "</tr>";
		}
	}

	function hapusdetail412(){
		$idrecord = $this->input->post('idr');
		$this->db->query("delete from detail_pencapaian_prestasi_dosen where id_detail_pencapaian_prestasi_dosen=$idrecord");
	}

	function loadtable412(){
		$idsubmission = $this->input->post('idsubmission');
		$querydataprimer = $this->db->query("select * from pencapaian_prestasi_dosen where id_submission=$idsubmission");
		$dataprimer = $querydataprimer->result();
		$nmr=1;
		foreach ($dataprimer as $dp) {
			$rowspan = $this->countprestasidosenbyparentid($dp->id_pencapaian_prestasi_dosen);

			$querydatasekunder = $this->db->query("select * from detail_pencapaian_prestasi_dosen where id_pencapaian_prestasi_dosen=".$dp->id_pencapaian_prestasi_dosen);
			$datasekunder=$querydatasekunder->result();
			if($rowspan==0){
				echo "<tr>";
					echo "<td>$nmr</td>";
					echo "<td>".$dp->nama_dosen."</td>";
					echo "<td></td>";
					echo "<td></td>";
					echo "<td></td>";
					echo "<td></td>";
					if(isdraf($idsubmission)){
						echo "<th><button class='btn btn-danger' onClick='hapusdata412(".$dp->id_pencapaian_prestasi_dosen.")'><span class='glyphicon glyphicon-remove'></span></th>";
					}

				echo "</tr>";
			}elseif ($rowspan==1) {
				echo "<tr>";
					echo "<td>$nmr</td>";
					echo "<td>".$dp->nama_dosen."</td>";
					echo "<td>".$datasekunder[0]->prestasi_yang_dicapai."</td>";
					echo "<td>".$datasekunder[0]->waktu_pencapaian."</td>";
					echo "<td>".$datasekunder[0]->tingkat."</td>";
					echo "<td><a href='".base_url('submissionfile/download')."/".$datasekunder[0]->id_attachmentfile."'>Download File</a></td>";
					if(isdraf($idsubmission)){
						echo "<th><button class='btn btn-danger' onClick='hapusdata412(".$dp->id_pencapaian_prestasi_dosen.")'><span class='glyphicon glyphicon-remove'></span></th>";
					}

				echo "</tr>";
			}else{
				$dd = 1;

				foreach ($datasekunder as $ds) {

					if($dd==1){
						echo "<tr>";
							echo "<td rowspan='$rowspan'>$nmr</td>";
							echo "<td rowspan='$rowspan'>".$dp->nama_dosen."</td>";
								echo "<td>".$ds->prestasi_yang_dicapai."</td>";
								echo "<td>".$ds->waktu_pencapaian."</td>";
								echo "<td>".$ds->tingkat."</td>";
								echo "<td><a href='".base_url('submissionfile/download')."/".$ds->id_attachmentfile."'>Download File</a></td>";
							if(isdraf($idsubmission)){
								echo "<th rowspan='$rowspan'><button class='btn btn-danger' onClick='hapusdata412(".$dp->id_pencapaian_prestasi_dosen.")'><span class='glyphicon glyphicon-remove'></span></th>";
							}

						echo "</tr>";
					}else{
						echo "<tr>";

								echo "<td>".$ds->prestasi_yang_dicapai."</td>";
								echo "<td>".$ds->waktu_pencapaian."</td>";
								echo "<td>".$ds->tingkat."</td>";
								echo "<td><a href='".base_url('submissionfile/download')."/".$ds->id_attachmentfile."'>Download File</a></td>";

						echo "</tr>";
					}

					$dd++;
				}


			}

			$nmr++;
		}
	}
	private function countprestasidosenbyparentid($parentid){
		$c = $this->db->query("select * from detail_pencapaian_prestasi_dosen where id_pencapaian_prestasi_dosen=$parentid");
		return $c->num_rows();
	}

	function hapusdata412(){
		$idrecord = $this->input->post('idr');
		$this->db->query("delete from pencapaian_prestasi_dosen where id_pencapaian_prestasi_dosen=$idrecord");
		$this->db->query("delete from detail_pencapaian_prestasi_dosen where id_pencapaian_prestasi_dosen=$idrecord");
	}

	//--------------EoC 412

	function simpaninduk413(){
		$idsubmission = $this->input->post('idsubmission');
		$namadosen = $this->input->post('namadosen');

		$data = array('nama_dosen'=>$namadosen,'id_submission'=>$idsubmission);
		$this->db->insert('keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan',$data);
		echo $this->db->insert_id();
	}




	function simpandetail413(){
		$st4f413c1modal= $this->input->post('field1');
		$st4f413c2modal= $this->input->post('field2');
		$st4f413c4modal= $this->input->post('field3');
		$st4f413c5modal= $this->input->post('field4');
		$st4f413c6modal= $this->input->post('field5');

		$data = array(
			      'nama_organisasi_keilmuan'=>$st4f413c1modal,
			      'kurun_waktu'=>$st4f413c2modal,
			      'tingkat'=>$st4f413c4modal,
			      'id_attachmentfile'=>$st4f413c5modal,
			      'id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan'=>$st4f413c6modal
			);
		$this->db->insert('detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan',$data);
	}

	function getdetail413(){
		$idparent = $this->input->post('idp');
		$data =  $this->db->query("select * from detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan where id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan=$idparent");
		$datatabel = $data->result();
		foreach ($datatabel as $dt) {
			echo "<tr>";
				echo "<td>".$dt->nama_organisasi_keilmuan."</td>";
				echo "<td>".$dt->kurun_waktu."</td>";
				echo "<td>".$dt->tingkat."</td>";
				echo "<td><a href='".base_url('submissionfile/download')."/".$dt->id_attachmentfile."'>Download File</a></td>";
				echo "<th rowspan='$rowspan'><button class='btn btn-danger' onClick='hapusdetail413(".$dt->id_detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan.",".$dt->id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan.")'><span class='glyphicon glyphicon-remove'></span></th>";
			echo "</tr>";
		}
	}

	function hapusdetail413(){
		$idrecord = $this->input->post('idr');
		$this->db->query("delete from detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan where id_detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan=$idrecord");
	}

	function loadtable413(){
		$idsubmission = $this->input->post('idsubmission');
		$querydataprimer = $this->db->query("select * from keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan where id_submission=$idsubmission");
		$dataprimer = $querydataprimer->result();
		$nmr=1;
		foreach ($dataprimer as $dp) {
			$rowspan = $this->countporganisasidosenbyparentid($dp->id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan);

			$querydatasekunder = $this->db->query("select * from detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan where id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan=".$dp->id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan);
			$datasekunder=$querydatasekunder->result();
			if($rowspan==0){
				echo "<tr>";
					echo "<td>$nmr</td>";
					echo "<td>".$dp->nama_dosen."</td>";
					echo "<td></td>";
					echo "<td></td>";
					echo "<td></td>";
					echo "<td></td>";
					if(isdraf($idsubmission)){
						echo "<th><button class='btn btn-danger' onClick='hapusdata413(".$dp->id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan.")'><span class='glyphicon glyphicon-remove'></span></th>";
					}

				echo "</tr>";
			}elseif ($rowspan==1) {
				echo "<tr>";
					echo "<td>$nmr</td>";
					echo "<td>".$dp->nama_dosen."</td>";
					echo "<td>".$datasekunder[0]->nama_organisasi_keilmuan."</td>";
					echo "<td>".$datasekunder[0]->kurun_waktu."</td>";
					echo "<td>".$datasekunder[0]->tingkat."</td>";
					echo "<td><a href='".base_url('submissionfile/download')."/".$datasekunder[0]->id_attachmentfile."'>Download File</a></td>";
					if(isdraf($idsubmission)){
						echo "<th><button class='btn btn-danger' onClick='hapusdata413(".$dp->id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan.")'><span class='glyphicon glyphicon-remove'></span></th>";
					}
				echo "</tr>";
			}else{
				$dd = 1;

				foreach ($datasekunder as $ds) {

					if($dd==1){
						echo "<tr>";
							echo "<td rowspan='$rowspan'>$nmr</td>";
							echo "<td rowspan='$rowspan'>".$dp->nama_dosen."</td>";
								echo "<td>".$ds->nama_organisasi_keilmuan."</td>";
								echo "<td>".$ds->kurun_waktu."</td>";
								echo "<td>".$ds->tingkat."</td>";
								echo "<td><a href='".base_url('submissionfile/download')."/".$ds->id_attachmentfile."'>Download File</a></td>";
							if(isdraf($idsubmission)){
								echo "<th rowspan='$rowspan'><button class='btn btn-danger' onClick='hapusdata413(".$dp->id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan.")'><span class='glyphicon glyphicon-remove'></span></th>";
							}
						echo "</tr>";
					}else{
						echo "<tr>";

								echo "<td>".$ds->nama_organisasi_keilmuan."</td>";
								echo "<td>".$ds->kurun_waktu."</td>";
								echo "<td>".$ds->tingkat."</td>";
								echo "<td><a href='".base_url('submissionfile/download')."/".$ds->id_attachmentfile."'>Download File</a></td>";

						echo "</tr>";
					}

					$dd++;
				}


			}

			$nmr++;
		}
	}
	private function countporganisasidosenbyparentid($parentid){
		$c = $this->db->query("select * from detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan where id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan=$parentid");
		return $c->num_rows();
	}

	function hapusdata413(){
		$idrecord = $this->input->post('idr');
		$this->db->query("delete from keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan where id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan=$idrecord");
		$this->db->query("delete from detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan where id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan=$idrecord");
	}


	function simpandata414(){
		$st4f14c1 = $this->input->post('field1');
		$st4f14c2 = $this->input->post('field2');
		$st4f14c3 = $this->input->post('field3');
		$st4f14c4 = $this->input->post('field4');
		$st4f14c5 = $this->input->post('field5');
		$st4f14c6 = $this->input->post('field6');
		$st4f14c7 = $this->input->post('field7');
		$st4f14c8 = $this->input->post('field8');
		$st4f14c9 = $this->input->post('field9');
		$st4f14c10 = $this->input->post('field10');
		$idsubmission = $this->input->post('idsubmission');

		$data = array(
			'id_submission' => $idsubmission,
			'jenis_tenaga_kependidikan' => $st4f14c1,
			'jumlah_s3' => $st4f14c2,
			'jumlah_s2' => $st4f14c3,
			'jumlah_s1' => $st4f14c4,
			'jumlah_d4' => $st4f14c5,
			'jumlah_d3' => $st4f14c6,
			'jumlah_d2' => $st4f14c7,
			'jumlah_d1' => $st4f14c8,
			'jumlah_smak' => $st4f14c9,
			'unit_kerja' => $st4f14c10 );

		$this->db->insert('tenaga_kependidikan',$data);
	}

	function getdata414(){
		$idsubmission = $this->input->post('idsubmission');
		$myq  = $this->db->query("select * from tenaga_kependidikan where id_submission=$idsubmission");
		$data = $myq->result();
		$nmr=1;
		foreach ($data as $d) {
			echo "<tr>";
				echo "<td>$nmr</td>";
				echo "<td>".$d->jenis_tenaga_kependidikan."</td>";
				echo "<td>".$d->jumlah_s3."</td>";
				echo "<td>".$d->jumlah_s2."</td>";
				echo "<td>".$d->jumlah_s1."</td>";
				echo "<td>".$d->jumlah_d4."</td>";
				echo "<td>".$d->jumlah_d3."</td>";
				echo "<td>".$d->jumlah_d2."</td>";
				echo "<td>".$d->jumlah_d1."</td>";
				echo "<td>".$d->jumlah_smak."</td>";
				echo "<td>".$d->unit_kerja."</td>";
				if(isdraf($idsubmission)){
					echo "<td><button onClick='hapusdata414(".$d->id_tenaga_kependidikan.")' type='button' class='btn btn-danger'> <span class='glyphicon glyphicon-remove'></span> </button></td>";
				}
			echo "</tr>";
			$nmr++;
		}


	}
	function gettotaldata414(){
			$idsubmission = $this->input->post('idsubmission');
			$q = $this->db->query("select sum(jumlah_s3) as s3, sum(jumlah_s2) as s2, sum(jumlah_s1) as s1, sum(jumlah_d4) as d4, sum(jumlah_d3) as d3, sum(jumlah_d2) as d2, sum(jumlah_d1) as d1, sum(jumlah_smak) as smak from tenaga_kependidikan where id_submission=$idsubmission");
			$data = $q->result();
			echo "
				<tr>
				<th colspan='2'>Total</th>
				<td>".$data[0]->s3."</td>
				<td>".$data[0]->s2."</td>
				<td>".$data[0]->s1."</td>
				<td>".$data[0]->d4."</td>
				<td>".$data[0]->d3."</td>
				<td>".$data[0]->d2."</td>
				<td>".$data[0]->d1."</td>
				<td>".$data[0]->smak."</td>
				<td></td>";
				if(isdraf($idsubmission)){
					echo "<td></td>";
				}
			echo "</tr>
			";
		}

	function hapusdata414(){
		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from tenaga_kependidikan where id_tenaga_kependidikan=$idrecord");
	}
}
