<h3>Kegiatan Tenaga Ahli/Pakar sebagai pembicara dalam seminar/pelatihan, Pembicara Tamu Dsb, Dari Luar PT Sendiri (Tidak Termasuk Dosen Tidak Tetap)</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Tenaga Ahli/Pakar</th>
			<th>Nama dan Judul Kegiatan</th>
			<th>Waktu Pelaksanaan</th>
			<th>Upload</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="datatable49">
		
	</tbody>

	<tbody>
		<tr>
			<td></td>
			<td><input class="form-control" type="text" id="st4f9c1"> </td>
			<td><input class="form-control" type="text" id="st4f9c2"> </td>
			<td><input class="form-control" type="date" id="st4f9c3"> </td>
			
			<td>
				<input type="hidden" id="st4f9c4">
				<span class="btn btn-success fileinput-button">
			        <i id="st4f9btnupload" class="glyphicon glyphicon-open"></i>
			        
			        <!-- The file input field used as target for the file upload widget -->
			        <input id="st4f9upload" type="file" name="files[]" accept="application/pdf">
			    </span>

			</td>
			<td><button id="btnsavestandar49" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr>
	</tbody>
</table>


<script type="text/javascript">

	$(document).ready(function(){
		loaddatastandar49();
	});

	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st4f9upload').fileupload({
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
                                           $('#st4f9c4').val(msg);
                                           $('#st4f9btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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

	$('#btnsavestandar49').click(function(){
		var st4f9c1 = $('#st4f9c1').val();
		var st4f9c2 = $('#st4f9c2').val();
		var st4f9c3 = $('#st4f9c3').val();
		var st4f9c4 = $('#st4f9c4').val();
		
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/simpandata49');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>,field1 :st4f9c1,field2: st4f9c2,field3 :st4f9c3, field4 :st4f9c4}
	        })
	          .done(function( msg ) {
	            	
	            	
	          	loaddatastandar49();
            $('#st4f9btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');
	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	});

	function loaddatastandar49(){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/getdata49');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>}
	        })
	          .done(function( msg ) {
	            	
	              $('#datatable49').html('');

	              	var nmr = 1;
		          	for (var i = msg.length - 1; i >= 0; i--) {
		          		$('#datatable49').append('<tr> <td>'+nmr+'</td> <td>'+msg[i].nama_tenaga_ahli+'</td> <td>'+msg[i].nama_kegiatan+'</td> <td>'+msg[i].waktu_pelaksanaan+'</td> <td><a href="<?php echo base_url();?>submissionfile/download/'+msg[i].id_attachmentfile+'">Download File</a></td><td><button onClick="hapusdata49('+msg[i].id_kegiatan_tenaga_ahli+')" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></td></tr>');
		          	nmr++;
		          	};
	          	
	        }).error(function(err){
	        	console.log(err);
	        });

	    $('#st4f9c1').val('');
		$('#st4f9c2').val('');
		$('#st4f9c3').val('');
		$('#st4f9c4').val('');
	}


	function hapusdata49(idr){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/hapusdata49');?>",
	          data: {idrecord: idr}
	        })
	          .done(function( msg ) {


	             loaddatastandar49();
	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}
</script>