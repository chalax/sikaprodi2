
<h3>Data Aktivitas Mengajar Dosen Tidak Tetap Pada Satu Tahun Terakhir Di PS Ini</h3>
<input type="text" class="form-control" id="sinput48" placeholder="search">
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
	
		</tr>
	</thead>
	<tbody id="datatabel48">
		
	</tbody>
	<tbody id="totaltable48"></tbody>
</table>

<script type="text/javascript">

	$(document).ready(function(){
		loaddatastandar48();
		$("#sinput48").keyup(function () {
		    //split the current value of searchInput
		    var data = this.value.split(" ");
		    //create a jquery object of the rows
		    var jo = $("#datatabel48").find("tr");
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
		          		$('#datatabel48').append('<tr> <td>'+nmr+'</td> <td>'+msg[i].nama_dosen+'</td> <td>'+msg[i].bidang_keahlian+'</td> <td>'+msg[i].kode_matakuliah+'</td> <td>'+msg[i].nama_matakuliah+'</td> <td>'+msg[i].jumlah_kelas+'</td> <td>'+msg[i].jumlah_pertemuan_direncanakan+'</td> <td>'+msg[i].jumlah_pertemuan_terlaksana+'</td> <td><a href="<?php echo base_url();?>submissionfile/download/'+msg[i].id_attachmentfile+'">Download File</a></td></tr>');
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