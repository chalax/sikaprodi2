<h3>Keselamatan Kerja</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Peralatan / Bahan</th>
			<th>Fungsi</th>
			<th>Upload Data</th>
		
		</tr>
	</thead>
	<tbody id="datatable57"></tbody>
	
</table>

<script type="text/javascript">
	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st5f7upload').fileupload({
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
                                           $('#st5f7c3').val(msg);
                                           $('#st5f7btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
                                    }).error(function(err){
                                    	console.log(err);
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

	




$('#btnsimpan57').click(function(){
		var st5f7c1 = $('#st5f7c1').val();
		var st5f7c2 = $('#st5f7c2').val();
		var st5f7c3 = $('#st5f7c3').val();
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/simpan57');?>",
          data: {idsubmission: <?php echo $idsubmission;?>, field1 :st5f7c1, field2 :st5f7c2, field3 :st5f7c3}
        })
          .done(function( msg ) {
                $('#st5f7c1').val('');
			$('#st5f7c2').val('');
			$('#st5f7c3').val('');
			 $('#st5f7btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');
			 loadtable57();
        }).error(function(err){
        	console.log(err);
        });
});
function loadtable57(){
	$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/getdata57');?>",
          data: {idsubmission: <?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
              $('#datatable57').html(msg);
            
        }).error(function(err){
        	console.log(err);
        });


}

function hapusdata57(idrec){
	$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/hapusdata57');?>",
          data: {idrecord: idrec}
        })
          .done(function( msg ) {
            loadtable57();
        }).error(function(err){
        	console.log(err);
        });
}
$(document).ready(function(){
	loadtable57();
});
</script>
