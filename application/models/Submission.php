<?php

class Submission extends CI_Model
{
	public function getdrafsubmissionbycurrentuser(){
		$iduser = $this->session->userdata('iduser');
		$data = $this->db->query("select a.*, b.* from submission as a, user as b where a.id_user=$iduser and a.status_submission='draft' and a.id_user=b.id_user");
		
			return $data->result();
	}

	public function getsubmisstedsubmissionbycurrentuser(){
		$iduser = $this->session->userdata('iduser');
		$data = $this->db->query("select a.*, b.* from submission as a, user as b where a.id_user=$iduser and a.status_submission='submitted' and a.id_user=b.id_user");
		
			return $data->result();
	}

	public function getsubmisstedsubmissionbyothers(){
		$iduser = $this->session->userdata('iduser');
		
		$data = $this->db->query("select a.*, b.* from submission as a, user as b where a.id_user!=$iduser and a.status_submission='submitted' and a.id_user=b.id_user");
		return $data->result();
	}



	public function getdatastandar1($idsubmission)
	{
		$standar1 = $this->db->query("select a.*,b.*,c.* from submission as a, standar_1 as b, attachmentfile as c where a.id_submission=b.id_submission and b.id_attachmentfile=c.id_attachmentfile and a.id_submission=$idsubmission");
		if($standar1->num_rows()>0){

			return $standar1->result();
		}else{
			return 0;
		}
	}


	public function getdatastandar2($idsubmission)
	{
		$standar1 = $this->db->query("select a.*,b.*,c.* from submission as a, standar_2 as b, attachmentfile as c where a.id_submission=b.id_submission and b.id_attachmentfile=c.id_attachmentfile and a.id_submission=$idsubmission");
		if($standar1->num_rows()>0){

			return $standar1->result();
		}else{
			return 0;
		}
	}






	public function savefile($filepath='')
	{
		$datatoinsert = array('filepath' =>$filepath);
		$this->db->insert('attachmentfile',$datatoinsert);
		return $this->db->insert_id();

	}

