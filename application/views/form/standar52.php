<h3>Substansi Praktukum/Praktek yang mandiri ataupun yang merupakan bagian dari mata kuliah tertentu</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Praktikum/Praktek</th>
			<th colspan="2">Isi Praktikum/Praktek</th>
			
			<th rowspan="2">Tempat/Lokasi Praktikum/Praktek</th>
			<th rowspan="2">Aksi</th>
		</tr>
		<tr>
			<th>Judul/Modul</th>
			<th>Jam Pelaksanaan</th>
		</tr>
	</thead>
	<tbody id="datatable52"></tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="text" class="form-control" id="st5f2c1"></td></td>
			<td><input type="text" class="form-control" id="st5f2c2"></td></td>
			<td><input type="text" class="form-control" id="st5f2c3"></td></td>
			<td><input type="text" class="form-control" id="st5f2c4"></td></td>
			<td>
				<button id="st5f2btnsimpan" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button>
			</td>
		</tr>

	</tbody>

</table>

<script type="text/javascript">
	
	$(document).ready(function(){
		loadtable52();
	});


	
	$('#st5f2btnsimpan').click(function(){

		
		var st5f2c1 = $('#st5f2c1').val();
		var st5f2c2 = $('#st5f2c2').val();
		var st5f2c3 = $('#st5f2c3').val();
		var st5f2c4 = $('#st5f2c4').val();

		$.ajax({
			method:"POST",
			url: "<?php echo base_url('ajaxcontrol1/simpandata52');?>",
			data:{idsubmission: <?php echo $idsubmission; ?>, field1: st5f2c1, field2: st5f2c2, field3: st5f2c3, field4: st5f2c4 }
		}).done(function(data){
			loadtable52();
			$('#st5f2c1').val('');
			$('#st5f2c2').val('');
			$('#st5f2c3').val('');
			$('#st5f2c4').val('');
		}).error(function(err){
			console.log(err);
		});
	});

	function loadtable52(){
		$.ajax({
			method:"POST",
			url: "<?php echo base_url('ajaxcontrol1/getdata52');?>",
			data:{idsubmission: <?php echo $idsubmission; ?>}
		}).done(function(data){
			$('#datatable52').html(data);
		}).error(function(err){
			console.log(err);
		});
	}
	function hapusdata52(idrec){
		$.ajax({
			method:"POST",
			url: "<?php echo base_url('ajaxcontrol1/hapusdata52');?>",
			data:{idrecord: idrec}
		}).done(function(data){
			loadtable52();
		}).error(function(err){
			console.log(err);
		});
	}
</script>