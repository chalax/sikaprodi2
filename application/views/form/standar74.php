<h3>Jumlah Kegiatan Pelayanan/Pengabdian Kepada Masyarakat (*) yang Sesuai Dengan Bidang Keilmuan PS Selama Tiga Tahun Terakhir yang Dilakukan oleh Dosen Tetap yang Bidang Keahlianya Sesuai PS dengan Mengikuti Format Tabel Berikut:</h3>
<table class="table table-bordered">
<thead>
	<tr>
		<th>Sumber Dana Kegiatan Pelayanan/Pengabdian Kepada Masyarakat</th>
		<th>Th-2</th>
		<th>Th-1</th>
		<th>Th-0</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody id="tabeldata74"></tbody>
<tbody>
	<tr>
		<td><input type="text" class="form-control" id="st7f4c1"> </td>
		<td><input type="number" min="0" value="0" class="form-control" id="st7f4c2"></td>
		<td><input type="number" min="0" value="0" class="form-control" id="st7f4c3"></td>
		<td><input type="number" min="0" value="0" class="form-control" id="st7f4c4"></td>
		<td><button id="btnsimpan74" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button> </td>
	</tr>
</tbody>
</table>

<script type="text/javascript">
$(document).ready(function(){
	loadtabel74();
});
$('#btnsimpan74').click(function(){
	var st7f4c1 = $('#st7f4c1').val();
	var st7f4c2 = $('#st7f4c2').val();
	var st7f4c3 = $('#st7f4c3').val();
	var st7f4c4 = $('#st7f4c4').val();

	$.ajax({
		method: 'POST',
		url:"<?php echo base_url('ajaxcontrol1/simpandata74');?>",
		data:{idsubmission:<?php echo $idsubmission;?>, field1: st7f4c1, field2: st7f4c2, field3: st7f4c3, field4: st7f4c4 }

	}).done(function(data){
		$('#st7f4c1').val('');
		$('#st7f4c2').val(0);
		$('#st7f4c3').val(0);
		$('#st7f4c4').val(0);
		loadtabel74();
	}).error(function(err){
		console.log(err);
	});
});

function loadtabel74(){
	$.ajax({
		method: 'POST',
		url:"<?php echo base_url('ajaxcontrol1/getdata74');?>",
		data:{idsubmission:<?php echo $idsubmission;?>}

	}).done(function(data){
		$('#tabeldata74').html(data);
	}).error(function(err){
		console.log(err);
	});
}

function hapusdata74(idrec){
	$.ajax({
		method: 'POST',
		url:"<?php echo base_url('ajaxcontrol1/hapusdata74');?>",
		data:{idrecord:idrec}

	}).done(function(data){
		loadtabel74();
	}).error(function(err){
		console.log(err);
	});
}

</script>