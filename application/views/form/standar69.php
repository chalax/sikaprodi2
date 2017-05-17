<h3>Tuliskan peralatan utama yang digunakan di laboratorium (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/balai kesehatan, green house, lahan untuk pertanian, dan sejenisnya) yang digunakan dalam proses pembelajaran di jurusan/fakultas/PT</h3>
<table class="table table-bordered">
	<thead>
		<tr>
		
			
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Laboratorium</th>
			<th rowspan="2">Jenis Peralatan Utama</th>
			<th rowspan="2">Jumlah Unit</th>
			<th rowspan="2">Rasio Alat:Mhs per Kegiatan Praktikum/Praktek</th>
			<th colspan="2">Kepemilikan</th>
			<th colspan="2">Kondisi</th>
			<th rowspan="2">Rata-Rata Penggunaan (Jam/Minggu)</th>
			<th rowspan="2">Aksi</th>
		</tr>
		<tr>
			<th>SD</th>
			<th>SW</th>
			<th>Terawat</th>
			<th>Tidak Terawat</th>
		</tr>
		

	</thead>
	<tbody id="tabledata69"></tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="text" class="form-control" id="st6f9c11"></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			
			<td><button id="btnsimpan69" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr>
	</tbody>
	
</table>


<div id="modal69" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="namadosenmodal69"></h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<thead>
						<tr>
						
							
							<th rowspan="2">No</th>
							<th rowspan="2">Jenis Peralatan Utama</th>
							<th rowspan="2">Jumlah Unit</th>
							<th rowspan="2">Rasio Alat:Mhs per Kegiatan Praktikum/Praktek</th>
							<th colspan="2">Kepemilikan</th>
							<th colspan="2">Kondisi</th>
							<th rowspan="2">Rata-Rata Penggunaan (Jam/Minggu)</th>
							<th rowspan="2">Aksi</th>
						</tr>
						<tr>
							<th>SD</th>
							<th>SW</th>
							<th>Terawat</th>
							<th>Tidak Terawat</th>
						</tr>
						

					</thead>
					<tbody id="tabledata69modal"></tbody>
					<tbody>
						<tr>
							<td></td>
							<td><input type="text" class="form-control" id="st6f9c1modal"></td>
							<td><input type="number" min="0" value="0" class="form-control" id="st6f9c2modal"></td>
							<td><input type="text" class="form-control" id="st6f9c3modal"></td>
							<td><input type="checkbox" class="form-control checkbox" id="st6f9c4modal"> </td>
							<td><input type="checkbox" class="form-control checkbox" id="st6f9c5modal"> </td>
							<td><input type="checkbox" class="form-control checkbox" id="st6f9c6modal"> </td>
							<td><input type="checkbox" class="form-control checkbox" id="st6f9c7modal"> </td>
							<td><input type="number" min="0" value="0" class="form-control" id="st6f9c8modal"></td>
							<input type="hidden" id="st6f9c9modal">
							<td><button id="btnsimpan69modal" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
						</tr>
					</tbody>
					
				</table>

			</div>
			<div class="modal-footer">
					 <button type="button" class="btn btn-primary" id="detail69btnsimpan">Selesai</button>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		loadtabel69();
	});
	$('#detail69btnsimpan').click(function(){
		$('#modal69').modal('hide');
		netralizemodal69();
		loadtabel69();
	});
	$('#btnsimpan69').click(function(){
		var st6f9c11 = $('#st6f9c11').val();
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/simpaninduk69');?>",
          data: {idsubmission: <?php echo $idsubmission;?>, namalab: st6f9c11 }
        })
          .done(function( msg ) {
              $('#st6f9c9modal').val(msg);
             
              $('#namadosenmodal69').text(st6f9c11);
              $('#tabledata69modal').html('');
              $('#modal69').modal('show');

              
        }).error(function(err){
        	  console.log(err);
        });
	});
	function netralizemodal69(){
		$('#st6f9c11').val('');
		
		$('#st6f9c1modal').val('');
		$('#st6f9c2modal').val('');
		$('#st6f9c3modal').val('');
		$('#st6f9c4modal').attr('checked',false);
		$('#st6f9c5modal').attr('checked',false);
		$('#st6f9c6modal').attr('checked',false);
		$('#st6f9c7modal').attr('checked',false);
		$('#st6f9c8modal').val('');
	}
	$('#btnsimpan69modal').click(function(){
				var st6f9c9 = $('#st6f9c9modal').val();
				var st6f9c1 = $('#st6f9c1modal').val();
				var st6f9c2 = $('#st6f9c2modal').val();
				var st6f9c3 = $('#st6f9c3modal').val();
				var st6f9c4 = '';
				var st6f9c5 = '';
				var st6f9c6 = '';
				var st6f9c7 = '';
				var st6f9c8 = $('#st6f9c8modal').val();
					
					if($('#st6f9c4modal').is(':checked')) {
						st6f9c4 = '1';
					}else{
						st6f9c4='0';
					}
					if($('#st6f9c5modal').is(':checked')) {
						st6f9c5 = '1';
					}else{
						st6f9c5='0';
					}
					if($('#st6f9c6modal').is(':checked')) {
						st6f9c6 = '1';
					}else{
						st6f9c6='0';
					}
					if($('#st6f9c7modal').is(':checked')) {
						st6f9c7 = '1';
					}else{
						st6f9c7='0';
					}


		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/simpandata69modal');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f9c1, field2: st6f9c2, field3: st6f9c3, field4: st6f9c4, field5: st6f9c5, field6: st6f9c6, field7: st6f9c7, field8: st6f9c8,field9: st6f9c9 }
	    })
	      .done(function( msg ) {
	        loadtabelmdel69(st6f9c9);
	    }).error(function(err){
	    	console.log(err);
	    });
	});

	function loadtabelmdel69(idinduk){
		$('#tabledata69modal').html('');
		netralizemodal69();
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/getdata69modal');?>",
	      data: {idinduk69: idinduk}
	    })
	      .done(function( msg ) {
	        $('#tabledata69modal').html(msg);
	    }).error(function(err){
	    	console.log(err);
	    });
	}

	function loadtabel69(){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/getdata69');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>}
	    })
	      .done(function( msg ) {
	        $('#tabledata69').html(msg);
	    }).error(function(err){
	    	console.log(err);
	    });
	}

	function hapusdata69modal(idrec,idparent){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/hapusdata69modal');?>",
	      data: {idrecord: idrec}
	    })
	      .done(function( msg ) {
	        loadtabelmdel69(idparent);
	        console.log(msg);
	    }).error(function(err){
	    	console.log(err);
	    });

	}
	function hapusdata69(idrec){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/hapusdata69');?>",
	      data: {idrecord: idrec}
	    })
	      .done(function( msg ) {
	        loadtabel69();
	    }).error(function(err){
	    	console.log(err);
	    });
	}

</script>