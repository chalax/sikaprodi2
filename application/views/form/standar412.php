<h3>Pencapaian reputasi/prestasi dosen (misalnya prestasi dalam bidang pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat)</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Dosen</th>
			<th>Presasi yang Dicapai</th>
			<th>Waktu Pencapaian</th>
			<th>Tingkat (Lokal, Nasional, Internasional)</th>
			<th>Upload Data</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody id="table412">
		
	</tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="text" id="st4f12c11" class="form-control"></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><button id="btnsimpan412" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></td>
		</tr>
	</tbody>
</table>





<div id="modal412" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="namadosenmodal412"></h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th rowspan="2">Perestasi yang Dicapai	</th>
							<th rowspan="2">Waktu Pencapaian</th>
							<th rowspan="2">Tingkat</th>
							<th rowspan="2">Upload Data</th>
							<th rowspan="2">Aksi</th>
						</tr>
						
					</thead>
					<tbody id="datatabel412modal">
						
					</tbody>
					<tbody>
						<tr>
						
							<td> <input type="text" id="st4f412c1modal" class="form-control"></td>
							<td> <input type="date" id="st4f412c2modal" class="form-control"></td>
							
							<td> <input type="text" id="st4f412c4modal" class="form-control"></td>
							
							<input type="hidden" id="st4f412c5modal">
							<input type="hidden" id="st4f412c6modal">
				            <td>
				            	
				            	<span class="btn btn-success fileinput-button">
							        <i id="st4f12btnupload" class="glyphicon glyphicon-open"></i>
							        
							        <!-- The file input field used as target for the file upload widget -->
							        <input id="st4f12upload" type="file" name="files[]" accept="application/pdf">
							    </span>

				            </td>
						
							<td> <button id="simpandetail412" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> </button></td>
						</tr>
					</tbody>
				</table>

			</div>
			<div class="modal-footer">
					 <button type="button" class="btn btn-primary" id="detail412btnsimpan">Selesai</button>
			</div>
		</div>
	</div>
</div>







<script type="text/javascript">



	$(document).ready(function(){
		loadtable412();
	});

$(function () {
'use strict';
// Change this to the location of your server-side upload handler:
var url = window.location.hostname === 'blueimp.github.io' ?
            '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
$('#st4f12upload').fileupload({
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
                               $('#st4f412c5modal').val(msg);
                               $('#st4f12btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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


	$('#btnsimpan412').click(function(){
		var st4f12c11 = $('#st4f12c11').val();
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/simpaninduk412');?>",
          data: {idsubmission: <?php echo $idsubmission;?>, namadosen: st4f12c11 }
        })
          .done(function( msg ) {
              $('#st4f412c6modal').val(msg);
             
              $('#namadosenmodal412').text(st4f12c11);
              $('#modal412').modal('show');

              
        }).error(function(err){
        	  console.log(err);
        });
	});

	$('#simpandetail412').click(function(){


		var st4f412c1modal = $('#st4f412c1modal').val();
		var st4f412c2modal = $('#st4f412c2modal').val();
		var st4f412c4modal = $('#st4f412c4modal').val();
		var st4f412c5modal = $('#st4f412c5modal').val();
		var st4f412c6modal = $('#st4f412c6modal').val();

		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/simpandetail412');?>",
          data: {field1: st4f412c1modal,field2: st4f412c2modal,field3: st4f412c4modal,field4: st4f412c5modal,field5: st4f412c6modal}
        })
          .done(function( msg ) {
             loadtabeldetail412(st4f412c6modal);

      	 $('#st4f12btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');
              
        }).error(function(err){
        	  console.log(err);
        });
	});

	function loadtabeldetail412(idparent){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/getdetail412');?>",
          data: {idp: idparent}
        })
          .done(function( msg ) {
			$('#datatabel412modal').html(msg);
			$('#st4f412c1modal').val('');
			$('#st4f412c2modal').val('');
			$('#st4f412c4modal').val('');
			$('#st4f412c5modal').val('');
			$('#st4f12btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');

        }).error(function(err){
        	  console.log(err);
        });
	}

	function hapusdetail412(idrecord,idparent){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/hapusdetail412');?>",
          data: {idr: idrecord}
        })
          .done(function( msg ) {
          loadtabeldetail412(idparent);
              
        }).error(function(err){
        	  console.log(err);
        });
	}


	$('#detail412btnsimpan').click(function(){
		loadtable412();
		$('#st4f12c11').val('');
		$('#modal412').modal('hide');
		$('#datatabel412modal').html("");

	});

	function loadtable412(){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/loadtable412');?>",
          data: {idsubmission: <?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
           $('#table412').html(msg);
              
        }).error(function(err){
        	  console.log(err);
        });
	}
	function hapusdata412(idrecord){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/hapusdata412');?>",
          data: {idr: idrecord}
        })
          .done(function( msg ) {
        	loadtable412();
              
        }).error(function(err){
        	  console.log(err);
        });
	}
</script>

