
<h3>Data Aktivitas Mengajar Dosen Tidak Tetap Pada Satu Tahun Terakhir Di PS Ini</h3>
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
			<th>Data Upload</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="datatabel48">
		
	</tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="text" id="st4f8c1" class="form-control"></td>
			<td><input type="text" id="st4f8c2" class="form-control"></td>
			<td><input type="text" id="st4f8c3" class="form-control"></td>
			<td><input type="text" id="st4f8c4" class="form-control"></td>
			<td><input type="number" value="0" min="0" id="st4f8c5" class="form-control"></td>
			<td><input type="number" value="0" min="0" id="st4f8c6" class="form-control"></td>
			<td><input type="number" value="0" min="0" id="st4f8c7" class="form-control"></td>
			<input type="hidden" id="st4f8c8">
			<td>
	        	
	        	<span class="btn btn-success fileinput-button">
			        <i id="st4f8btnupload" class="glyphicon glyphicon-open"></i>
			        
			        <!-- The file input field used as target for the file upload widget -->
			        <input id="st4f8upload" type="file" name="files[]" accept="application/pdf">
			    </span>

	        </td>
			<td><button id="btnsavestandar48" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr>
	</tbody>
		<tbody id="totaltable48"></tbody>
</table>

<script type="text/javascript">

	$(document).ready(function(){
		loaddatastandar48();
	});

	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st4f8upload').fileupload({
                url: url,
                dataType: 'json',
                limitMultiFileUploads: 1,
                singleFileUploads: false,
                acceptFileTypes: /(pdf)|(rtf)$/i,  
                done: function (e, data) {
                    $.each(data.result.files, function (index, file) {
                        //$('<p/>').text(file.name).appendTo('#files');

                       
                                $.ajax({
                                      method: "POST",
                                      url: "<?php echo base_url('ajaxcontrol/saveattachmentfile');?>",
                                      data: {fpath: '<?php echo base_url();?>jqfu/server/php/files/'+file.name }
                                    })
                                      .done(function( msg ) {
                                           $('#st4f8c8').val(msg);
                                           $('#st4f8btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
                                           resetprogress();

                                    });
                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');
        });

	$('#btnsavestandar48').click(function(){
		var st4f6c1 = $('#st4f8c1').val();
		var st4f6c2 = $('#st4f8c2').val();
		var st4f6c3 = $('#st4f8c3').val();
		var st4f6c4 = $('#st4f8c4').val();
		var st4f6c5 = $('#st4f8c5').val();
		var st4f6c6 = $('#st4f8c6').val();
		var st4f6c7 = $('#st4f8c7').val();
		var st4f6c8 = $('#st4f8c8').val();

		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/simpandata48');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>,field1: st4f6c1,field2: st4f6c2,field3: st4f6c3,field4: st4f6c4,field5: st4f6c5,field6: st4f6c6,field7: st4f6c7,field8: st4f6c8}
	        })
	          .done(function( msg ) {
	            	
	            	
	          	loaddatastandar48();
            $('#st4f8btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');
	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	});

	function loaddatastandar48(){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/getdata48');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>}
	        })
	          .done(function( msg ) {
	            	
	              $('#datatabel48').html('');

	              	var nmr = 1;
		          	for (var i = msg.length - 1; i >= 0; i--) {
		          		$('#datatabel48').append('<tr> <td>'+nmr+'</td> <td>'+msg[i].nama_dosen+'</td> <td>'+msg[i].bidang_keahlian+'</td> <td>'+msg[i].kode_matakuliah+'</td> <td>'+msg[i].nama_matakuliah+'</td> <td>'+msg[i].jumlah_kelas+'</td> <td>'+msg[i].jumlah_pertemuan_direncanakan+'</td> <td>'+msg[i].jumlah_pertemuan_terlaksana+'</td> <td><a href="<?php echo base_url();?>submissionfile/download/'+msg[i].id_attachmentfile+'">Download File</a></td><td><button onClick="hapusdata48('+msg[i].id_data_ajar_dosen_tidak_tetap+')" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></td></tr>');
		          	nmr++;
		          	};

		          	loadtotaltable48();
	          	
	        }).error(function(err){
	        	console.log(err);
	        });

	    $('#st4f8c1').val('');
		$('#st4f8c2').val('');
		$('#st4f8c3').val('');
		$('#st4f8c4').val('');
		$('#st4f8c5').val(0);
		$('#st4f8c6').val(0);
		$('#st4f8c7').val(0);
		$('#st4f8c8').val('');
	}


	function hapusdata48(idr){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/hapusdata48');?>",
	          data: {idrecord: idr}
	        })
	          .done(function( msg ) {


	             loaddatastandar48();
	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}
	function loadtotaltable48(){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/gettotal48');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>}
	        })
	          .done(function( msg ) {
	            	
	              $('#totaltable48').html(msg);
	              // console.log(msg);
	              
	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}
</script>