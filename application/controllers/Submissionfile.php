<?php

/**
* 
*/
class Submissionfile extends CI_Controller
{
	function download($attachmentid){
		$s = $this->db->query("select * from attachmentfile where id_attachmentfile= $attachmentid");
		if($s->num_rows()>0){
			$a = $s->result_array();
			header("location:".$a[0]['filepath']."");	
		}
		
	}

	function deletesubmission($idsubmission){
		$this->db->query("delete from aktivitas_dosen_tetap_sesuai_ps where id_submission=$idsubmission");
		$this->db->query("delete from artikel_ilmiah_3tahun_terakhir where id_submission=$idsubmission");
		$this->db->query("delete from buku_ilmiah_3tahun_terakhir where id_submission=$idsubmission");
		$this->db->query("delete from dana_diperoleh_dari_penelitian where id_submission=$idsubmission");
		$this->db->query("delete from dana_untuk_penelitian where id_submission=$idsubmission");
		$this->db->query("delete from data_ajar_dosen_tetap_keahlian_diluar_bidang_ps where id_submission=$idsubmission");
		$this->db->query("delete from data_ajar_dosen_tidak_tetap where id_submission=$idsubmission");
		$this->db->query("delete from data_dosen_pembimbing where id_submission=$idsubmission");
		$this->db->query("delete from data_dosen_tetap where id_submission=$idsubmission");
		$this->db->query("delete from data_dosen_tetap_diluar_bidang_ps where id_submission=$idsubmission");
		$this->db->query("delete from data_dosen_tidak_tetap where id_submission=$idsubmission");
		$this->db->query("delete from data_dosen_wali where id_submission=$idsubmission");
		$this->db->query("delete from data_mahasiswa_reguler_5thn_terakhir where id_submission=$idsubmission");
		$this->db->query("delete from evaluasi_kinerja_lulusan where id_submission=$idsubmission");
		$this->db->query("delete from hasil_peninjauan_silabus where id_submission=$idsubmission");
		$this->db->query("delete from jumlah_judul_penelitian where id_submission=$idsubmission");
		$this->db->query("delete from jumlah_kegiatan_pengabdian_kepada_masyarakat where id_submission=$idsubmission");
		$this->db->query("delete from jumlah_penggunaan_dana where id_submission=$idsubmission");
		$this->db->query("delete from karya_berhaki where id_submission=$idsubmission");
		$this->db->query("delete from kegiatan_tenaga_ahli where id_submission=$idsubmission");
		$this->db->query("delete from kerjasama_dalam_negeri where id_submission=$idsubmission");
		$this->db->query("delete from kerjasama_luar_negeri where id_submission=$idsubmission");
		$this->db->query("delete from keselamatan_kerja where id_submission=$idsubmission");
		$this->db->query("delete from layanan_kepada_mahasiswa where id_submission=$idsubmission");
		$this->db->query("delete from lembaga_pemesan_lulusan where id_submission=$idsubmission");
		$this->db->query("delete from mahasiswa_dan_lulusan where id_submission=$idsubmission");
		$this->db->query("delete from penggunaan_dana where id_submission=$idsubmission");
		$this->db->query("delete from peningkatan_kemampuan_dosen where id_submission=$idsubmission");
		$this->db->query("delete from prasarana where id_submission=$idsubmission");
		$this->db->query("delete from prasarana_kecuali_ruang_dosen where id_submission=$idsubmission");
		$this->db->query("delete from prasarana_penunjang where id_submission=$idsubmission");
		$this->db->query("delete from prestasi_pencapaian_mahasiswa where id_submission=$idsubmission");
		$this->db->query("delete from pustaka where id_submission=$idsubmission");
		$this->db->query("delete from realisasi_perolehan_dana where id_submission=$idsubmission");
		$this->db->query("delete from sistem_informasi where id_submission=$idsubmission");
		$this->db->query("delete from standar_1 where id_submission=$idsubmission");
		$this->db->query("delete from standar_2 where id_submission=$idsubmission");
		$this->db->query("delete from struktur_kurikulum where id_submission=$idsubmission");
		$this->db->query("delete from submission where id_submission=$idsubmission");
		$this->db->query("delete from substansi_praktikum where id_submission=$idsubmission");
		$this->db->query("delete from tenaga_kependidikan where id_submission=$idsubmission");
		$this->db->query("delete from usaha_pencarian_tempat_kerja where id_submission=$idsubmission");


		$q1 = $this->db->query("select * from data_ajar_dosen_tetap_bidang_sesuai_ps where id_submission=$idsubmission");
		$data1 = $q1->result();
		if($q1->num_rows()>0){
			$this->db->query("delete from detail_data_ajar_dosen_tetap_bidang_sesuai_ps where id_data_ajar_dosen_tetap_bidang_sesuai_ps=".$data1[0]->id_data_ajar_dosen_tetap_bidang_sesuai_ps."");			
		}
		$this->db->query("delete from data_ajar_dosen_tetap_bidang_sesuai_ps where id_submission=$idsubmission");

	

		$q2 = $this->db->query("select * from kegiatan_dosen_tetap_dalam_seminar where id_submission=$idsubmission");
		$data2 = $q2->result();
		if($q2->num_rows()>0){
			$this->db->query("delete from detail_kegiatan_dosen_tetap_dalam_seminar where id_kegiatan_dosen_tetap_dalam_seminar=".$data2[0]->id_kegiatan_dosen_tetap_dalam_seminar."");			
		}
		$this->db->query("delete from kegiatan_dosen_tetap_dalam_seminar where id_submission=$idsubmission");


		
		$q3 = $this->db->query("select * from keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan where id_submission=$idsubmission");
		$data3 = $q3->result();
		if($q3->num_rows()>0){
			$this->db->query("delete from detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan where id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan=".$data3[0]->id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan."");			
		}
		$this->db->query("delete from keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan where id_submission=$idsubmission");

	
		$q4 = $this->db->query("select * from pencapaian_prestasi_dosen where id_submission=$idsubmission");
		$data4 = $q4->result();
		if($q4->num_rows()>0){
			$this->db->query("delete from detail_pencapaian_prestasi_dosen where id_pencapaian_prestasi_dosen=".$data4[0]->id_pencapaian_prestasi_dosen."");			
		}
		$this->db->query("delete from pencapaian_prestasi_dosen where id_submission=$idsubmission");

		
		$q5 = $this->db->query("select * from peralatan_lab where id_submission=$idsubmission");
		$data5 = $q5->result();
		if($q5->num_rows()>0){
			$this->db->query("delete from detail_peralatan_lab where id_peralatan_lab=".$data5[0]->id_peralatan_lab."");			
		}
		$this->db->query("delete from peralatan_lab where id_submission=$idsubmission");

		redirect('home/index');
	}
}

