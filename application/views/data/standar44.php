
<h3>Tuliskan Aktivitas Mengajar Dosesn Tetap yang Bidang Keahlianya Sesuai Dengan Bidang PS, Dalam Satu Tahun Akademik Terakhir Di PS ini</h3>
<h4>Semster Ganjil</h4>
<input type="text" class="form-control" id="sinput44" placeholder="search">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Dosen Tetap</th>
			<th>Bidang Keahlian</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Jumlah Kelas</th>
			<th>Jumlah Pertemuan yang Direncanakan</th>
			<th>Jumlah Pertemua yang Dilaksanakan</th>
			
		</tr>
	</thead>
	<tbody id="dataajardosentetapsemester1">
		

	</tbody>
	<tbody id="total44sm1"></tbody>
	

</table>
<h4>Semester Genap</h4>
<input type="text" class="form-control" id="sinput45" placeholder="search">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Dosen Tetap</th>
			<th>Bidang Keahlian</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Jumlah Kelas</th>
			<th>Jumlah Pertemuan yang Direncanakan</th>
			<th>Jumlah Pertemua yang Dilaksanakan</th>
			
		</tr>
	</thead>
	<tbody id="dataajardosentetapsemester2">
		

	</tbody>
	<tbody id="total44sm2"></tbody>
	

</table>

















