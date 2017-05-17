
<h3>Dosen Tidak Tetap</h3>

<input type="text" class="form-control" id="sinput47" placeholder="search">
<div class="">
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
					
					</tr>
				</thead>
				<tbody id="datatabeldosentidaktetap">
					

				</tbody>
				<tbody>
				
			</table>




		</div>
	</div>
</div>

<script type="text/javascript">
	
$(document).ready(function(){
	reloadtabel47();
	$("#sinput47").keyup(function () {
		    //split the current value of searchInput
		    var data = this.value.split(" ");
		    //create a jquery object of the rows
		    var jo = $("#datatabeldosentidaktetap").find("tr");
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
	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st4f7upload').fileupload({
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
                                           $('#st4f7c7').val(msg);
                                           $('#st4f7btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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


	$('#btnst4f7simpan').click(function(){
		
		var st4f1c1 = $('#st4f7c1').val();
		var st4f1c2 = $('#st4f7c2').val();
		var st4f1c3 = $('#st4f7c3').val();
		var st4f1c4 = $('#st4f7c4').val();
		var st4f1c5 = '';
		var st4f1c6 = $('#st4f7c6').val();
		var st4f1c7 = $('#st4f7c7').val();
		if($('#st4f7c5').is(":checked")){
				st4f1c5= '1';
			}else{
				st4f1c5= '0';
			}
		 $.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/savestandar47');?>",
          data: {idsubmission:<?php echo $idsubmission;?>,field1: st4f1c1,field2: st4f1c2,field3: st4f1c3,field4: st4f1c4,field5: st4f1c5,field6: st4f1c6,field7: st4f1c7 }
        })
          .done(function( msg ) {
           reloadtabel47();
        })
          .error(function( err ){
              console.log( err );
        });
    });

    function reloadtabel47(){
    		 $.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/getdatastandar47');?>",
	          data: {idsubmission:<?php echo $idsubmission;?>}
	        })
	          .done(function( msg ) {
	          	$('#datatabeldosentidaktetap').html('');
	          	var nmr = 1;
	          	for (var i = msg.length - 1; i >= 0; i--) {
	          		var z = '';
	          		if(msg[i].sertifikasi_dosen==1){
	          			z = ' &#10004 ';
	          		}else{
	          			z= '';
	          		}
	          		$('#datatabeldosentidaktetap').append('<tr> <td>'+nmr+'</td> <td>'+msg[i].nama_dosen+'</td> <td>'+msg[i].nidn+'</td> <td>'+msg[i].tgl_ahir+'</td> <td>'+msg[i].jabatan_akademik+'</td> <td>'+z+'</td> <td>'+msg[i].pendidikan+'</td> <td><a href="<?php echo base_url();?>submissionfile/download/'+msg[i].id_attachmentfile+'">Download File</a></td>  </tr>');
	          	nmr++;
	          	};
	           		
	        })
	          .error(function( err ){
	              console.log( err );
	        });
    }

    function hapusstadar47x(id,filea){
    	$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/hapusdatastandar47');?>",
	          data: {idrecord:id,idfile:filea}
	        })
	          .done(function( msg ) {
	          	reloadtabel47();
	        })
	          .error(function( err ){
	              console.log( err );
	        });
    }
</script>