	public function insertstandar1($idsubmission,$idattachment){
		//cek if standar 1 already exist for that submission id
		
		if($this->standar1sudahada($idsubmission)){
			$idstandar1 = $this->ambildatastanda1($idsubmission);
			//update data standar 1
			$this->db->query("update standar_1 set id_submission=$idsubmission, id_attachmentfile=$idattachment where id_standar_1=$idstandar1");
		}else{
			//insert standar 1
			$this->db->query("insert into standar_1 (id_submission,id_attachmentfile) values ($idsubmission,$idattachment)");
		}
	}
	private function standar1sudahada($idsubmission){
		$q = $this->db->query("select * from standar_1 where id_submission=$idsubmission");
		if($q->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	private function ambildatastanda1($idsubmission){
		$q = $this->db->query("select * from standar_1 where id_submission=$idsubmission");
		$ids = $q->result_array();
		return $ids[0]['id_standar_1'];
		
	}

	//HANDLING DATA FORM STANDAR 2
	public function insertstandar2($idsubmission,$idattachment){
		//cek if standar 1 already exist for that submission id
		
		if($this->standar2sudahada($idsubmission)){
			$idstandar2 = $this->ambildatastanda2($idsubmission);
			//update data standar 1
			$this->db->query("update standar_2 set id_submission=$idsubmission, id_attachmentfile=$idattachment where id_standar_2=$idstandar2");
		}else{
			//insert standar 1
			$this->db->query("insert into standar_2 (id_submission,id_attachmentfile) values ($idsubmission,$idattachment)");
		}
	}
	private function standar2sudahada($idsubmission){
		$q = $this->db->query("select * from standar_2 where id_submission=$idsubmission");
		if($q->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	private function ambildatastanda2($idsubmission){
		$q = $this->db->query("select * from standar_2 where id_submission=$idsubmission");
		$ids = $q->result_array();
		return $ids[0]['id_standar_2'];
		
	}



	function insertform31($a,$idsubmission){
		$this->db->query("delete from mahasiswa_dan_lulusan where id_submission=$idsubmission");

		$tskex = 4;
		for($ts=0;$ts<=4;$ts++){

			$this->db->query("INSERT INTO mahasiswa_dan_lulusan (
				id_submission, id_attachmentfile, tskex, daya_tampung, jumlah_calon_mahasiswa_reguler_ikut_seleksi, jumlah_calon_mahasiswa_reguler_lulus_seleksi, jumlah_mahasiswa_baru_reguler_non_transfer, jumlah_mahasiswa_baru_reguler_transfer, jumlah_total_mahasiswa_reguler_non_transfer, jumlah_total_mahasiswa_reguler_transfer, jumlah_lulusan_reguler_non_transfer, jumlah_lulusan_reguler_transfer, ipk_min_lulusan_reguler, ipk_rata_rata_lulusan_reguler, ipk_max_lulusan_reguler, persentase_lulusan_dengan_ipk_kurdar_275, persentase_lulusan_dengan_ipk_smd_275, persentase_lulusan_dengan_ipk_lbdr_350) values 
			( $idsubmission, 
				".$a[$ts][15].", 
				$tskex, 
				".$a[$ts][0].", 
				".$a[$ts][1].", 
				".$a[$ts][2].", 
				".$a[$ts][3].", 
				".$a[$ts][4].", 
				".$a[$ts][5].", 
				".$a[$ts][6].", 
				".$a[$ts][7].", 
				".$a[$ts][8].", 
				".$a[$ts][9].", 
				".$a[$ts][10].", 
				".$a[$ts][11].", 
				".$a[$ts][12].", 
				".$a[$ts][13].", 
				".$a[$ts][14].")"

			);

			$tskex--;
		}

		// return $a[0][0];
		
	}

	function getjumlahdayatampung31($idsubmission){
		$q = $this->db->query("select sum(daya_tampung) as dt from mahasiswa_dan_lulusan where id_submission=$idsubmission");
		$data = $q->result();
		return $data[0]->dt;
	}
	function getjumlahmhsregikutseleksi31($idsubmission){
		$q = $this->db->query("select sum(jumlah_calon_mahasiswa_reguler_ikut_seleksi) as dt from mahasiswa_dan_lulusan where id_submission=$idsubmission");
		$data = $q->result();
		return $data[0]->dt;

	}
	function getjumlahmhsreglulusseleksi31($idsubmission){
		$q = $this->db->query("select sum(jumlah_calon_mahasiswa_reguler_lulus_seleksi) as dt from mahasiswa_dan_lulusan where id_submission=$idsubmission");
		$data = $q->result();
		return $data[0]->dt;

	}
	function getjumlahmhsbarubukantransfer31($idsubmission){
		$q = $this->db->query("select sum(jumlah_mahasiswa_baru_reguler_non_transfer) as dt from mahasiswa_dan_lulusan where id_submission=$idsubmission");
		$data = $q->result();
		return $data[0]->dt;

	}
	function getjumlahmhsbarutransfer31($idsubmission){
		$q = $this->db->query("select sum(jumlah_mahasiswa_baru_reguler_transfer) as dt from mahasiswa_dan_lulusan where id_submission=$idsubmission");
		$data = $q->result();
		return $data[0]->dt;

	}
	function getjumlahmhstotalbukantransfer31($idsubmission){
		$q = $this->db->query("select sum(jumlah_total_mahasiswa_reguler_non_transfer) as dt from mahasiswa_dan_lulusan where id_submission=$idsubmission");
		$data = $q->result();
		return $data[0]->dt;

	}
	function getjumlahmhstotaltransfer31($idsubmission){
		$q = $this->db->query("select sum(jumlah_total_mahasiswa_reguler_transfer) as dt from mahasiswa_dan_lulusan where id_submission=$idsubmission");
		$data = $q->result();
		return $data[0]->dt;

	}
	function getjumlahmhslulusanbukantransfer31($idsubmission){
		$q = $this->db->query("select sum(jumlah_lulusan_reguler_non_transfer) as dt from mahasiswa_dan_lulusan where id_submission=$idsubmission");
		$data = $q->result();
		return $data[0]->dt;

	}
	function getjumlahmhslulusantransfer31($idsubmission){
		$q = $this->db->query("select sum(jumlah_lulusan_reguler_transfer) as dt from mahasiswa_dan_lulusan where id_submission=$idsubmission");
		$data = $q->result();
		return $data[0]->dt;

	}


	function insertstandar32($idsubmission,$standar32c1,$standar32c2,$standar32c3,$standar32c4){
		$this->db->query("insert into prestasi_pencapaian_mahasiswa (nama_prestasi_dan_tempat_pelaksanaan,tingkat,prestasi_dicapai,id_attachmentfile,id_submission) values('$standar32c1','$standar32c2','$standar32c3',$standar32c4,$idsubmission)");

	}

	function selectdatastandar32($ids){
		$s = $this->db->query("select * from prestasi_pencapaian_mahasiswa where id_submission=$ids");
		return $s->result();
	}



	function insertdata33($arrayData,$idsubmission){
		$this->db->query("delete from data_mahasiswa_reguler_5thn_terakhir where id_submission=$idsubmission");
		$tskex = 4;
		for($ts=0;$ts<=4;$ts++){
				$thx = intval(date('Y'))-$tskex;
				$this->db->query("insert into data_mahasiswa_reguler_5thn_terakhir (thn_masuk,data_ts_0,data_ts_1,data_ts_2,data_ts_3,data_ts_4,jumlah_lulusan_sd_ts,id_submission)
					values (
						".$thx.",
						".$arrayData[$ts][0].",
						".$arrayData[$ts][1].",
						".$arrayData[$ts][2].",
						".$arrayData[$ts][3].",
						".$arrayData[$ts][4].",
						".$arrayData[$ts][5].",
						".$idsubmission.")");

			$tskex--;
		}
	}

	function selectdatastandar33($ids){
		$s = $this->db->query("select * from data_mahasiswa_reguler_5thn_terakhir where id_submission=$ids");
		return $s->result();
	}

	function insertdatastandar34($st3f4c1, $st3f4c2, $st3f4c3, $st3f4c4, $st3f4c5, $idsubmission){
		$this->db->query("insert into layanan_kepada_mahasiswa (id_submission,jenis_pelayanan,bentuk_kegiatan,pelaksanaan,hasil,id_attachmentfile) values (
				$idsubmission,'$st3f4c1','$st3f4c2','$st3f4c3','$st3f4c4',$st3f4c5
			)");
	}

	function selectdatastandar34($idsubmission){
		$s = $this->db->query("select * from layanan_kepada_mahasiswa where id_submission=$idsubmission order by jenis_pelayanan asc");
		return $s->result();
	}


	function insertform35($idsubmission,$st3f5c1,$st3f5c2){
		$this->db->query("insert into usaha_pencarian_tempat_kerja (jenis_usaha, keterangan,id_submission) values ('$st3f5c1','$st3f5c2',$idsubmission)");
	}
	function selectdatastandar35($idsubmission){
		$s = $this->db->query("select * from usaha_pencarian_tempat_kerja where id_submission=$idsubmission");
		return $s->result();
	}


	function insertform36($arrayData,$idsubmission){
		$this->db->query("delete from evaluasi_kinerja_lulusan where id_submission=$idsubmission");
		$this->db->query("insert into evaluasi_kinerja_lulusan (
		id_submission,jenis_kemampuan,persentase_tanggapan_sangat_baik,persentase_tanggapan_baik,persentase_tanggapan_cukup,persentase_tanggapan_kurang,rencana_tindak_lanjut
					) values (
		$idsubmission,'Komunikasi',"
		.$arrayData[0][0].","
		.$arrayData[0][1].","
		.$arrayData[0][2].","
		.$arrayData[0][3].",'"
		.$arrayData[0][4]."')" );

		$this->db->query("insert into evaluasi_kinerja_lulusan (
		id_submission,jenis_kemampuan,persentase_tanggapan_sangat_baik,persentase_tanggapan_baik,persentase_tanggapan_cukup,persentase_tanggapan_kurang,rencana_tindak_lanjut
					) values (
		$idsubmission,'Kerjasama',"
		.$arrayData[1][0].","
		.$arrayData[1][1].","
		.$arrayData[1][2].","
		.$arrayData[1][3].",'"
		.$arrayData[1][4]."')" );

		$this->db->query("insert into evaluasi_kinerja_lulusan (
		id_submission,jenis_kemampuan,persentase_tanggapan_sangat_baik,persentase_tanggapan_baik,persentase_tanggapan_cukup,persentase_tanggapan_kurang,rencana_tindak_lanjut
					) values (
		$idsubmission,'Kemandirian',"
		.$arrayData[2][0].","
		.$arrayData[2][1].","
		.$arrayData[2][2].","
		.$arrayData[2][3].",'"
		.$arrayData[2][4]."')" );

		$this->db->query("insert into evaluasi_kinerja_lulusan (
		id_submission,jenis_kemampuan,persentase_tanggapan_sangat_baik,persentase_tanggapan_baik,persentase_tanggapan_cukup,persentase_tanggapan_kurang,rencana_tindak_lanjut
					) values (
		$idsubmission,'Kreativitas',"
		.$arrayData[3][0].","
		.$arrayData[3][1].","
		.$arrayData[3][2].","
		.$arrayData[3][3].",'"
		.$arrayData[3][4]."')" );

		$this->db->query("insert into evaluasi_kinerja_lulusan (
		id_submission,jenis_kemampuan,persentase_tanggapan_sangat_baik,persentase_tanggapan_baik,persentase_tanggapan_cukup,persentase_tanggapan_kurang,rencana_tindak_lanjut
					) values (
		$idsubmission,'Kemampuan Menggunakan Alat',"
		.$arrayData[4][0].","
		.$arrayData[4][1].","
		.$arrayData[4][2].","
		.$arrayData[4][3].",'"
		.$arrayData[4][4]."')" );

		$this->db->query("insert into evaluasi_kinerja_lulusan (
		id_submission,jenis_kemampuan,persentase_tanggapan_sangat_baik,persentase_tanggapan_baik,persentase_tanggapan_cukup,persentase_tanggapan_kurang,rencana_tindak_lanjut
					) values (
		$idsubmission,'Total',"
		.$arrayData[5][0].","
		.$arrayData[5][1].","
		.$arrayData[5][2].","
		.$arrayData[5][3].",'"
		.$arrayData[5][4]."')" );
	}

	function selectdatastandar36($idsubmission){
		$s = $this->db->query("select * from evaluasi_kinerja_lulusan where id_submission=$idsubmission order by id_evaluasi_kinerja asc");
		return $s->result();
	}

	function insertform37($idsubmission,$st3f7c1,$st3f7c2,$st3f7c3,$st3f7c4){
		$this->db->query("insert into lembaga_pemesan_lulusan (id_submission,tahun,jumlah_mahasiswa_diwisuda,nama_lembaga,jumlah_lulusan_diterima) values (
				$idsubmission,$st3f7c1,$st3f7c2,'$st3f7c3',$st3f7c4
			)");
	}

	function selectdatastandar37($idsubmission){
		$s = $this->db->query("select * from lembaga_pemesan_lulusan where id_submission=$idsubmission order by tahun desc");
		return $s->result();
	}
	function hitungtotallulusandiwisuda37($idsubmission){
		$q = $this->db->query("select sum(jumlah_mahasiswa_diwisuda) as dt from lembaga_pemesan_lulusan where id_submission=$idsubmission");
		$data = $q->result();
		return $data[0]->dt;
	}
	function hitungtotallulusandipesan37($idsubmission){
		$q = $this->db->query("select sum(jumlah_lulusan_diterima) as dt from lembaga_pemesan_lulusan where id_submission=$idsubmission");
		$data = $q->result();
		return $data[0]->dt;
	}

	function insertstandar41($idsubmission,	$st4f1c1,	$st4f1c2,	$st4f1c3,	$st4f1c4,	$st4f1c5,	$st4f1c6,	$st4f1c7){
		$this->db->query("insert into data_dosen_tetap

			(id_submission,nama_dosen,nidn,tgl_ahir,jabatan_akademik,sertifikasi_dosen,pendidikan,id_attachmentfile)
			values ($idsubmission,'$st4f1c1','$st4f1c2','$st4f1c3','$st4f1c4',$st4f1c5,'$st4f1c6',$st4f1c7)

			");
	}

	function selectdatastandar41($idsubmission){
		$s = $this->db->query("select * from data_dosen_tetap where id_submission=$idsubmission");
		return $s->result();
	}

	//---------------------
	function insertstandar42($idsubmission,	$st4f2c1,	$st4f2c2,	$st4f2c3,	$st4f2c4,	$st4f2c5,	$st4f2c6,	$st4f2c7){
		$this->db->query("insert into data_dosen_tetap_diluar_bidang_ps

			(id_submission,nama_dosen,nidn,tgl_ahir,jabatan_akademik,sertifikasi_dosen,pendidikan,id_attachmentfile)
			values ($idsubmission,'$st4f2c1','$st4f2c2','$st4f2c3','$st4f2c4',$st4f2c5,'$st4f2c6',$st4f2c7)

			");
	}

	function selectdatastandar42($idsubmission){
		$s = $this->db->query("select * from data_dosen_tetap_diluar_bidang_ps where id_submission=$idsubmission");
		return $s->result();
	}

	function insertstandar43($idsubmission,$st4f3c1,$st4f3c2,$st4f3c3,$st4f3c4,$st4f3c5,$st4f3c6,$st4f3c7,$st4f3c8,$st4f3c9,$st4f3c10,$st4f3c11,$st4f3c12,$st4f3c13){
		$this->db->query("
				insert into aktivitas_dosen_tetap_sesuai_ps (
					id_submission,
					no_sertifikat,
					nama_dosen,
					pd_ganjil,
					pl_ganjil,
					pg_ganjil,
					pk_ganjil,
					sum_ganjil,
					pd_genap,
					pl_genap,
					pg_genap,
					pk_genap,
					sum_genap,
					status
					) 
					values 
					(
					$idsubmission,
					'$st4f3c1',
					'$st4f3c2',
					$st4f3c3,
					$st4f3c4,
					$st4f3c5,
					$st4f3c6,
					$st4f3c7,
					$st4f3c8,
					$st4f3c9,
					$st4f3c10,
					$st4f3c11,
					$st4f3c12,
					'$st4f3c13'
					)
			");
	}

	function selectdatastandar43($idsubmission){
		$s = $this->db->query("select * from aktivitas_dosen_tetap_sesuai_ps where id_submission=$idsubmission");
		return $s->result();
	}



	function insertdosenstandar44($idsubmission,$nama,$bidang,$smstr){
		$datatoinsert = array('id_submission'=>$idsubmission,'nama_dosen'=>$nama,'bidang_keahlian'=>$bidang,'semester'=>$smstr);
		$this->db->insert('data_ajar_dosen_tetap_bidang_sesuai_ps',$datatoinsert);
		return $this->db->insert_id();
	}

	function selectdetail44($idparent){
		$s = $this->db->query("select * from detail_data_ajar_dosen_tetap_bidang_sesuai_ps where id_data_ajar_dosen_tetap_bidang_sesuai_ps=$idparent");
		return $s->result();
	}

	function insertdatadetaildataajardosentetap($modalidparent,$st4f41c1modal,$st4f41c2modal,$st4f41c3modal,$st4f41c4modal,$st4f41c5modal){
		$this->db->query("INSERT INTO `detail_data_ajar_dosen_tetap_bidang_sesuai_ps`
			(`id_data_ajar_dosen_tetap_bidang_sesuai_ps`, `kode_matakuliah`, `nama_matakuliah`, `jumlah_kelas`, `jumlah_pertemuan_direncanakan`, `jumlah_pertemuan_terlaksana`) VALUES (
				$modalidparent,'$st4f41c1modal','$st4f41c2modal',$st4f41c3modal,$st4f41c4modal,$st4f41c5modal
			)");
	}

	function selectdatal44($idsubmission){
		$s = $this->db->query("select * from data_ajar_dosen_tetap_bidang_sesuai_ps where id_submission=$idsubmission and semester=1 order by id_data_ajar_dosen_tetap_bidang_sesuai_ps");
		return $s->result();
	}
	function selectdatal45($idsubmission){
		$s = $this->db->query("select * from data_ajar_dosen_tetap_bidang_sesuai_ps where id_submission=$idsubmission and semester=2 order by id_data_ajar_dosen_tetap_bidang_sesuai_ps");
		return $s->result();
	}

	function insertdata46($idsubmission,$st4f6c1,$st4f6c2,$st4f6c3,$st4f6c4,$st4f6c5,$st4f6c6,$st4f6c7){
		$this->db->query("insert into data_ajar_dosen_tetap_keahlian_diluar_bidang_ps (`id_submission`, `nama_dosen`, `bidang_keahlian`, `kode_matakuliah`, `nama_matakuliah`, `jumlah_kelas`, `jumlah_pertemuan_direncanakan`, `jumlah_pertemuan_terlaksana`)
				values ($idsubmission,'$st4f6c1','$st4f6c2','$st4f6c3','$st4f6c4',$st4f6c5,$st4f6c6,$st4f6c7)
			");
	}

	function selectdata46($idsubmission){
		$d = $this->db->query("select * from data_ajar_dosen_tetap_keahlian_diluar_bidang_ps where id_submission=$idsubmission");
		return $d->result();
	}



	function insertstandar47($idsubmission,	$st4f1c1,	$st4f1c2,	$st4f1c3,	$st4f1c4,	$st4f1c5,	$st4f1c6,	$st4f1c7){
		$this->db->query("insert into data_dosen_tidak_tetap

			(id_submission,nama_dosen,nidn,tgl_ahir,jabatan_akademik,sertifikasi_dosen,pendidikan,id_attachmentfile)
			values ($idsubmission,'$st4f1c1','$st4f1c2','$st4f1c3','$st4f1c4',$st4f1c5,'$st4f1c6',$st4f1c7)

			");
	}

	function selectdatastandar47($idsubmission){
		$s = $this->db->query("select * from data_dosen_tidak_tetap where id_submission=$idsubmission");
		return $s->result();
	}

	function insertdata48($idsubmission,$st4f6c1,$st4f6c2,$st4f6c3,$st4f6c4,$st4f6c5,$st4f6c6,$st4f6c7,$st4f6c8){
		$this->db->query("insert into data_ajar_dosen_tidak_tetap (`id_submission`, `nama_dosen`, `bidang_keahlian`, `kode_matakuliah`, `nama_matakuliah`, `jumlah_kelas`, `jumlah_pertemuan_direncanakan`, `jumlah_pertemuan_terlaksana`,`id_attachmentfile`)
				values ($idsubmission,'$st4f6c1','$st4f6c2','$st4f6c3','$st4f6c4',$st4f6c5,$st4f6c6,$st4f6c7,$st4f6c8)
			");
	}

	function selectdata48($idsubmission){
		$d = $this->db->query("select * from data_ajar_dosen_tidak_tetap where id_submission=$idsubmission");
		return $d->result();
	}
	function selectdata49($idsubmission){
		$d = $this->db->query("select * from kegiatan_tenaga_ahli where id_submission=$idsubmission");
		return $d->result();
	}

	function insertdata49($st4f9c1,$st4f9c2,$st4f9c3,$st4f9c4,$idsubmission){
		$this->db->query("insert into kegiatan_tenaga_ahli (nama_tenaga_ahli,nama_kegiatan,waktu_pelaksanaan,id_attachmentfile,id_submission) values ('$st4f9c1','$st4f9c2','$st4f9c3',$st4f9c4,$idsubmission)");
	} 

	function insertdata410($idsubmission,$st4f10c1,$st4f10c2,$st4f10c3,$st4f10c4,$st4f10c5,$st4f10c6,$st4f10c7){
		$this->db->query("insert into peningkatan_kemampuan_dosen (id_submission,nama_dosen,jenjang_pendidikan_lanjut,bidang_studi,perguruan_tinggi,negara,tahun_mulai_studi,id_attachmentfile) values ($idsubmission,'$st4f10c1','$st4f10c2','$st4f10c3','$st4f10c4','$st4f10c5','$st4f10c6',$st4f10c7)");
	}

	function selectdata410($idsubmission){
		$d = $this->db->query("select * from peningkatan_kemampuan_dosen where id_submission=$idsubmission");
		return $d->result();
	}



 }


?>