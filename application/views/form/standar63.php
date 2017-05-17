<h3>Dana untuk kegiatan penelitian pada tiga tahun terakhir yang melibatkan dosen yang bidang keahlianya sesuai dengan program studi</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama</th>
			<th rowspan="2">Judul Pelayanan/Pengabdian Kepada Masyarakat</th>
			<th rowspan="2">Tahun</th>
			<th colspan="2">Dana</th>
			<th rowspan="2">Upload Data</th>
			<th rowspan="2">Aksi</th>
		</tr>
		<tr>
			<th>Sumber</th>
			<th>Jumlah</th>
		</tr>

	</thead>
	<tbody id="tabledata63"></tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="text" class="form-control" id="st6f3c1"></td>
			<td><input type="text" class="form-control" id="st6f3c2"></td>
			<td><input type="text" class="form-control" id="st6f3c3"></td>
			<td><input type="text" class="form-control" id="st6f3c4"></td>
			<td><input type="number" value="0" min="0" class="form-control" id="st6f3c5"></td>
			<td>
					<input type="hidden" id="st6f3c6">
				<span class="btn btn-success fileinput-button">
			        <i id="st6f3btnupload" class="glyphicon glyphicon-open"></i>
			        
			        <!-- The file input field used as target for the file upload widget -->
			        <input id="st6f3upload" type="file" name="files[]" accept="application/pdf">
			    </span>
			</td>
			<td><button id="btnsimpan63" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr>
	</tbody>
</table>
<script type="text/javascript">
	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st6f3upload').fileupload({
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
                                           $('#st6f3c6').val(msg);
                                           $('#st6f3btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
                                           resetprogress();
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

$('#btnsimpan63').click(function(){
	var st6f3c1 = $('#st6f3c1').val();
	var st6f3c2 = $('#st6f3c2').val();
	var st6f3c3 = $('#st6f3c3').val();
	var st6f3c4 = $('#st6f3c4').val();
	var st6f3c5 = $('#st6f3c5').val();
	var st6f3c6 = $('#st6f3c6').val();

	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol1/simpandata63');?>",
      data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f3c1, field2: st6f3c2, field3: st6f3c3, field4: st6f3c4, field5: st6f3c5, field6: st6f3c6}
    })
      .done(function( msg ) {
           $('#st6f3c1').val('');
			$('#st6f3c2').val('');
			$('#st6f3c3').val('');
			$('#st6f3c4').val('');
			$('#st6f3c5').val(0);
			$('#st6f3c6').val('');
           $('#st6f3btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');
           loaddata63();
    }).error(function(err){
    	console.log(err);
    });

});

function loaddata63(){
	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol1/getdata63');?>",
      data: {idsubmission: <?php echo $idsubmission;?>}
    })
      .done(function( msg ) {
        $('#tabledata63').html(msg);
    }).error(function(err){
    	console.log(err);
    });
}

function hapusdata63(idrec){
	$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/hapusdata63');?>",
          data: {idrecord:idrec}
        })
          .done(function( msg ) {
          loaddata63();
            
        }).error(function(err){
        	console.log(err);
        });
}

$(document).ready(function(){
	loaddata63();
});


</script>