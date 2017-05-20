<?php
class Mctrl1 extends CI_Controller
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




	private function digitalkeromawi($digital){
		switch ($digital) {
			case 1:
				return 'I';
			break;
			case 2:
				return 'II';
			break;
			case 3:
				return 'III';
			break;
			case 4:
				return 'IV';
			break;
			case 5:
				return 'V';
			break;
			case 6:
				return 'VI';
			break;
			case 7:
				return 'VII';
			break;
			case 8:
				return 'VIII';
			break;
			default:
				return $digital;
			break;
		}
	}
	function getdata51(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;

		$q = $this->db->query("select * from struktur_kurikulum where id_submission=$idsubmission order by semester asc");
		$data = $q->result();
		echo json_encode($data);

	}



	function getdata52(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from substansi_praktikum where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);
	}



	function getdata53(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q0 = $this->db->query("select * from submission where id_submission=$idsubmission");
		$data0 = $q0->result();
		$ta1 = $data0[0]->tahun-2;
		$ta2 = $data0[0]->tahun-1;
		$ta = $ta1."/".$ta2;

		$q1 = $this->db->query("select * from contoh_soal where id_submission=$idsubmission and semester=1");
		$data1 = $q1->result();
		$q2 = $this->db->query("select * from contoh_soal where id_submission=$idsubmission and semester=2");
		$data2 = $q2->result();

		$dtgab  = array($data1 ,$data2 );
		echo json_encode($dtgab);



	}




	function getdata54(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from hasil_peninjauan_silabus where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);
	}


	function getdata55(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from data_dosen_wali where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);
	}


	function calculatetotalst5f5c2(){
		$idsubmission = $this->input->post('idsubmission');
		$d = $this->db->query("select sum(jumlah_mahasiswa) as jm from data_dosen_wali where id_submission=$idsubmission");
		$data = $d->result();
		echo $data[0]->jm;
	}



	function getdata56(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		//construct th1
		$q1 = $this->db->query("select * from data_dosen_pembimbing where id_submission=$idsubmission order by th asc");
			$data1 = $q1->result();
			echo json_encode($data1);


	}
	private function countitemthxdosenpembimbing($th,$ids){
		$d = $this->db->query("select * from data_dosen_pembimbing where id_submission=$ids and th=$th");
		return $d->num_rows();
	}
	private function sumallmahasiswathxdosenpembimbing($th,$ids){
		$d = $this->db->query("select *,sum(jumlah_mahasiswa) as jm from data_dosen_pembimbing where id_submission=$ids and th=$th");
		$rst = $d->result();
		return $rst[0]->jm;
	}



	function getdata57(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from keselamatan_kerja where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);

	}


	function getdata61(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;

		$this->db->where('id_submission',$idsubmission);
		$q = $this->db->get('realisasi_perolehan_dana');
		$data=$q->result();
		echo json_encode($data);
	}



	function totaldata61(){

		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		echo "
		<tr>


			<td colspan=\"2\">Total</td>
			<td>".$this->counttotalth261()."</td>
			<td>".$this->counttotalth161()."</td>
			<td>".$this->counttotalth061()."</td>";

			if (isdraf($idsubmission)) {
				echo "<td></td>";
			}
		echo "</tr>";


	}

	private function counttotalth261(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;

		$q = $this->db->query("select sum(jumlah_dana_th2) as jd from realisasi_perolehan_dana where id_submission=$idsubmission");
		$d = $q->result();
		return $d[0]->jd;
	}
	private function counttotalth161(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;

		$q = $this->db->query("select sum(jumlah_dana_th1) as jd from realisasi_perolehan_dana where id_submission=$idsubmission");
		$d = $q->result();
		return $d[0]->jd;
	}
	private function counttotalth061(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;

		$q = $this->db->query("select sum(jumlah_dana_th0) as jd from realisasi_perolehan_dana where id_submission=$idsubmission");
		$d = $q->result();
		return $d[0]->jd;
	}




	function getdata62(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$data1 = $this->loadtable621($idsubmission);
		$data2 = $this->loadtable622($idsubmission);
		$datagab  = array($data1 , $data2 );
		echo json_encode($datagab);
	}

	private function loadtable621($idsubmission){

		$q = $this->db->query("select * from penggunaan_dana where id_submission=$idsubmission and tipe_penggunaan=1");
		$data = $q->result();
		return $data;
	}
	private function loadtable622($idsubmission){

		$q = $this->db->query("select * from penggunaan_dana where id_submission=$idsubmission and tipe_penggunaan=2");
		$data = $q->result();
		return $data;
	}
	function hapusdata62(){
		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from penggunaan_dana where id_penggunaan_dana=$idrecord");
	}

	function simpantotal621(){
		$idsubmission = $this->input->post('idsubmission');
		$st6f21c1 = $this->input->post('field1');
		$st6f21c2 = $this->input->post('field2');
		$st6f21c3 = $this->input->post('field3');

		$data = array(
				'id_submission'=>$idsubmission,
				'tipe_penggunaan'=>1,
				'jumlahdanath2'=>$st6f21c1,
				'jumlahdanath1'=>$st6f21c2,
				'jumlahdanath0'=>$st6f21c3,
			);

		$this->db->query("delete from jumlah_penggunaan_dana where id_submission=$idsubmission and tipe_penggunaan=1");
		$this->db->insert('jumlah_penggunaan_dana',$data);
	}
	function simpantotal622(){
		$idsubmission = $this->input->post('idsubmission');
		$st6f21c1 = $this->input->post('field1');
		$st6f21c2 = $this->input->post('field2');
		$st6f21c3 = $this->input->post('field3');

		$data = array(
				'id_submission'=>$idsubmission,
				'tipe_penggunaan'=>2,
				'jumlahdanath2'=>$st6f21c1,
				'jumlahdanath1'=>$st6f21c2,
				'jumlahdanath0'=>$st6f21c3,
			);

		$this->db->query("delete from jumlah_penggunaan_dana where id_submission=$idsubmission and tipe_penggunaan=2");
		$this->db->insert('jumlah_penggunaan_dana',$data);
	}

	function gettotal621(){

		$idsubmission = $this->input->post('idsubmission');
		$q = $this->db->query("select * from jumlah_penggunaan_dana where id_submission=$idsubmission and tipe_penggunaan=1 ");
		$s = $q->result();
		header('Content-Type: application/json');
		echo json_encode($s);
	}
	function gettotal622(){

		$idsubmission = $this->input->post('idsubmission');
		$q = $this->db->query("select * from jumlah_penggunaan_dana where id_submission=$idsubmission and tipe_penggunaan=2 ");
		$s = $q->result();
		header('Content-Type: application/json');
		echo json_encode($s);
	}



	function getdata63(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from dana_untuk_penelitian where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);

	}



	function getdata64(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from dana_diperoleh_dari_penelitian where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);
	}

	function getdata65(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from prasarana where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);
	}

	function getdata66(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->db->where('id_submission',$idsubmission);
		$q = $this->db->get('prasarana_kecuali_ruang_dosen');
		$data = $q->result();
		echo json_encode($data);
	}

	function getdata67(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->db->where('id_submission',$idsubmission);
		$q = $this->db->get('prasarana_penunjang');
		$data = $q->result();
		echo json_encode($data);

	}

	function getdata68(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->db->where('id_submission',$idsubmission);
		$q = $this->db->get('pustaka');
		$data = $q->result();
		echo json_encode($data);

	}


	function getdata69modal(){
		$idinduk = $this->input->post('idinduk69');
		$this->db->where('id_peralatan_lab',$idinduk);
		$q = $this->db->get('detail_peralatan_lab');
		$data = $q->result();
		$nmr=1;
		foreach ($data as $d) {
			echo "
				<tr>
					<td>$nmr</td>
					<td>".$d->jenis_prasarana."</td>
					<td>".$d->jumlah_unit."</td>
					<td>".$d->rasio."</td>
					<td>";
							if($d->sd ==1){
								echo " &#10004 ";
							}
			echo "</td>
			<td>";
							if($d->sw ==1){
								echo " &#10004 ";
							}
			echo "</td>
			<td>";
							if($d->baik ==1){
								echo " &#10004 ";
							}
			echo "</td>
			<td>";
							if($d->rusak ==1){
								echo " &#10004 ";
							}
			echo "</td>
			<td>".$d->rerata_waktu_penggunaan."</td>
					<td>

					<button type='button' class='btn btn-danger' onClick='hapusdata69modal(".$d->id_detail_peralatan_lab.",".$d->id_peralatan_lab.")'>
						<span class='glyphicon glyphicon-remove'></span>
					 </button>

					</td>
				</tr>



			";
			$nmr++;
		}
	}


	function hapusdata69modal(){

		$idrecord = $this->input->post('idrecord');
		$this->db->query("delete from detail_peralatan_lab where id_detail_peralatan_lab=$idrecord");

	}

	function getdata69(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from peralatan_lab where id_submission = $idsubmission");
		$dataprimer = $q->result();
		//array [dataprimer][datasekunder]
		$datacollection = array();
		$nmr=1;
		foreach ($dataprimer as $dp) {
			$rowcount = $this->countdetailtabel69($dp->id_peralatan_lab);
			$datasss = array('nama_lab' => $dp->nama_lab);
			$q2 = $this->db->query("select * from detail_peralatan_lab where id_peralatan_lab=".$dp->id_peralatan_lab);
			$datasekunder = $q2->result();
			$datasss["detail_peralatan_lab"] = $datasekunder ;

			array_push($datacollection,$datasss);
		}
		echo json_encode($datacollection);
	}
	private function countdetailtabel69($idparent){
		$this->db->where('id_peralatan_lab',$idparent);
		$q = $this->db->get('detail_peralatan_lab');
		return $q->num_rows();
	}



	function getdata610(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from sistem_informasi where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);

	}

	function getdata711(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->db->where('id_submission',$idsubmission);
		$q = $this->db->get('jumlah_judul_penelitian');
		$data = $q->result();

		echo json_encode($data);
	}


	function getdata721(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from artikel_ilmiah_3tahun_terakhir where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);

	}



	function getdata722(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from buku_ilmiah_3tahun_terakhir where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);
	}

	function getdata73(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->db->where('id_submission',$idsubmission);
		$q = $this->db->get('karya_berhaki');
		$data = $q->result();
		echo json_encode($data);

	}

	function getdata74(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$this->db->where('id_submission',$idsubmission);
		$q = $this->db->get('jumlah_kegiatan_pengabdian_kepada_masyarakat');
		$data = $q->result();
		echo json_encode($data);
	}


	function getdata75(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from kerjasama_dalam_negeri where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);

	}


	function getdata76(){
		$obj = json_decode(file_get_contents('php://input'));
		$idsubmission = $obj->id_submission;
		$q = $this->db->query("select * from kerjasama_luar_negeri where id_submission=$idsubmission");
		$data = $q->result();
		echo json_encode($data);

	}


}
