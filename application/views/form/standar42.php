<h3>Dosen Tetap yang Bidang Keahlianya Diluar Bidang PS:</h3>

<div class="container">
	<div class="row">
		<div class="col-md-12">



			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Dosen</th>
						<th>NIDN</th>
						<th>Tgl-Lahir</th>
						<th>Jabatan Akademik</th>
						<th>Sertifikat Dosen</th>
						<th>Pendidikan D4,S1,S2,S3; Bidang; Asal PT atau Keahlian Praktis</th>
						<th>Upload Data</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody id="datatabeldosentetapdiluarps">
					

				</tbody>
				<tbody>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" id="st4f2c1"></td>
						<td><input class="form-control" type="text" id="st4f2c2"></td>
						<td><input class="form-control" type="date" id="st4f2c3"></td>
						<td><input class="form-control" type="text" id="st4f2c4"></td>
						<td><input class="checkbox form-control" type="checkbox" id="st4f2c5"></td>
						<td><input class="form-control" type="text" id="st4f2c6"></td>
						<input type="hidden" id="st4f2c7">
				            <td>
				            	
				            	<span class="btn btn-success fileinput-button">
							        <i id="st4f2btnupload" class="glyphicon glyphicon-open"></i>
							        
							        <!-- The file input field used as target for the file upload widget -->
							        <input id="st4f2upload" type="file" name="files[]" accept="application/pdf">
							    </span>

				            </td>
						<td>
							<button class="btn btn-info" id="btnst4f2simpan"><span class="glyphicon glyphicon-plus"></span></button>

						</td>
					</tr>
				</tbody>
			</table>




		</div>
	</div>
</div>

<script type="text/javascript">
	
$(document).ready(function(){
	reloadtabel42();
});
	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st4f2upload').fileupload({
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
                                           $('#st4f2c7').val(msg);
                                           $('#st4f2btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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


	$('#btnst4f2simpan').click(function(){
		
		var st4f2c1 = $('#st4f2c1').val();
		var st4f2c2 = $('#st4f2c2').val();
		var st4f2c3 = $('#st4f2c3').val();
		var st4f2c4 = $('#st4f2c4').val();
		var st4f2c5 = '';
		var st4f2c6 = $('#st4f2c6').val();
		var st4f2c7 = $('#st4f2c7').val();
		if($('#st4f2c5').is(":checked")){
				st4f2c5= '1';
			}else{
				st4f2c5= '0';
			}
		 $.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/savestandar42');?>",
          data: {idsubmission:<?php echo $idsubmission;?>,field1: st4f2c1,field2: st4f2c2,field3: st4f2c3,field4: st4f2c4,field5: st4f2c5,field6: st4f2c6,field7: st4f2c7 }
        })
          .done(function( msg ) {
           reloadtabel42();
            $('#st4f2btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');
           
        })
          .error(function( err ){
              console.log( err );
        });
    });

    function reloadtabel42(){
    		 $.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/getdatastandar42');?>",
	          data: {idsubmission:<?php echo $idsubmission;?>}
	        })
	          .done(function( msg ) {
	          	$('#datatabeldosentetapdiluarps').html('');
	          	var nmr = 1;
	          	for (var i = msg.length - 1; i >= 0; i--) {
	          		var z = '';
	          		if(msg[i].sertifikasi_dosen==1){
	          			z = 'checked';
	          		}else{
	          			z= '';
	          		}
	          		$('#datatabeldosentetapdiluarps').append('<tr> <td>'+nmr+'</td> <td>'+msg[i].nama_dosen+'</td> <td>'+msg[i].nidn+'</td> <td>'+msg[i].tgl_ahir+'</td> <td>'+msg[i].jabatan_akademik+'</td> <td><input type="checkbox" '+z+' disabled></td> <td>'+msg[i].pendidikan+'</td> <td><a href="<?php echo base_url();?>submissionfile/download/'+msg[i].id_attachmentfile+'">Download File</a></td> <td><button onClick="hapusstadar42x('+msg[i].id_data_dosen_tetap+','+msg[i].id_attachmentfile+')" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></td> </tr>');
	          	nmr++;
	          	};
	           		
	        })
	          .error(function( err ){
	              console.log( err );
	        });
    }

    function hapusstadar42x(id,filea){
    	$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/hapusdatastandar42');?>",
	          data: {idrecord:id,idfile:filea}
	        })
	          .done(function( msg ) {
	          	reloadtabel42();
	        })
	          .error(function( err ){
	              console.log( err );
	        });
    }
</script>

