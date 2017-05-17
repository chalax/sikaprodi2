<h3>Prasarana</h3>
<table class="table table-bordered">
	<thead>
		<tr>
		
			
			<th>Ruang Kerja Dosen</th>
			<th>Jumlah Ruang</th>
			<th>Jumlah Luas (m2)</th>
			<th>Aksi</th>
		</tr>
		

	</thead>
	<tbody id="tabledata65"></tbody>
	<tbody>
		<tr>
			
			<td><input type="text" class="form-control" id="st6f5c1"></td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f5c2"></td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f5c3"></td>
			
			<td><button id="btnsimpan65" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr>
	</tbody>
	<tbody id="total65">
		
	</tbody>
</table>

<script type="text/javascript">
	$('#btnsimpan65').click(function(){
		var st6f5c1 = $('#st6f5c1').val();
		var st6f5c2 = $('#st6f5c2').val();
		var st6f5c3 = $('#st6f5c3').val();

		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/simpandata65');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f5c1, field2: st6f5c2, field3: st6f5c3}
	    })
	      .done(function( msg ) {
	           $('#st6f5c1').val('');
				$('#st6f5c2').val(0);
				$('#st6f5c3').val(0);
				
				
	           
	           loaddata65();
	    }).error(function(err){
	    	console.log(err);
	    });
	});

	function loaddata65(){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/getdata65');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>}
	    })
	      .done(function( msg ) {
	        $('#tabledata65').html(msg);
	        gettotal65();
	    }).error(function(err){
	    	console.log(err);
	    });
	}

	function hapusdata65(idrec){
	$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/hapusdata65');?>",
          data: {idrecord:idrec}
        })
          .done(function( msg ) {
          loaddata65();
            
        }).error(function(err){
        	console.log(err);
        });
}

function gettotal65(){
	$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/gettotal65');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>}
	    })
	      .done(function( msg ) {
	        $('#total65').html(msg);
	    }).error(function(err){
	    	console.log(err);
	    });
}
	$(document).ready(function(){
		loaddata65();

	});


</script>