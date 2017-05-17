<h3>Struktur Kurikulum</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">Semester</th>
			<th rowspan="2">Kode Mata Kuliah</th>
			<th rowspan="2">Nama Mata Kuliah</th>
			<th colspan="2">Bobot SKS Untuk</th>
			<th colspan="2">Beri tanda &#10004 Pada Kolom yang Sesuai</th>
			<th rowspan="2">Bobot Tugas</th>
			<th colspan="3">Kelengkapan</th>
			<th rowspan="2">Unit/jur/fak Penyelenggara</th>
			<th rowspan="2">Bukti Pendukung</th>
			<th rowspan="2">Aksi</th>
		</tr>
		<tr>
			<th>Kuliah</th>
			<th>Praktikum</th>
			<th>Inti<span style="color:transparent">............</span></th>
			<th>Intstitusional</th>
			<th>Deskripsi</th>
			<th>Silabus</th>
			<th>SAP</th>
		</tr>
	</thead>
	<tbody id="datatable51"></tbody>
	
	<tbody>
		
		<tr>
			<td>
				<select class="form-control" id="st5f1c1">
					<option value="1">I</option>
					<option value="2">II</option>
					<option value="3">III</option>
					<option value="4">IV</option>
					<option value="5">V</option>
					<option value="6">VI</option>
					<option value="7">VII</option>
					<option value="8">VIII</option>
				</select>
			</td>


			<td><input type="text" class="form-control" id="st5f1c2"></td>
			<td><input type="text" class="form-control" id="st5f1c3"></td>
			<td><input type="text" class="form-control" id="st5f1c4"></td>
			<td><input type="text" class="form-control" id="st5f1c5"></td>

			<td><input type="checkbox" class="checkbox form-control" id="st5f1c6"></td>
			<td><input type="checkbox" class="checkbox form-control" id="st5f1c7"></td>

			<td><input type="text" class="form-control" id="st5f1c8"></td>
			<td><input type="text" class="form-control" id="st5f1c9"></td>
			<td><input type="text" class="form-control" id="st5f1c10"></td>
			<td><input type="text" class="form-control" id="st5f1c11"></td>
			<td><input type="text" class="form-control" id="st5f1c12"></td>


			<td>
			<input type="hidden" class="form-control" id="st5f1c13">
			<span class="btn btn-success fileinput-button">
							        <i id="st5f1btnupload" class="glyphicon glyphicon-open"></i>
							        
							        <!-- The file input field used as target for the file upload widget -->
							        <input id="st5f1upload" type="file" name="files[]" accept="application/pdf">
							    </span>
			</td>
			<td><button id="st5f1btnsimpan" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr>

	</tbody>
	<tbody>
		<tr>
			<th colspan="3">Total SKS</th>
			<td><span id="totalsks51kuliah"></span></td>
			<td><span id="totalsks51praktikum"></span></td>
			<td></td>
			<td></td>
			<td class="bg-info" colspan="7"></td>
		</tr>
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		loadtabel51();
	});

	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st5f1upload').fileupload({
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
                                           $('#st5f1c13').val(msg);
                                           $('#st5f1btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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



	$('#st5f1btnsimpan').click(function(){
		var st5f1c1 = $('#st5f1c1').val();
		var st5f1c2 = $('#st5f1c2').val();
		var st5f1c3 = $('#st5f1c3').val();
		var st5f1c4 = $('#st5f1c4').val();
		var st5f1c5 = $('#st5f1c5').val();

		var st5f1c6 = '';
		var st5f1c7 = '';

		var st5f1c8 = $('#st5f1c8').val();
		var st5f1c9 = $('#st5f1c9').val();
		var st5f1c10 = $('#st5f1c10').val();
		var st5f1c11 = $('#st5f1c11').val();
		var st5f1c12 = $('#st5f1c12').val();
		var st5f1c13 = $('#st5f1c13').val();

		if($('#st5f1c6').is(':checked')){
			st5f1c6 ='1';
		}else{
			st5f1c6='0';
		}
		if($('#st5f1c7').is(':checked')){
			st5f1c7 ='1';
		}else{
			st5f1c7='0';
		}		

		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ajaxcontrol1/simpandata51');?>",
			data: {idsubmission: <?php echo $idsubmission;?>,field1: st5f1c1, field2: st5f1c2, field3: st5f1c3, field4: st5f1c4, field5: st5f1c5, field6: st5f1c6, field7: st5f1c7, field8: st5f1c8, field9: st5f1c9, field10: st5f1c10, field11: st5f1c11, field12: st5f1c12, field13: st5f1c13}
		}).done(function(data){
			loadtabel51();
			netralizeform();
           $('#st5f1btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');

		}).error(function(err){

		});

	});
	
	function netralizeform(){
		$('#st5f1c1').val('1');
		$('#st5f1c2').val('');
		$('#st5f1c3').val('');
		$('#st5f1c4').val('');
		$('#st5f1c5').val('');

		$('#st5f1c6').attr('checked',false);
		$('#st5f1c7').attr('checked',false);



		$('#st5f1c8').val('');
		$('#st5f1c9').val('');
		$('#st5f1c10').val('');
		$('#st5f1c11').val('');
		$('#st5f1c12').val('');
		$('#st5f1c13').val('');
	}

	function loadtabel51(){
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ajaxcontrol1/getdata51');?>",
			data: {idsubmission: <?php echo $idsubmission;?>}
		}).done(function(data){
			$('#datatable51').html(data);
			hitungtotalsks51();
		}).error(function(err){

		});
	}

	function hapusdata51(idrec){
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ajaxcontrol1/hapusdata51');?>",
			data: {idrecord: idrec}
		}).done(function(data){
			loadtabel51();
		}).error(function(err){

		});
	}
	function hitungtotalsks51(){
		$.ajax({
				method: "POST",
				url: "<?php echo base_url('ajaxcontrol1/hitungtotalsks51');?>",
				data: {idsubmission: <?php echo $idsubmission;?>}
			}).done(function(data){
				var dt = data.split("|");
				console.log(dt);
				$('#totalsks51kuliah').text(dt[0]);
				$('#totalsks51praktikum').text(dt[1]);
			}).error(function(err){
				console.log(err);
			});
	}
</script>

