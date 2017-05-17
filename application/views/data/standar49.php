<h3>Kegiatan Tenaga Ahli/Pakar sebagai pembicara dalam seminar/pelatihan, Pembicara Tamu Dsb, Dari Luar PT Sendiri (Tidak Termasuk Dosen Tidak Tetap)</h3>
<input type="text" class="form-control" id="sinput49" placeholder="search">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Tenaga Ahli/Pakar</th>
			<th>Nama dan Judul Kegiatan</th>
			<th>Waktu Pelaksanaan</th>
			<th>Upload</th>
		
		</tr>
	</thead>
	<tbody id="datatable49">
		
	</tbody>

	
</table>


<script type="text/javascript">

	$(document).ready(function(){
		loaddatastandar49();
		$("#sinput49").keyup(function () {
		    //split the current value of searchInput
		    var data = this.value.split(" ");
		    //create a jquery object of the rows
		    var jo = $("#datatable49").find("tr");
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
		          		$('#datatable49').append('<tr> <td>'+nmr+'</td> <td>'+msg[i].nama_tenaga_ahli+'</td> <td>'+msg[i].nama_kegiatan+'</td> <td>'+msg[i].waktu_pelaksanaan+'</td> <td><a href="<?php echo base_url();?>submissionfile/download/'+msg[i].id_attachmentfile+'">Download File</a></td></tr>');
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