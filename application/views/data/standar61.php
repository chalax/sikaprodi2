<h3>Tuliskan Realisasi perolehan dan alokasi dana (termasuk hibah) dalam juta rupiah termasuk gaji, selama tiga tahun terakhir</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">Sumber Dana</th>
			<th rowspan="2">Jenis Dana</th>
			<th colspan="3">Jumlah Dana (Juta Rupiah)</th>
			
		</tr>
		<tr>
			<th>Th-2</th>
			<th>Th-1</th>
			<th>Th-0</th>
		</tr>
	</thead>
	<tbody id="datatable61"></tbody>
	
	<tbody id="datatotalst6f1">
		
	</tbody>
</table>
<script type="text/javascript">
	$('#btnsimpan61').click(function(){
		var st6f1c1 = $('#st6f1c1').val();
		var st6f1c2 = $('#st6f1c2').val();
		var st6f1c3 = $('#st6f1c3').val();
		var st6f1c4 = $('#st6f1c4').val();
		var st6f1c5 = $('#st6f1c5').val();

		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/simpandata61');?>",
          data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f1c1, field2: st6f1c2, field3: st6f1c3, field4: st6f1c4, field5: st6f1c5 }
        })
          .done(function( msg ) {
            loadtable61();
            $('#st6f1c1').val('');
			$('#st6f1c2').val('');
			$('#st6f1c3').val(0);
			$('#st6f1c4').val(0);
			$('#st6f1c5').val(0);
        }).error(function(err){
        	console.log(err);
        });
	});

	function loadtable61(){

		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/getdata61');?>",
          data: {idsubmission: <?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
            $('#datatable61').html(msg);
            hitungtotal61();
        }).error(function(err){
        	console.log(err);
        });
		
	}

	$(document).ready(function(){
		loadtable61();
	});

	function hapusdata61(idrec){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/hapusdata61');?>",
          data: {idrecord: idrec}
        })
          .done(function( msg ) {
            loadtable61();
        }).error(function(err){
        	console.log(err);
        });
	}

	function hitungtotal61(){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/totaldata61');?>",
          data: {idsubmission: <?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
            $('#datatotalst6f1').html(msg);
        }).error(function(err){
        	console.log(err);
        });
	}


</script>