<h3>Contoh soal ujian dalam satu tahun terakhir untuk 5 mata kuliah keahlian berikut silabusnya</h3>
<input type="text" class="form-control" id="sinput53" placeholder="search">

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode dan Nama Mata Kuliah</th>
			<th>Posisi Contoh Soal</th>
			
		</tr>
	</thead>
	<tbody id="tabledata53"></tbody>
	

</table>
<script type="text/javascript">
	$(document).ready(function(){
		loadtabel53();
		$("#sinput53").keyup(function () {
	        //split the current value of searchInput
	        var data = this.value.split(" ");
	        //create a jquery object of the rows
	        var jo = $("#tabledata53").find("tr");
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
		}).error(function(err){

		});

	});



</script>