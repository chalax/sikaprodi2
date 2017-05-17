<h3>Dosen pembimbing akademik/wali dan jumlah mahasiswa yang dibimbingnya</h3>
<input type="text" class="form-control" id="sinput55" placeholder="search">

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Dosen Pembimbing Akademik/Wali</th>
			<th>Jumlah Mahasiswa Bimbingan</th>
			<th>Rata-rata Banyaknya Pertemuan/mhs/semester</th>
			<th>Upload Data</th>
			
		</tr>

	</thead>
	<tbody id="tabledata55"></tbody>
	<tbody>
		<tr>
			<td colspan="2">Total</td>
			<td id="totalst5f5c2"></td>
			<td colspan="3"></td>
		</tr>
	</tbody>
	
</table>
<script type="text/javascript">
	
	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st5f5upload').fileupload({
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
                                           $('#st5f5c4').val(msg);
                                           $('#st5f5btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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

$('#btnsimpan55').click(function(){
	var st5f5c1 = $('#st5f5c1').val();
	var st5f5c2 = $('#st5f5c2').val();
	var st5f5c3 = $('#st5f5c3').val();
	var st5f5c4 = $('#st5f5c4').val();
	  	$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/simpandata55');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>, field1 : st5f5c1, field2 : st5f5c2, field3 : st5f5c3, field4 : st5f5c4 }
	    })
	      .done(function( msg ) {
	           
	      		loaddata55();

	      		$('#st5f5c1').val('');
				$('#st5f5c2').val('');
				$('#st5f5c3').val('');
				$('#st5f5c4').val('');

	           $('#st5f5btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');
	    }).error(function(err){
	    	console.log(err);
	    });
});

function loaddata55(){
	$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/getdata55');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>}
	    })
	      .done(function( msg ) {
	           
	      		$('#tabledata55').html(msg);
	      		calculatetotalst5f5c2();
	    }).error(function(err){
	    	console.log(err);
	    });
}

function hapusdata55(idrec){
	$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/hapusdata55');?>",
	      data: {idrecord: idrec}
	    })
	      .done(function( msg ) {
	           
	      		loaddata55();
	    }).error(function(err){
	    	console.log(err);
	    });
}

$(document).ready(function(){
	loaddata55();
	$("#sinput55").keyup(function () {
	        //split the current value of searchInput
	        var data = this.value.split(" ");
	        //create a jquery object of the rows
	        var jo = $("#tabledata55").find("tr");
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

function calculatetotalst5f5c2(){
	$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/calculatetotalst5f5c2');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>}
	    })
	      .done(function( msg ) {
	           $('#totalst5f5c2').text(msg);
	      		
	    }).error(function(err){
	    	console.log(err);
	    });
}
</script>