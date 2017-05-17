
<h3>Tuliskan Aktivitas Mengajar Dosesn Tetap yang Bidang Keahlianya Diluar PS, Dalam Satu Tahun Akademik Terakhir Di PS ini</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			
			<th>No.</th>
			<th>Nama Dosen</th>
			<th>Bidang Keahliah</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Jumlah Kelas</th>
			<th>Jumlah Pertemuan yang Direncanakan</th>
			<th>Jumlah Pertemuan yang Dilaksanakan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="datatabel46">
		
	</tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="text" id="st4f6c1" class="form-control"></td>
			<td><input type="text" id="st4f6c2" class="form-control"></td>
			<td><input type="text" id="st4f6c3" class="form-control"></td>
			<td><input type="text" id="st4f6c4" class="form-control"></td>
			<td><input type="number" value="0" min="0" id="st4f6c5" class="form-control"></td>
			<td><input type="number" value="0" min="0" id="st4f6c6" class="form-control"></td>
			<td><input type="number" value="0" min="0" id="st4f6c7" class="form-control"></td>
			<td><button id="btnsavestandar46" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr>
	</tbody>
	<tbody id="totaltable46"></tbody>

</table>

<script type="text/javascript">
	$(document).ready(function(){
		loaddatastandar46();
	});

	$('#btnsavestandar46').click(function(){
		var st4f6c1 = $('#st4f6c1').val();
		var st4f6c2 = $('#st4f6c2').val();
		var st4f6c3 = $('#st4f6c3').val();
		var st4f6c4 = $('#st4f6c4').val();
		var st4f6c5 = $('#st4f6c5').val();
		var st4f6c6 = $('#st4f6c6').val();
		var st4f6c7 = $('#st4f6c7').val();

		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/simpandata46');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>,field1: st4f6c1,field2: st4f6c2,field3: st4f6c3,field4: st4f6c4,field5: st4f6c5,field6: st4f6c6,field7: st4f6c7}
	        })
	          .done(function( msg ) {
	            	
	            	
	          	loaddatastandar46();
	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	});

	function loaddatastandar46(){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/getdata46');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>}
	        })
	          .done(function( msg ) {
	            	
	              $('#datatabel46').html('');

	              	var nmr = 1;
		          	for (var i = msg.length - 1; i >= 0; i--) {
		          		$('#datatabel46').append('<tr> <td>'+nmr+'</td> <td>'+msg[i].nama_dosen+'</td> <td>'+msg[i].bidang_keahlian+'</td> <td>'+msg[i].kode_matakuliah+'</td> <td>'+msg[i].nama_matakuliah+'</td> <td>'+msg[i].jumlah_kelas+'</td> <td>'+msg[i].jumlah_pertemuan_direncanakan+'</td> <td>'+msg[i].jumlah_pertemuan_terlaksana+'</td> <td><button onClick="hapusdata46('+msg[i].id_data_ajar_dosen_tetap_keahlian_diluar_bidang_ps+')" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></td></tr>');
		          	nmr++;
		          	};
	          	loadtotaltable46();
	        }).error(function(err){
	        	console.log(err);
	        });

	    var st4f6c1 = $('#st4f6c1').val('');
		var st4f6c2 = $('#st4f6c2').val('');
		var st4f6c3 = $('#st4f6c3').val('');
		var st4f6c4 = $('#st4f6c4').val('');
		var st4f6c5 = $('#st4f6c5').val(0);
		var st4f6c6 = $('#st4f6c6').val(0);
		var st4f6c7 = $('#st4f6c7').val(0);
	}

	function loadtotaltable46(){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/gettotal46');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>}
	        })
	          .done(function( msg ) {
	            	
	              $('#totaltable46').html(msg);
	              // console.log(msg);
	              
	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}
	function hapusdata46(idr){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/hapusdata46');?>",
	          data: {idrecord: idr}
	        })
	          .done(function( msg ) {


	             loaddatastandar46();
	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}
</script>