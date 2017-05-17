<h3>Instansi Dalam Negeri Yang Menjalin Kerjasama* yang Terkait Dengan Program Studi/Jurusan Dalam 3 Tahun Terakhir</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Instansi</th>
			<th rowspan="2">Jenis Kegiatan</th>
			<th colspan="2">Kurun Waktu Kerjasama</th>
			<th rowspan="2">Manfaat yang Diperoleh</th>
			<th rowspan="2">Aksi</th>
		</tr>
		<tr>
			<th>Mulai</th>
			<th>Berakhir</th>
		</tr>
	</thead>
	<tbody id="tabledata75"></tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="text" class="form-control" id="st7f5c1"></td>
			<td><input type="text" class="form-control" id="st7f5c2"></td>
			<td><input type="date" class="form-control" id="st7f5c3"></td>
			<td><input type="date" class="form-control" id="st7f5c4"></td>
			<td><input type="text" class="form-control" id="st7f5c5"></td>
			<td><button id="btnsimpan75" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr> 
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		loadtabel75();
	});
	function loadtabel75(){
		$.ajax({
			method: 'POST',
			url:"<?php echo base_url('ajaxcontrol1/getdata75');?>",
			data:{idsubmission:<?php echo $idsubmission;?>}

		}).done(function(data){
			
			$('#tabledata75').html(data);
		}).error(function(err){
			console.log(err);
		});
	}
	$('#btnsimpan75').click(function(){
		var st7f5c1 = $('#st7f5c1').val();
		var st7f5c2 = $('#st7f5c2').val();
		var st7f5c3 = $('#st7f5c3').val();
		var st7f5c4 = $('#st7f5c4').val();
		var st7f5c5 = $('#st7f5c5').val();

		$.ajax({
			method: 'POST',
			url:"<?php echo base_url('ajaxcontrol1/simpandata75');?>",
			data:{idsubmission:<?php echo $idsubmission;?>, field1: st7f5c1, field2: st7f5c2, field3: st7f5c3, field4: st7f5c4, field5: st7f5c5  }

		}).done(function(data){
			$('#st7f5c1').val('');
			$('#st7f5c2').val('');
			$('#st7f5c3').val('');
			$('#st7f5c4').val('');
			$('#st7f5c5').val('');
			loadtabel75();
		}).error(function(err){
			console.log(err);
		});
	});
	function hapusdata75(idrec){
		$.ajax({
			method: 'POST',
			url:"<?php echo base_url('ajaxcontrol1/hapusdata75');?>",
			data:{idrecord:idrec}

		}).done(function(data){
			
			loadtabel75();
		}).error(function(err){
			console.log(err);
		});
	}

	// create table kerjasama_dalam_negeri(
 //    id_kerjasama_dalam_negeri int not null auto_increment primary key,
 //    id_submission int,
 //    nama_instansi varchar(30),
 //    jenis_kegiatan varchar(30),
 //    tgl_mulai date,
 //    tgl_berakhir date,
 //    manfaat_diperoleh text
 //    )
</script>