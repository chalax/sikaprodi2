<h3>Contoh soal ujian dalam satu tahun terakhir untuk 5 mata kuliah keahlian berikut silabusnya</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode dan Nama Mata Kuliah</th>
			<th>Posisi Contoh Soal</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="tabledata53"></tbody>
	<tbody>
		<tr>
			<td>
				<select id="st5f3c1" class="form-control">
					<option value="1">Ganjil</option>
					<option value="2">Genap</option>
				</select>
			</td>
			<td><input type="text" class="form-control" id="st5f3c2"></td>
			<td>
				<input type="hidden" class="form-control" id="st5f3c3">
			<span class="btn btn-success fileinput-button">
							        <i id="st5f3btnupload" class="glyphicon glyphicon-open"></i>
							        
							        <!-- The file input field used as target for the file upload widget -->
							        <input id="st5f3upload" type="file" name="files[]" accept="application/pdf">
							    </span>

			</td>
			<td><button id="st5f3btnsimpan" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
			

		</tr>

	</tbody>

</table>
<script type="text/javascript">
	$(document).ready(function(){
		loadtabel53();
	});
	function loadtabel53(){
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ajaxcontrol1/getdata53');?>",
			data: {idsubmission: <?php echo $idsubmission;?>}
		}).done(function(data){
			$('#tabledata53').html(data);
		}).error(function(err){
			console.log(err);
		});
	}

	function hapusdata53(idrec,idfile){
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ajaxcontrol1/hapusdata53');?>",
			data: {idrecord: idrec,idattachment:idfile}
		}).done(function(data){
			loadtabel53();
		}).error(function(err){
			console.log(err);
		});
	}

	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st5f3upload').fileupload({
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
                                           $('#st5f3c3').val(msg);
                                           $('#st5f3btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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


	$('#st5f3btnsimpan').click(function(){
		var st5f3c1 = $('#st5f3c1').val();
		var st5f3c2 = $('#st5f3c2').val();
		var st5f3c3 = $('#st5f3c3').val();
		

		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ajaxcontrol1/simpandata53');?>",
			data: {idsubmission: <?php echo $idsubmission;?>,field1: st5f3c1, field2: st5f3c2, field3: st5f3c3}
		}).done(function(data){
			loadtabel53();
			$('#st5f3c1').val(1);
			$('#st5f3c2').val('');
			$('#st5f3c3').val('');
			$('#st5f3btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');
		}).error(function(err){

		});

	});



</script>