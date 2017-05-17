<h3>Tenaga Kependidikan</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Jenis Tenaga Kependidikan</th>
			<th colspan="8">Jumlah Tenaga Kependidikan Dengan Pendidikan Terakhir</th>
			<th rowspan="2">Unik Kerja</th>
			<th rowspan="2">Aksi</th>

		</tr>
		<tr>
			<th>S3</th>
			<th>S2</th>
			<th>S1</th>
			<th>D4</th>
			<th>D3</th>
			<th>D2</th>
			<th>D1</th>
			<th>SMA/SMK</th>
		</tr>
	</thead>
	<tbody id="table414"></tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="text" class="form-control" id="st4f14c1"></td>
			<td><input type="number" value="0" min="0" class="form-control" id="st4f14c2"></td>
			<td><input type="number" value="0" min="0" class="form-control" id="st4f14c3"></td>
			<td><input type="number" value="0" min="0" class="form-control" id="st4f14c4"></td>
			<td><input type="number" value="0" min="0" class="form-control" id="st4f14c5"></td>
			<td><input type="number" value="0" min="0" class="form-control" id="st4f14c6"></td>
			<td><input type="number" value="0" min="0" class="form-control" id="st4f14c7"></td>
			<td><input type="number" value="0" min="0" class="form-control" id="st4f14c8"></td>
			<td><input type="number" value="0" min="0" class="form-control" id="st4f14c9"></td>
			<td><input type="text" class="form-control" id="st4f14c10"></td>
			<td><button id="btn414simpan" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr>

	</tbody>
	<tbody id="totaltable414"></tbody>

</table>

<script type="text/javascript">
	$(document).ready(function(){
		loadtable414();
	});

	function loadtotaltable414(){
		$.ajax({
			method:"POST",
			url: "<?php echo base_url('ajaxcontrol/gettotaldata414');?>",
			data:{idsubmission: <?php echo $idsubmission;?> }
		}).done(function(data){
			$('#totaltable414').html(data);
		}).error(function(err){

		});
	}

	$('#btn414simpan').click(function(){
		var st4f14c1 = $('#st4f14c1').val();
		var st4f14c2 = $('#st4f14c2').val();
		var st4f14c3 = $('#st4f14c3').val();
		var st4f14c4 = $('#st4f14c4').val();
		var st4f14c5 = $('#st4f14c5').val();
		var st4f14c6 = $('#st4f14c6').val();
		var st4f14c7 = $('#st4f14c7').val();
		var st4f14c8 = $('#st4f14c8').val();
		var st4f14c9 = $('#st4f14c9').val();
		var st4f14c10 = $('#st4f14c10').val();

		$.ajax({
			method:"POST",
			url: "<?php echo base_url('ajaxcontrol/simpandata414');?>",
			data:{field1: st4f14c1, field2: st4f14c2, field3: st4f14c3, field4: st4f14c4, field5: st4f14c5, field6: st4f14c6, field7: st4f14c7, field8: st4f14c8, field9: st4f14c9, field10: st4f14c10, idsubmission: <?php echo $idsubmission;?> }
		}).done(function(data){
			$('#st4f14c1').val('');
			$('#st4f14c2').val('0');
			$('#st4f14c3').val('0');
			$('#st4f14c4').val('0');
			$('#st4f14c5').val('0');
			$('#st4f14c6').val('0');
			$('#st4f14c7').val('0');
			$('#st4f14c8').val('0');
			$('#st4f14c9').val('0');
			$('#st4f14c10').val('');
			loadtable414();
		}).error(function(err){

		});
	});

	function loadtable414(){
		$.ajax({
			method:"POST",
			url: "<?php echo base_url('ajaxcontrol/getdata414');?>",
			data:{idsubmission: <?php echo $idsubmission;?> }
		}).done(function(data){
			$('#table414').html(data);
			loadtotaltable414();
		}).error(function(err){

		});
	}

	function hapusdata414(idrec){
		$.ajax({
			method:"POST",
			url: "<?php echo base_url('ajaxcontrol/hapusdata414');?>",
			data:{idrecord: idrec }
		}).done(function(data){
			loadtable414();
		}).error(function(err){

		});
	}

</script>