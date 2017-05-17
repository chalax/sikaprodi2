<h3>Jumlah judul penelitan yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahlianya sesuai dengan PS selama tiga tahun terakhir</h3>
<table class="table table-bordered">
<thead>
	<tr>
		<th>Sumber Pembiayaan</th>
		<th>Th-2</th>
		<th>Th-1</th>
		<th>Th-0</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody id="tabeldata71"></tbody>
<tbody>
	<tr>
		<td><input type="text" class="form-control" id="st7f11c1"> </td>
		<td><input type="number" min="0" value="0" class="form-control" id="st7f11c2"></td>
		<td><input type="number" min="0" value="0" class="form-control" id="st7f11c3"></td>
		<td><input type="number" min="0" value="0" class="form-control" id="st7f11c4"></td>
		<td><button id="btnsimpan711" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button> </td>
	</tr>
</tbody>
</table>

<script type="text/javascript">
$(document).ready(function(){
	loadtabel711();
});
$('#btnsimpan711').click(function(){
	var st7f11c1 = $('#st7f11c1').val();
	var st7f11c2 = $('#st7f11c2').val();
	var st7f11c3 = $('#st7f11c3').val();
	var st7f11c4 = $('#st7f11c4').val();

	$.ajax({
		method: 'POST',
		url:"<?php echo base_url('ajaxcontrol1/simpandata711');?>",
		data:{idsubmission:<?php echo $idsubmission;?>, field1: st7f11c1, field2: st7f11c2, field3: st7f11c3, field4: st7f11c4 }

	}).done(function(data){
		$('#st7f11c1').val('');
		$('#st7f11c2').val(0);
		$('#st7f11c3').val(0);
		$('#st7f11c4').val(0);
		loadtabel711();
	}).error(function(err){
		console.log(err);
	});
});

function loadtabel711(){
	$.ajax({
		method: 'POST',
		url:"<?php echo base_url('ajaxcontrol1/getdata711');?>",
		data:{idsubmission:<?php echo $idsubmission;?>}

	}).done(function(data){
		$('#tabeldata71').html(data);
	}).error(function(err){
		console.log(err);
	});
}

function hapusdata711(idrec){
	$.ajax({
		method: 'POST',
		url:"<?php echo base_url('ajaxcontrol1/hapusdata711');?>",
		data:{idrecord:idrec}

	}).done(function(data){
		loadtabel711();
	}).error(function(err){
		console.log(err);
	});
}

</script>