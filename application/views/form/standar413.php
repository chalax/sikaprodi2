<h3>Keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Dosen</th>
			<th>Nama Organisasi Keilmuan atau Organisasi Profesi</th>
			<th>Kurun Waktu</th>
			<th>Tingkat (Lokal, Nasional, Internasional)</th>
			<th>Upload Data</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="table413">
		
	</tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="text" id="st4f13c11" class="form-control"></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><button id="btnsimpan413" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></td>
		</tr>
	</tbody>
</table>





<div id="modal413" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="namadosenmodal413"></h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							
							<th>Nama Organisasi Keilmuan atau Organisasi Profesi</th>
							<th>Kurun Waktu</th>
							<th>Tingkat (Lokal, Nasional, Internasional)</th>
							<th>Upload Data</th>
							<th>Aksi</th>
						</tr>
						
					</thead>
					<tbody id="datatabel413modal">
						
					</tbody>
					<tbody>
						<tr>
						
							<td> <input type="text" id="st4f413c1modal" class="form-control"></td>
							<td> <input type="text" id="st4f413c2modal" class="form-control"></td>
							
							<td> <input type="text" id="st4f413c4modal" class="form-control"></td>
							
							<input type="hidden" id="st4f413c5modal">
							<input type="hidden" id="st4f413c6modal">
				            <td>
				            	
				            	<span class="btn btn-success fileinput-button">
							        <i id="st4f13btnupload" class="glyphicon glyphicon-open"></i>
							        
							        <!-- The file input field used as target for the file upload widget -->
							        <input id="st4f13upload" type="file" name="files[]" accept="application/pdf">
							    </span>

				            </td>
						
							<td> <button id="simpandetail413" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> </button></td>
						</tr>
					</tbody>
				</table>

			</div>
			<div class="modal-footer">
					 <button type="button" class="btn btn-primary" id="detail413btnsimpan">Selesai</button>
			</div>
		</div>
	</div>
</div>







<script type="text/javascript">



	$(document).ready(function(){
		loadtable413();
	});

$(function () {
'use strict';
// Change this to the location of your server-side upload handler:
var url = window.location.hostname === 'blueimp.github.io' ?
            '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
$('#st4f13upload').fileupload({
    url: url,
    dataType: 'json',
    limitMultiFileUploads: 1,
    singleFileUploads: false,
    acceptFileTypes: /(pdf)|(rtf)$/i,  
    done: function (e, data) {
        $.each(data.result.files, function (index, file) {
                    $.ajax({
                          method: "POST",
                          url: "<?php echo base_url('ajaxcontrol/saveattachmentfile');?>",
                          data: {fpath: '<?php echo base_url();?>jqfu/server/php/files/'+file.name }
                        })
                          .done(function( msg ) {
                               $('#st4f413c5modal').val(msg);
                               $('#st4f13btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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


	$('#btnsimpan413').click(function(){
		var st4f13c11 = $('#st4f13c11').val();
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/simpaninduk413');?>",
          data: {idsubmission: <?php echo $idsubmission;?>, namadosen: st4f13c11 }
        })
          .done(function( msg ) {
              $('#st4f413c6modal').val(msg);
             
              $('#namadosenmodal413').text(st4f13c11);
              $('#modal413').modal('show');

              
        }).error(function(err){
        	  console.log(err);
        });
	});

	$('#simpandetail413').click(function(){


		var st4f413c1modal = $('#st4f413c1modal').val();
		var st4f413c2modal = $('#st4f413c2modal').val();
		var st4f413c4modal = $('#st4f413c4modal').val();
		var st4f413c5modal = $('#st4f413c5modal').val();
		var st4f413c6modal = $('#st4f413c6modal').val();

		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/simpandetail413');?>",
          data: {field1: st4f413c1modal,field2: st4f413c2modal,field3: st4f413c4modal,field4: st4f413c5modal,field5: st4f413c6modal}
        })
          .done(function( msg ) {
             loadtabeldetail413(st4f413c6modal);
      	 $('#st4f13btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');

              
        }).error(function(err){
        	  console.log(err);
        });
	});

	function loadtabeldetail413(idparent){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/getdetail413');?>",
          data: {idp: idparent}
        })
          .done(function( msg ) {
			$('#datatabel413modal').html(msg);
			$('#st4f413c1modal').val('');
			$('#st4f413c2modal').val('');
			$('#st4f413c4modal').val('');
			$('#st4f413c5modal').val('');
			$('#st4f13btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');

        }).error(function(err){
        	  console.log(err);
        });
	}

	function hapusdetail413(idrecord,idparent){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/hapusdetail413');?>",
          data: {idr: idrecord}
        })
          .done(function( msg ) {
          loadtabeldetail413(idparent);
              
        }).error(function(err){
        	  console.log(err);
        });
	}


	$('#detail413btnsimpan').click(function(){
		loadtable413();
		$('#st4f13c11').val('');
		$('#modal413').modal('hide');
		$('#datatabel413modal').html("");

	});

	function loadtable413(){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/loadtable413');?>",
          data: {idsubmission: <?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
           $('#table413').html(msg);
              
        }).error(function(err){
        	  console.log(err);
        });
	}
	function hapusdata413(idrecord){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/hapusdata413');?>",
          data: {idr: idrecord}
        })
          .done(function( msg ) {
        	loadtable413();
              
        }).error(function(err){
        	  console.log(err);
        });
	}
</script>