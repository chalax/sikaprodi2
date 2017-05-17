<h3>Data prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan dsb. kecuali ruang dosen yang dipergunakan PS dalam proses belajar mengajar</h3>
<table class="table table-bordered">
	<thead>
		<tr>
		
			
			<th rowspan="2">No</th>
			<th rowspan="2">Jenis Prasarana</th>
			<th rowspan="2">Jumlah Unit</th>
			<th rowspan="2">Total Luas (m2)</th>
			<th colspan="2">Kepemilikan</th>
			<th colspan="2">Kondisi</th>
			<th rowspan="2">Utilisasi (Jam/Minggu)</th>
			
		</tr>
		<tr>
			<th>SD</th>
			<th>SW</th>
			<th>Terawat</th>
			<th>Tidak Terawat</th>
		</tr>
		

	</thead>
	<tbody id="tabledata66"></tbody>

	
</table>
<script type="text/javascript">

	function netralize66(){
		$('#st6f6c1').val('');
		$('#st6f6c2').val(0);
		$('#st6f6c3').val(0);
		$('#st6f6c8').val(0);
		$('#st6f6c4').attr('checked',false);
		$('#st6f6c5').attr('checked',false);
		$('#st6f6c6').attr('checked',false);
		$('#st6f6c7').attr('checked',false);
	}

	$('#btnsimpan66').click(function(){
				var st6f6c1 = $('#st6f6c1').val();
				var st6f6c2 = $('#st6f6c2').val();
				var st6f6c3 = $('#st6f6c3').val();
				var st6f6c4 = '';
				var st6f6c5 = '';
				var st6f6c6 = '';
				var st6f6c7 = '';
				var st6f6c8 = $('#st6f6c8').val();
					
					if($('#st6f6c4').is(':checked')) {
						st6f6c4 = '1';
					}else{
						st6f6c4='0';
					}
					if($('#st6f6c5').is(':checked')) {
						st6f6c5 = '1';
					}else{
						st6f6c5='0';
					}
					if($('#st6f6c6').is(':checked')) {
						st6f6c6 = '1';
					}else{
						st6f6c6='0';
					}
					if($('#st6f6c7').is(':checked')) {
						st6f6c7 = '1';
					}else{
						st6f6c7='0';
					}


		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/simpandata66');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f6c1, field2: st6f6c2, field3: st6f6c3, field4: st6f6c4, field5: st6f6c5, field6: st6f6c6, field7: st6f6c7, field8: st6f6c8 }
	    })
	      .done(function( msg ) {
	        loaddata66();
	        netralize66();
	    }).error(function(err){
	    	console.log(err);
	    });
	});

	function loaddata66(){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/getdata66');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>}
	    })
	      .done(function( msg ) {
	        $('#tabledata66').html(msg);
	    }).error(function(err){
	    	console.log(err);
	    });
	}
	$(document).ready(function(){
		loaddata66();

	});

	function  hapusdata66(idrec){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/hapusdata66');?>",
	      data: {idrecord: idrec}
	    })
	      .done(function( msg ) {
	        loaddata66();
	    }).error(function(err){
	    	console.log(err);
	    });
	}

</script>