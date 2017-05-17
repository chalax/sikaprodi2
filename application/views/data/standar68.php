<h3>Pustaka (buku teks, karya ilmiah, dan jurnal; termasuk juga dalam bentuk CD ROM dan media lainya)</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Jenis Pustaka</th>
			<th>Jumlah Judul</th>
			<th>Jumlah Copy</th>
			
		</tr>
	</thead>
	<tbody id="tabledata68"></tbody>
	
</table>

<script type="text/javascript">
	$('#btnsimpan68').click(function(){
		var st6f8c1 = $('#st6f8c1').val();
		var st6f8c2 = $('#st6f8c2').val();
		var st6f8c3 = $('#st6f8c3').val();

		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/simpandata68');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f8c1, field2: st6f8c2, field3: st6f8c3}
	    })
	      .done(function( msg ) {
	        loaddata68();
	        $('#st6f8c1').val('');
			$('#st6f8c2').val(0);
			$('#st6f8c3').val(0);
	        
	    }).error(function(err){
	    	console.log(err);
	    });
	});

	function loaddata68(){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/getdata68');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>}
	    })
	      .done(function( msg ) {
	       $('#tabledata68').html(msg);
	        
	    }).error(function(err){
	    	console.log(err);
	    });
	}
	$(document).ready(function(){
		loaddata68();
	});

	function  hapusdata68(idrec){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/hapusdata68');?>",
	      data: {idrecord: idrec}
	    })
	      .done(function( msg ) {
	        loaddata68();
	    }).error(function(err){
	    	console.log(err);
	    });
	}
</script>