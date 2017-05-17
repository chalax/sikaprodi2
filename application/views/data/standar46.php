
<h3>Tuliskan Aktivitas Mengajar Dosesn Tetap yang Bidang Keahlianya Diluar PS, Dalam Satu Tahun Akademik Terakhir Di PS ini</h3>
<input type="text" class="form-control" id="sinput46" placeholder="search">
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
			
		</tr>
	</thead>
	<tbody id="datatabel46">
		
	</tbody>
	<tbody id="totaltable46"></tbody>
	

</table>

<script type="text/javascript">
	$(document).ready(function(){
		loaddatastandar46();
		$("#sinput46").keyup(function () {
		    //split the current value of searchInput
		    var data = this.value.split(" ");
		    //create a jquery object of the rows
		    var jo = $("#datatabel46").find("tr");
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
		          		$('#datatabel46').append('<tr> <td>'+nmr+'</td> <td>'+msg[i].nama_dosen+'</td> <td>'+msg[i].bidang_keahlian+'</td> <td>'+msg[i].kode_matakuliah+'</td> <td>'+msg[i].nama_matakuliah+'</td> <td>'+msg[i].jumlah_kelas+'</td> <td>'+msg[i].jumlah_pertemuan_direncanakan+'</td> <td>'+msg[i].jumlah_pertemuan_terlaksana+'</td> </tr>');
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
</script>