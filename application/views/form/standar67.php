<h3>Data prasarana lain yang menunjang(misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik)</h3>
<table class="table table-bordered">
	<thead>
		<tr>
		
			
			<th rowspan="2">No</th>
			<th rowspan="2">Jenis Prasarana Penunjang</th>
			<th rowspan="2">Jumlah Unit</th>
			<th rowspan="2">Total Luas (m2)</th>
			<th colspan="2">Kepemilikan</th>
			<th colspan="2">Kondisi</th>
			<th rowspan="2">Utilisasi (Jam/Minggu)</th>
			<th rowspan="2">Aksi</th>
		</tr>
		<tr>
			<th>SD</th>
			<th>SW</th>
			<th>Terawat</th>
			<th>Tidak Terawat</th>
		</tr>
		

	</thead>
	<tbody id="tabledata67"></tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="text" class="form-control" id="st6f7c1"></td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f7c2"></td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f7c3"></td>
			<td><input type="checkbox" class="form-control checkbox" id="st6f7c4"> </td>
			<td><input type="checkbox" class="form-control checkbox" id="st6f7c5"> </td>
			<td><input type="checkbox" class="form-control checkbox" id="st6f7c6"> </td>
			<td><input type="checkbox" class="form-control checkbox" id="st6f7c7"> </td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f7c8"></td>
			
			<td><button id="btnsimpan67" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr>
	</tbody>
	
</table>
<script type="text/javascript">

	function netralize67(){
		$('#st6f7c1').val('');
		$('#st6f7c2').val(0);
		$('#st6f7c3').val(0);
		$('#st6f7c4').attr('checked',false);
		$('#st6f7c5').attr('checked',false);
		$('#st6f7c6').attr('checked',false);
		$('#st6f7c7').attr('checked',false);
		$('#st6f7c8').val(0);
	}

	$('#btnsimpan67').click(function(){
				var st6f7c1 = $('#st6f7c1').val();
				var st6f7c2 = $('#st6f7c2').val();
				var st6f7c3 = $('#st6f7c3').val();
				var st6f7c4 = '';
				var st6f7c5 = '';
				var st6f7c6 = '';
				var st6f7c7 = '';
				var st6f7c8 = $('#st6f7c8').val();
					
					if($('#st6f7c4').is(':checked')) {
						st6f7c4 = '1';
					}else{
						st6f7c4='0';
					}
					if($('#st6f7c5').is(':checked')) {
						st6f7c5 = '1';
					}else{
						st6f7c5='0';
					}
					if($('#st6f7c6').is(':checked')) {
						st6f7c6 = '1';
					}else{
						st6f7c6='0';
					}
					if($('#st6f7c7').is(':checked')) {
						st6f7c7 = '1';
					}else{
						st6f7c7='0';
					}


		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/simpandata67');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f7c1, field2: st6f7c2, field3: st6f7c3, field4: st6f7c4, field5: st6f7c5, field6: st6f7c6, field7: st6f7c7, field8: st6f7c8 }
	    })
	      .done(function( msg ) {
	        loaddata67();
	        netralize67();
	    }).error(function(err){
	    	console.log(err);
	    });
	});

	function loaddata67(){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/getdata67');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>}
	    })
	      .done(function( msg ) {
	        $('#tabledata67').html(msg);
	    }).error(function(err){
	    	console.log(err);
	    });
	}
	$(document).ready(function(){
		loaddata67();

	});

	function  hapusdata67(idrec){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/hapusdata67');?>",
	      data: {idrecord: idrec}
	    })
	      .done(function( msg ) {
	        loaddata67();
	    }).error(function(err){
	    	console.log(err);
	    });
	}

</script>