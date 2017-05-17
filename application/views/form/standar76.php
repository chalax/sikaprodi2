<h3>Tuliskan Instansi Luar Negeri Yang Menjalin Kerjasama* yang Terkait Dengan Program Studi/Jurusan Dalam 3 Tahun Terakhir</h3>
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
	<tbody id="tabledata76"></tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="text" class="form-control" id="st7f6c1"></td>
			<td><input type="text" class="form-control" id="st7f6c2"></td>
			<td><input type="date" class="form-control" id="st7f6c3"></td>
			<td><input type="date" class="form-control" id="st7f6c4"></td>
			<td><input type="text" class="form-control" id="st7f6c5"></td>
			<td><button id="btnsimpan76" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr> 
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		loadtabel76();
	});
	function loadtabel76(){
		$.ajax({
			method: 'POST',
			url:"<?php echo base_url('ajaxcontrol1/getdata76');?>",
			data:{idsubmission:<?php echo $idsubmission;?>}

		}).done(function(data){
			
			$('#tabledata76').html(data);
		}).error(function(err){
			console.log(err);
		});
	}
	$('#btnsimpan76').click(function(){
		var st7f6c1 = $('#st7f6c1').val();
		var st7f6c2 = $('#st7f6c2').val();
		var st7f6c3 = $('#st7f6c3').val();
		var st7f6c4 = $('#st7f6c4').val();
		var st7f6c5 = $('#st7f6c5').val();

		$.ajax({
			method: 'POST',
			url:"<?php echo base_url('ajaxcontrol1/simpandata76');?>",
			data:{idsubmission:<?php echo $idsubmission;?>, field1: st7f6c1, field2: st7f6c2, field3: st7f6c3, field4: st7f6c4, field5: st7f6c5  }

		}).done(function(data){
			$('#st7f6c1').val('');
			$('#st7f6c2').val('');
			$('#st7f6c3').val('');
			$('#st7f6c4').val('');
			$('#st7f6c5').val('');
			loadtabel76();
		}).error(function(err){
			console.log(err);
		});
	});
	function hapusdata76(idrec){
		$.ajax({
			method: 'POST',
			url:"<?php echo base_url('ajaxcontrol1/hapusdata76');?>",
			data:{idrecord:idrec}

		}).done(function(data){
			
			loadtabel76();
		}).error(function(err){
			console.log(err);
		});
	}

	// create table kerjasama_luar_negeri(
 //    id_kerjasama_luar_negeri int not null auto_increment primary key,
 //    id_submission int,
 //    nama_instansi varchar(30),
 //    jenis_kegiatan varchar(30),
 //    tgl_mulai date,
 //    tgl_berakhir date,
 //    manfaat_diperoleh text
 //    )
</script>