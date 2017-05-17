<?php
class Ajaxcontrol extends CI_Controller
{
	function saveattachmentfile(){
		$filepath = $this->input->post('fpath');
		$this->load->model('submission');
		$idattachment = $this->submission->savefile($filepath);
		echo $idattachment;
	}

	function savestanda31(){
		$arrayData = $this->input->post('arrayData');
		$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$basing = $this->submission->insertform31($arrayData,$idsubmission);

		echo $idsubmission;


		 // print_r(json_encode($arrayData));

		
	}

	function getdata31(){
		$idsubmission = $this->input->post('idsubmission');
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
	function savestanda32(){
		$idsubmission = $this->input->post('idsubmission');
		$standar32c1 = $this->input->post('field1');
		$standar32c2 = $this->input->post('field2');
		$standar32c3 = $this->input->post('field3');
		$standar32c4 = $this->input->post('field4');

		$this->load->model('submission');
		$this->submission->insertstandar32($idsubmission,$standar32c1,$standar32c2,$standar32c3,$standar32c4);

	}

	function getdatastandar32(){
		$idsubmission = $this->input->post('idsubmission');

		$this->load->model('submission');
		$s = $this->submission->selectdatastandar32($idsubmission);
		header('Content-Type: application/json');
		echo json_encode($s);

	}
	function hapusstadar32x(){
		$idrecord = $this->input->post('idpencapaian');
		$idattachment = $this->input->post('idattachmentfile');

		$this->db->query("delete from prestasi_pencapaian_mahasiswa where id_prestasi_pencapaian_mahaiswa=$idrecord");
		$this->db->query("delete from attachmentfile where id_attachmentfile=$idattachment");
		// echo $idrecord."--";
		// echo $idattachment;
	}

	function simpandatastandar33(){
		$arrayData = $this->input->post('arrayData');
		$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$this->submission->insertdata33($arrayData,$idsubmission);
	}

	function getdatastandar33(){
		$idsubmission=$this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar33($idsubmission);
		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function simpandatastandar34(){
		$st3f4c1 = $this->input->post('field1');
		$st3f4c2 = $this->input->post('field2');
		$st3f4c3 = $this->input->post('field3');
		$st3f4c4 = $this->input->post('field4');
		$st3f4c5 = $this->input->post('field5');
		$idsubmission = $this->input->post('idsubmission');

		$this->load->model('submission');
		$this->submission->insertdatastandar34($st3f4c1, $st3f4c2, $st3f4c3, $st3f4c4, $st3f4c5, $idsubmission);


		
	}

	function getdatastandar34(){
		$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar34($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function hapusdatastandar34(){
		$idlayanan = $this->input->post('idlayanan');
		$idattachment = $this->input->post('idattachmentfile');

		$this->db->query("delete from layanan_kepada_mahasiswa where id_layanan=$idlayanan");
		$this->db->query("delete from attachmentfile where id_attachmentfile=$idattachment");
	}

	function simpandatastandar35(){
		$idsubmission = $this->input->post('idsubmission');
		$st3f5c1 = $this->input->post('field1');
		$st3f5c2 = $this->input->post('field2');

		$this->load->model('submission');
		$this->submission->insertform35($idsubmission,$st3f5c1,$st3f5c2);
	}

	function getdatastandar35(){
		$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar35($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function hapusdatastandar35(){
		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from usaha_pencarian_tempat_kerja where id_usaha=$idrecord");
	}

	function simpandatastandar36(){
		$arrayData = $this->input->post('arrayData');
		$idsubmission = $this->input->post('idsubmission');

		$this->load->model('submission');
		$this->submission->insertform36($arrayData,$idsubmission);
	}

	function getdatastandar36(){
		$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar36($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function simpandatastandar37(){
		$idsubmission = $this->input->post('idsubmission');
		$st3f7c1 = $this->input->post('field1');
		$st3f7c2 = $this->input->post('field2');
		$st3f7c3 = $this->input->post('field3');
		$st3f7c4 = $this->input->post('field4');

		$this->load->model('submission');
		$this->submission->insertform37($idsubmission,$st3f7c1,$st3f7c2,$st3f7c3,$st3f7c4);
	}

	function getdatastandar37(){
			$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar37($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function hapusdatastandar37(){
		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from lembaga_pemesan_lulusan where id_pemesan=$idrecord");
	}
	function gettotal37(){
		$idsubmission=$this->input->post('idsubmission');
		$this->load->model('submission');
		echo $this->submission->hitungtotallulusandiwisuda37($idsubmission);
		echo "|";
		echo $this->submission->hitungtotallulusandipesan37($idsubmission);
	}

	function savestandar41(){
		$idsubmission = $this->input->post('idsubmission');
		$st4f1c1 = $this->input->post('field1');
		$st4f1c2 = $this->input->post('field2');
		$st4f1c3 = $this->input->post('field3');
		$st4f1c4 = $this->input->post('field4');
		$st4f1c5 = $this->input->post('field5');
		$st4f1c6 = $this->input->post('field6');
		$st4f1c7 = $this->input->post('field7');

		$this->load->model('submission');
		$this->submission->insertstandar41($idsubmission,	$st4f1c1,	$st4f1c2,	$st4f1c3,	$st4f1c4,	$st4f1c5,	$st4f1c6,	$st4f1c7);

		
	}

	function getdatastandar41(){
			$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar41($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function hapusdatastandar41(){
		$idrecord = $this->input->post('idrecord');
		$idattachment = $this->input->post('idfile');

		$this->db->query("delete from data_dosen_tetap where id_data_dosen_tetap=$idrecord");
		$this->db->query("delete from attachmentfile where id_attachmentfile=$idattachment");
	}

	//------------------------
	function savestandar42(){
		$idsubmission = $this->input->post('idsubmission');
		$st4f2c1 = $this->input->post('field1');
		$st4f2c2 = $this->input->post('field2');
		$st4f2c3 = $this->input->post('field3');
		$st4f2c4 = $this->input->post('field4');
		$st4f2c5 = $this->input->post('field5');
		$st4f2c6 = $this->input->post('field6');
		$st4f2c7 = $this->input->post('field7');

		$this->load->model('submission');
		$this->submission->insertstandar42($idsubmission,	$st4f2c1,	$st4f2c2,	$st4f2c3,	$st4f2c4,	$st4f2c5,	$st4f2c6,	$st4f2c7);

		
	}

	function getdatastandar42(){
			$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar42($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function hapusdatastandar42(){
		$idrecord = $this->input->post('idrecord');
		$idattachment = $this->input->post('idfile');

		$this->db->query("delete from data_dosen_tetap_diluar_bidang_ps where id_data_dosen_tetap_diluar_bidang_ps=$idrecord");
		$this->db->query("delete from attachmentfile where id_attachmentfile=$idattachment");
	}

	//--------------------------
	function savestandar43(){
$idsubmission = $this->input->post('idsubmission');
$st4f3c1 = $this->input->post('field1');
$st4f3c2 = $this->input->post('field2');
$st4f3c3 = $this->input->post('field3');
$st4f3c4 = $this->input->post('field4');
$st4f3c5 = $this->input->post('field5');
$st4f3c6 = $this->input->post('field6');
$st4f3c7 = $this->input->post('field7');
$st4f3c8 = $this->input->post('field8');
$st4f3c9 = $this->input->post('field9');
$st4f3c10 = $this->input->post('field10');
$st4f3c11 = $this->input->post('field11');
$st4f3c12 = $this->input->post('field12');
$st4f3c13 = $this->input->post('field13');

	$this->load->model('submission');
	$this->submission->insertstandar43($idsubmission,$st4f3c1,$st4f3c2,$st4f3c3,$st4f3c4,$st4f3c5,$st4f3c6,$st4f3c7,$st4f3c8,$st4f3c9,$st4f3c10,$st4f3c11,$st4f3c12,$st4f3c13);




	}

	function getdatastandar43(){
		$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar43($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function hapusdatastandar43(){
		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from aktivitas_dosen_tetap_sesuai_ps where id_aktivitas_dosen_tetap_sesuai_ps=$idrecord");
	}

	function tambahdosen44(){
		$nama = $this->input->post('field1');
		$bidang = $this->input->post('field2');
		$smstr = $this->input->post('field3');
		$idsubmission = $this->input->post('idsubmission');

		$this->load->model('submission');
		$iddataajardosentetap = $this->submission->insertdosenstandar44($idsubmission,$nama,$bidang,$smstr);
		echo $iddataajardosentetap;

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
		$idsubmission = $this->input->post('idsubmission');

		$this->load->model('submission');
		$h = $this->submission->selectdatal44($idsubmission);
		$no =1;
		

		foreach ($h as $datautama) {
			$rowspan = $this->countrecordbasedonparentid($datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps);

			
				
				$datasekunder = $this->getdetailbyparentid($datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps);

				if($rowspan==0){
					echo '<tr>';
					echo '<th rowspan="1">'.$no.'</th>';
					echo '<th rowspan="1">'.$datautama->nama_dosen.'</th>';
					echo '<th rowspan="1">'.$datautama->bidang_keahlian.'</th>';
							echo '<td></td>';
							echo '<td></td>';
							echo '<td></td>';
							echo '<td></td>';
							echo '<td></td>';
					if(isdraf($idsubmission)){

						echo '<th rowspan="1"><button type="button" onClick="hapusdata44('.$datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps.')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></th>';
					}
					echo '</tr>';

				}elseif ($rowspan==1) {
					echo '<tr>';
					echo '<th rowspan="1">'.$no.'</th>';
					echo '<th rowspan="1">'.$datautama->nama_dosen.'</th>';
					echo '<th rowspan="1">'.$datautama->bidang_keahlian.'</th>';
					foreach ($datasekunder as $ds) {
							echo '<td>'.$ds->kode_matakuliah.'</td>';
							echo '<td>'.$ds->nama_matakuliah.'</td>';
							echo '<td>'.$ds->jumlah_kelas.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_direncanakan.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_terlaksana.'</td>';
					}
					if(isdraf($idsubmission)){

						echo '<th rowspan="1"><button type="button" onClick="hapusdata44('.$datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps.')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></th>';
					}
					echo '</tr>';
				}else{
					$bb =1;
					foreach ($datasekunder as $ds) {
						if($bb==1){
							echo '<tr>';
							echo '<th rowspan="'.$rowspan.'">'.$no.'</th>';
							echo '<th rowspan="'.$rowspan.'">'.$datautama->nama_dosen.'</th>';
							echo '<th rowspan="'.$rowspan.'">'.$datautama->bidang_keahlian.'</th>';
							echo '<td>'.$ds->kode_matakuliah.'</td>';
							echo '<td>'.$ds->nama_matakuliah.'</td>';
							echo '<td>'.$ds->jumlah_kelas.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_direncanakan.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_terlaksana.'</td>';
							if(isdraf($idsubmission)){

								echo '<th rowspan="'.$rowspan.'"><button type="button" onClick="hapusdata44('.$datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps.')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></th>';
							}
							echo '</tr>';

						}else{

							echo '<tr>';
							echo '<td>'.$ds->kode_matakuliah.'</td>';
							echo '<td>'.$ds->nama_matakuliah.'</td>';
							echo '<td>'.$ds->jumlah_kelas.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_direncanakan.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_terlaksana.'</td>';
							echo '</tr>';
						}
					$bb++;
					}
				}
				
			$no++;
		}
		
	}
	function gettotal44(){
		$idsubmission=$this->input->post('idsubmission');
		$semester=$this->input->post('semester');
		$q = $this->db->query("select sum(b.jumlah_kelas) as jk, sum(b.jumlah_pertemuan_direncanakan) as jpr, sum(b.jumlah_pertemuan_terlaksana) as jpt from data_ajar_dosen_tetap_bidang_sesuai_ps as a, detail_data_ajar_dosen_tetap_bidang_sesuai_ps as b where a.id_data_ajar_dosen_tetap_bidang_sesuai_ps=b.id_data_ajar_dosen_tetap_bidang_sesuai_ps and a.id_submission=$idsubmission and a.semester=$semester");
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
	function getdata45(){
		$idsubmission = $this->input->post('idsubmission');

		$this->load->model('submission');
		$h = $this->submission->selectdatal45($idsubmission);
		$no =1;
		

		foreach ($h as $datautama) {
			$rowspan = $this->countrecordbasedonparentid($datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps);

			
				
				$datasekunder = $this->getdetailbyparentid($datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps);

				if($rowspan==0){
					echo '<tr>';
					echo '<th rowspan="1">'.$no.'</th>';
					echo '<th rowspan="1">'.$datautama->nama_dosen.'</th>';
					echo '<th rowspan="1">'.$datautama->bidang_keahlian.'</th>';
							echo '<td></td>';
							echo '<td></td>';
							echo '<td></td>';
							echo '<td></td>';
							echo '<td></td>';
					if(isdraf($idsubmission)){

						echo '<th rowspan="1"><button type="button" onClick="hapusdata44('.$datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps.')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></th>';
					}echo '</tr>';

				}elseif ($rowspan==1) {
					echo '<tr>';
					echo '<th rowspan="1">'.$no.'</th>';
					echo '<th rowspan="1">'.$datautama->nama_dosen.'</th>';
					echo '<th rowspan="1">'.$datautama->bidang_keahlian.'</th>';
					foreach ($datasekunder as $ds) {
							echo '<td>'.$ds->kode_matakuliah.'</td>';
							echo '<td>'.$ds->nama_matakuliah.'</td>';
							echo '<td>'.$ds->jumlah_kelas.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_direncanakan.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_terlaksana.'</td>';
					}
					if(isdraf($idsubmission)){

						echo '<th rowspan="1"><button type="button" onClick="hapusdata44('.$datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps.')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></th>';
					}
					echo '</tr>';
				}else{
					$bb =1;
					foreach ($datasekunder as $ds) {
						if($bb==1){
							echo '<tr>';
							echo '<th rowspan="'.$rowspan.'">'.$no.'</th>';
							echo '<th rowspan="'.$rowspan.'">'.$datautama->nama_dosen.'</th>';
							echo '<th rowspan="'.$rowspan.'">'.$datautama->bidang_keahlian.'</th>';
							echo '<td>'.$ds->kode_matakuliah.'</td>';
							echo '<td>'.$ds->nama_matakuliah.'</td>';
							echo '<td>'.$ds->jumlah_kelas.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_direncanakan.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_terlaksana.'</td>';
							if(isdraf($idsubmission)){

								echo '<th rowspan="1"><button type="button" onClick="hapusdata44('.$datautama->id_data_ajar_dosen_tetap_bidang_sesuai_ps.')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></th>';
							}echo '</tr>';

						}else{

							echo '<tr>';
							echo '<td>'.$ds->kode_matakuliah.'</td>';
							echo '<td>'.$ds->nama_matakuliah.'</td>';
							echo '<td>'.$ds->jumlah_kelas.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_direncanakan.'</td>';
							echo '<td>'.$ds->jumlah_pertemuan_terlaksana.'</td>';
							echo '</tr>';
						}
					$bb++;
					}
				}
				
			$no++;
		}
		
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



	function hapusdetail44(){
		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from detail_data_ajar_dosen_tetap_bidang_sesuai_ps where id_detail_data_ajar_dosen_tetap_bidang_sesuai_ps=$idrecord");
	}
	function hapus44(){
		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from data_ajar_dosen_tetap_bidang_sesuai_ps where id_data_ajar_dosen_tetap_bidang_sesuai_ps=$idrecord");
		$result = $this->db->query("delete from detail_data_ajar_dosen_tetap_bidang_sesuai_ps where id_data_ajar_dosen_tetap_bidang_sesuai_ps=$idrecord");
	}



	function simpandata46(){
		$idsubmission = $this->input->post('idsubmission');
		$st4f6c1 = $this->input->post('field1');
		$st4f6c2 = $this->input->post('field2');
		$st4f6c3 = $this->input->post('field3');
		$st4f6c4 = $this->input->post('field4');
		$st4f6c5 = $this->input->post('field5');
		$st4f6c6 = $this->input->post('field6');
		$st4f6c7 = $this->input->post('field7');

		$this->load->model('submission');
		$this->submission->insertdata46($idsubmission,$st4f6c1,$st4f6c2,$st4f6c3,$st4f6c4,$st4f6c5,$st4f6c6,$st4f6c7);

	}

	function getdata46(){
		$idsubmission = $this->input->post('idsubmission');
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

	function hapusdata46(){
		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from data_ajar_dosen_tetap_keahlian_diluar_bidang_ps where id_data_ajar_dosen_tetap_keahlian_diluar_bidang_ps=$idrecord");
	}


	function savestandar47(){
		$idsubmission = $this->input->post('idsubmission');
		$st4f1c1 = $this->input->post('field1');
		$st4f1c2 = $this->input->post('field2');
		$st4f1c3 = $this->input->post('field3');
		$st4f1c4 = $this->input->post('field4');
		$st4f1c5 = $this->input->post('field5');
		$st4f1c6 = $this->input->post('field6');
		$st4f1c7 = $this->input->post('field7');

		$this->load->model('submission');
		$this->submission->insertstandar47($idsubmission,	$st4f1c1,	$st4f1c2,	$st4f1c3,	$st4f1c4,	$st4f1c5,	$st4f1c6,	$st4f1c7);

		
	}

	function getdatastandar47(){
			$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdatastandar47($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function hapusdatastandar47(){
		$idrecord = $this->input->post('idrecord');
		$idattachment = $this->input->post('idfile');

		$this->db->query("delete from data_dosen_tidak_tetap where id_data_dosen_tidak_tetap=$idrecord");
		$this->db->query("delete from attachmentfile where id_attachmentfile=$idattachment");
	}

	function simpandata48(){
		$idsubmission = $this->input->post('idsubmission');
		$st4f6c1 = $this->input->post('field1');
		$st4f6c2 = $this->input->post('field2');
		$st4f6c3 = $this->input->post('field3');
		$st4f6c4 = $this->input->post('field4');
		$st4f6c5 = $this->input->post('field5');
		$st4f6c6 = $this->input->post('field6');
		$st4f6c7 = $this->input->post('field7');	
		$st4f6c8 = $this->input->post('field8');


		$this->load->model('submission');
		$this->submission->insertdata48($idsubmission,$st4f6c1,$st4f6c2,$st4f6c3,$st4f6c4,$st4f6c5,$st4f6c6,$st4f6c7,$st4f6c8);

	}

	function getdata48(){
		$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdata48($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}
	function gettotal48(){
		$idsubmission=$this->input->post('idsubmission');
	
		$q = $this->db->query("select sum(jumlah_kelas) as jk, sum(jumlah_pertemuan_direncanakan) as jpr, sum(jumlah_pertemuan_terlaksana) as jpt from data_ajar_dosen_tidak_tetap where id_submission=$idsubmission");
		$data = $q->result();
		echo "

		<tr>
			
			<td colspan='5'>Total</td>
			<td>".$data[0]->jk."</td>
			<td>".$data[0]->jpr."</td>
			<td>".$data[0]->jpt."</td>";
			echo "<td></td>";
			if(isdraf($idsubmission)){
				echo "<td></td>";

			}
			
		echo "</tr>

		";
	}
	function hapusdata48(){
		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from data_ajar_dosen_tidak_tetap where id_data_ajar_dosen_tidak_tetap=$idrecord");
	}

	function getdata49(){
		$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdata49($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function simpandata49(){
		$st4f9c1 = $this->input->post('field1');
		$st4f9c2 = $this->input->post('field2');
		$st4f9c3 = $this->input->post('field3');
		$st4f9c4 = $this->input->post('field4');
		$idsubmission = $this->input->post('idsubmission');

		$this->load->model('submission');
		$this->submission->insertdata49($st4f9c1,$st4f9c2,$st4f9c3,$st4f9c4,$idsubmission);

	}
	function hapusdata49(){
		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from kegiatan_tenaga_ahli where id_kegiatan_tenaga_ahli=$idrecord");
	}

	function simpandata410(){
		$idsubmission = $this->input->post('idsubmission');
		$st4f10c1 = $this->input->post('field1');
		$st4f10c2 = $this->input->post('field2');
		$st4f10c3 = $this->input->post('field3');
		$st4f10c4 = $this->input->post('field4');
		$st4f10c5 = $this->input->post('field5');
		$st4f10c6 = $this->input->post('field6');
		$st4f10c7 = $this->input->post('field7');	
		


		$this->load->model('submission');
		$this->submission->insertdata410($idsubmission,$st4f10c1,$st4f10c2,$st4f10c3,$st4f10c4,$st4f10c5,$st4f10c6,$st4f10c7);

	}

	function getdata410(){
		$idsubmission = $this->input->post('idsubmission');
		$this->load->model('submission');
		$h = $this->submission->selectdata410($idsubmission);

		header('Content-Type: application/json');
		echo json_encode($h);
	}

	function hapusdata410(){
		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from peningkatan_kemampuan_dosen where id_peningkatan_kemampuan_dosen=$idrecord");
	}

	function simpaninduk411(){
		$idsubmission = $this->input->post('idsubmission');
		$namadosen = $this->input->post('namadosen');

		$data = array('nama_dosen' => $namadosen,'id_submission' => $idsubmission );
		$this->db->insert("kegiatan_dosen_tetap_dalam_seminar",$data);
		echo $this->db->insert_id();

	}
	function simpandetail411(){
		$st4f411c1modal = $this->input->post('field1');
		$st4f411c2modal = $this->input->post('field2');
		$st4f411c3modal = $this->input->post('field3');
		$st4f411c4modal = $this->input->post('field4');
		$st4f411c5modal = $this->input->post('field5');
		$st4f411c6modal = $this->input->post('field6');
		$st4f411c7modal = $this->input->post('field7');
		$data = array(
		
			'jenis_kegiatan'=> $st4f411c1modal,
			'tempat'=> $st4f411c2modal,
			'waktu'=> $st4f411c3modal,
			'penyaji'=> $st4f411c4modal,
			'peserta'=> $st4f411c5modal,
			'id_attachmentfile'=> $st4f411c6modal,
			'id_kegiatan_dosen_tetap_dalam_seminar'=> $st4f411c7modal
			);

		$this->db->insert('detail_kegiatan_dosen_tetap_dalam_seminar',$data);
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

	function hapusdetail411(){
		$idrecord = $this->input->post('idr');
		$this->db->query("delete from detail_kegiatan_dosen_tetap_dalam_seminar where id_detail_kegiatan_dosen_tetap_dalam_seminar=$idrecord");
	}

	function getdata411(){
		$idsubmission = $this->input->post('idsubmission');
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



?>