<div id="modalganjil" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="namadosenmodal">Basing</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Kode Mata Kuliah	</th>
							<th>Nama Mata Kuliah	</th>
							<th>Jumlah Kelas	</th>
							<th>Jumlah Pertemuan yang Direncanakan	</th>
							<th>Jumlah Pertemua yang Dilaksanakan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="datatabel44modal">
						
					</tbody>
					<tbody>
						<tr>
						<input type="hidden" id="modalidparent">
							<td> <input type="text" id="st4f41c1modal" class="form-control"></td>
							<td> <input type="text" id="st4f41c2modal" class="form-control"></td>
							<td> <input type="number" value="0" min="0" id="st4f41c3modal" class="form-control"></td>
							<td> <input type="number" value="0" min="0" id="st4f41c4modal" class="form-control"></td>
							<td> <input type="number" value="0" min="0" id="st4f41c5modal" class="form-control"></td>
							<td> <button id="simpandetail44" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> </button></td>
						</tr>
					</tbody>
				</table>

			</div>
			<div class="modal-footer">
					 <button type="button" class="btn btn-primary" id="detailbtnsimpan">Simpan</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function(){
	loadtabe44();
	$("#sinput44").keyup(function () {
		    //split the current value of searchInput
		    var data = this.value.split(" ");
		    //create a jquery object of the rows
		    var jo = $("#dataajardosentetapsemester1").find("tr");
		    if (this.value == "") {
		        jo.show();
		        return;
		    }
		    //hide all the rows
		    jo.hide();

		    //Recusively filter the jquery object to get results.
		    jo.filter(function (i, v) {
		        var $t = $(this);
		        for (var d = 0; d < data.length; ++d) {
		            if ($t.is(":contains('" + data[d] + "')")) {
		                return true;
		            }
		        }
		        return false;
		    })
		    //show the rows that match.
		    .show();
		}).focus(function () {
		    this.value = "";
		    $(this).css({
		        "color": "black"
		    });
		    $(this).unbind('focus');
		}).css({
		    "color": "#C0C0C0"
		});
	loadtabe45();
	$("#sinput45").keyup(function () {
		    //split the current value of searchInput
		    var data = this.value.split(" ");
		    //create a jquery object of the rows
		    var jo = $("#dataajardosentetapsemester2").find("tr");
		    if (this.value == "") {
		        jo.show();
		        return;
		    }
		    //hide all the rows
		    jo.hide();

		    //Recusively filter the jquery object to get results.
		    jo.filter(function (i, v) {
		        var $t = $(this);
		        for (var d = 0; d < data.length; ++d) {
		            if ($t.is(":contains('" + data[d] + "')")) {
		                return true;
		            }
		        }
		        return false;
		    })
		    //show the rows that match.
		    .show();
		}).focus(function () {
		    this.value = "";
		    $(this).css({
		        "color": "black"
		    });
		    $(this).unbind('focus');
		}).css({
		    "color": "#C0C0C0"
		});
});

	$('#btntambahdata44').click(function(){
		var st4f41c1 = $('#st4f41c1').val();
		var st4f41c2 = $('#st4f41c2').val();


		tambahdosen44(1,st4f41c1,st4f41c2);
		
	});

	$('#btntambahdata45').click(function(){
		var st4f42c1 = $('#st4f42c1').val();
		var st4f42c2 = $('#st4f42c2').val();


		tambahdosen44(2,st4f42c1,st4f42c2);
		
	});

	function tambahdosen44(smstr,nama,bidang){
		 	$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/tambahdosen44');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>,field1: nama,field2: bidang,field3: smstr}
	        })
	          .done(function( msg ) {
	              
	              $('#namadosenmodal').text(nama);

              			loadtabelmodal44(msg);

	              $('#modalidparent').val(msg);
	              
	              $('#modalganjil').modal('show');



	        }).error(function(err){
	        	console.log(err);
	        });
	}

	function loadtabelmodal44(id){
		$('#st4f41c1modal').val('');
		$('#st4f41c2modal').val('');
		$('#st4f41c3modal').val(0);
		$('#st4f41c4modal').val(0);
		$('#st4f41c5modal').val(0);
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/getdatadetaildataajardosentetap');?>",
	          data: {iddataajardosentetap: id}
	        })
	          .done(function( msg ) {
	            	$('#datatabel44modal').html('');

		          	for (var i = msg.length - 1; i >= 0; i--) {
		          		$('#datatabel44modal').append('<tr> <td>'+msg[i].kode_matakuliah+'</td> <td>'+msg[i].nama_matakuliah+'</td> <td>'+msg[i].jumlah_kelas+'</td> <td>'+msg[i].jumlah_pertemuan_direncanakan+'</td> <td>'+msg[i].jumlah_pertemuan_terlaksana+'</td> <td> </tr>');

		          	};

	        }).error(function(err){
	        	console.log(err);
	        });
	}

	$('#simpandetail44').click(function(){
		var modalidparent = $('#modalidparent').val();
		var st4f41c1modal = $('#st4f41c1modal').val();
		var st4f41c2modal = $('#st4f41c2modal').val();
		var st4f41c3modal = $('#st4f41c3modal').val();
		var st4f41c4modal = $('#st4f41c4modal').val();
		var st4f41c5modal = $('#st4f41c5modal').val();

		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/simpandatadetaildataajardosentetap');?>",
	          data: {field1: modalidparent,field2: st4f41c1modal,field3: st4f41c2modal,field4: st4f41c3modal,field5: st4f41c4modal,field6: st4f41c5modal}
	        })
	          .done(function( msg ) {
	            	
	          	loadtabelmodal44(msg);
	          	console.log(msg);
	        }).error(function(err){
	        	console.log(err);
	        });


	});

	function loadtabe44(){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/getdata44');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>}
	        })
	          .done(function( msg ) {
	            	
	            	$('#dataajardosentetapsemester1').html(msg);
	            	gettotal44sm1();

	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}
	function loadtabe45(){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/getdata45');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>}
	        })
	          .done(function( msg ) {
	            	
	            	$('#dataajardosentetapsemester2').html(msg);
	            	gettotal44sm2();

	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}

	function gettotal44sm1(){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/gettotal44');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>,semester:1}
	        })
	          .done(function( msg ) {
	            	
	            	$('#total44sm1').html(msg);
	            	// console.log(msg);


	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}
	function gettotal44sm2(){
			$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/gettotal44');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>,semester:2}
	        })
	          .done(function( msg ) {
	            	
	            	$('#total44sm2').html(msg);

	            	// console.log(msg);

	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}

	function hapusdetail44(iddetail,idparent){
		console.log(iddetail);
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/hapusdetail44');?>",
	          data: {idrecord: iddetail}
	        })
	          .done(function( msg ) {
	            	
	            	loadtabelmodal44(idparent);

	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}

	$('#detailbtnsimpan').click(function(){
		loadtabe44();
		loadtabe45();
		var st4f41c1 = $('#st4f41c1').val('');
		var st4f41c2 = $('#st4f41c2').val('');
		var st4f42c1 = $('#st4f41c1').val('');
		var st4f42c2 = $('#st4f41c2').val('');
		$('#modalganjil').modal('hide');

	});

	function hapusdata44(iddata){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/hapus44');?>",
	          data: {idrecord: iddata}
	        })
	          .done(function( msg ) {
	            	
	            	loadtabe44();
	            	loadtabe45();
	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}
</script>
