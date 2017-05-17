<h3>Karya dosen atau mahasiswa program studi yang telah memperoleh Hak atas Kekayaan Intelektual (Paten/HaKI) atau karya yang mendapat pengakuan/penghargaan dari lembaga nasional/internasional selama tiga tahun terakhir</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th colspan="2">Nama Karya</th>
			
		</tr>
		<tr>
			
				<th>Paten/HaKI</th>
				<th>Karya yang Mendapat Pengakuan/Penghargaan Dari Lembaga Wilayah/Nasional/Internasional</th>
			
		</tr>
	</thead>
	<tbody id="tabledata73">
		
	</tbody>
	
</table>
<script type="text/javascript">
	$('#btnsimpan73').click(function(){
		var st7f3c1 = $('#st7f3c1').val();
		var st7f3c2 = $('#st7f3c2').val();
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/simpandata73');?>",
          data: {idsubmission:<?php echo $idsubmission;?>, field1: st7f3c1, field2: st7f3c2}
        })
          .done(function( msg ) {
           reloadtabel73();
           $('#st7f3c1').val('');
			$('#st7f3c2').val('');
			
           

        })
          .error(function( err ){
              console.log( err );
        });
	});

	function reloadtabel73(){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/getdata73');?>",
          data: {idsubmission:<?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
          $('#tabledata73').html(msg);

        })
          .error(function( err ){
              console.log( err );
        });
	}

	function hapusdata73(idrec){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/hapusdata73');?>",
          data: {idrecord:idrec}
        })
          .done(function( msg ) {
          reloadtabel73();

        })
          .error(function( err ){
              console.log( err );
        });
	}

	$(document).ready(function(){
		reloadtabel73();
	});

</script>