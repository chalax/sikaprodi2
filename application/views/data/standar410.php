<h3>Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS</h3>
<input type="text" class="form-control" id="sinput410" placeholder="search">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Dosen</th>
			<th>Jenjang Pendidikan Lanjut</th>
			<th>Bidang Studi</th>
			<th>Perguruan Tinggi</th>
			<th>Negara</th>
			<th>Tahun Mulai Studi</th>
			<th>Upload</th>
			

		</tr>
	</thead>
	<tbody id="datatable410">
		
	</tbody>

	
</table>
<script type="text/javascript">

	$(document).ready(function(){
		loaddatastandar410();
		$("#sinput410").keyup(function () {
		    //split the current value of searchInput
		    var data = this.value.split(" ");
		    //create a jquery object of the rows
		    var jo = $("#datatable410").find("tr");
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
            $('#st4f10upload').fileupload({
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
                                           $('#st4f10c7').val(msg);
                                           $('#st4f10btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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

	$('#btnsavestandar410').click(function(){
		var st4f10c1 = $('#st4f10c1').val();
		var st4f10c2 = $('#st4f10c2').val();
		var st4f10c3 = $('#st4f10c3').val();
		var st4f10c4 = $('#st4f10c4').val();
		var st4f10c5 = $('#st4f10c5').val();
		var st4f10c6 = $('#st4f10c6').val();
		var st4f10c7 = $('#st4f10c7').val();
		

		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/simpandata410');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>,field1: st4f10c1, field2: st4f10c2, field3: st4f10c3, field4: st4f10c4, field5: st4f10c5, field6: st4f10c6, field7: st4f10c7}
	        })
	          .done(function( msg ) {
	            	
	            	
	          	loaddatastandar410();
	          	$('#st4f10btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');
	        }).error(function(err){
	        	console.log(err);
	        });
	});

	function loaddatastandar410(){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/getdata410');?>",
	          data: {idsubmission: <?php echo $idsubmission;?>}
	        })
	          .done(function( msg ) {
	            	
	              $('#datatable410').html('');

	              	var nmr = 1;
		          	for (var i = msg.length - 1; i >= 0; i--) {
		          		$('#datatable410').append('<tr> <td>'+nmr+'</td> <td>'+msg[i].nama_dosen+'</td> <td>'+msg[i].jenjang_pendidikan_lanjut+'</td> <td>'+msg[i].bidang_studi+'</td> <td>'+msg[i].perguruan_tinggi+'</td> <td>'+msg[i].negara+'</td> <td>'+msg[i].tahun_mulai_studi+'</td>  <td><a href="<?php echo base_url();?>submissionfile/download/'+msg[i].id_attachmentfile+'">Download File</a></td></tr>');
		          	nmr++;
		          	};
	          	
	        }).error(function(err){
	        	console.log(err);
	        });

	    $('#st4f10c1').val('');
		$('#st4f10c2').val('');
		$('#st4f10c3').val('');
		$('#st4f10c4').val('');
		$('#st4f10c5').val('');
		$('#st4f10c6').val('');
		$('#st4f10c7').val('');
		
	}


	function hapusdata410(idr){
		$.ajax({
	          method: "POST",
	          url: "<?php echo base_url('ajaxcontrol/hapusdata410');?>",
	          data: {idrecord: idr}
	        })
	          .done(function( msg ) {


	             loaddatastandar410();
	          	
	        }).error(function(err){
	        	console.log(err);
	        });
	}
</script>