<h3>Hasil Peninjauan, Khusus untuk silabus/SAP mata kuliah</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">No. MK</th>
			<th rowspan="2">Nama MK</th>
			<th rowspan="2">MK Baru/Lama/Hapus</th>
			<th colspan="2">Perubahan Pada</th>
			<th rowspan="2">Alasan Peninjauan</th>
			<th rowspan="2">Atas Usulan/Masukan dari</th>
			<th rowspan="2">Berlaku Mulai Sem./Th.</th>
			<th rowspan="2">Data Upload</th>
		
			
		</tr>
		<tr>
			<th>Silabus/SAP</th>
			<th>Buku Ajar</th>
		</tr>
	</thead>
	<tbody id="tabeldata54"></tbody>
	
</table>
<script type="text/javascript">
	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st5f4upload').fileupload({
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
                                           $('#st5f4c9').val(msg);
                                           $('#st5f4btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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

$('#btnsimpan54').click(function(){
	var st5f4c1 = $('#st5f4c1').val();
	var st5f4c2 = $('#st5f4c2').val();
	var st5f4c3 = $('#st5f4c3').val();

	var st5f4c4 = '';
	var st5f4c5 = '';

	var st5f4c6 = $('#st5f4c6').val();
	var st5f4c7 = $('#st5f4c7').val();
	var st5f4c8 = $('#st5f4c8').val();
	var st5f4c9 = $('#st5f4c9').val();

	if($('#st5f4c4').is(':checked')){
		st5f4c4 = '1';
	}else{
		st5f4c4 = '0';
	}
	if($('#st5f4c5').is(':checked')){
		st5f4c5 = '1';
	}else{
		st5f4c5 = '0';
	}


	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol1/simpandata54');?>",
      data: {idsubmission: <?php echo $idsubmission;?>, field1: st5f4c1,field2: st5f4c2,field3: st5f4c3,field4: st5f4c4,field5: st5f4c5,field6: st5f4c6,field7: st5f4c7,field8: st5f4c8,field9: st5f4c9 }
    })
      .done(function( msg ) {
          loadtable54();
    }).error(function(err){
    	console.log(err);
    });

});

function loadtable54(){
    $.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol1/getdata54');?>",
      data: {idsubmission: <?php echo $idsubmission;?>}
    })
      .done(function( msg ) {
        $('#tabeldata54').html(msg);

        $('#st5f4c1').val('');
		$('#st5f4c2').val('');
		$('#st5f4c3').val('');
		$('#st5f4c6').val('');
		$('#st5f4c7').val('');
		$('#st5f4c8').val('');
		$('#st5f4c9').val('');
		$('#st5f4c4').attr('checked',false);
		$('#st5f4c5').attr('checked',false);
		  $('#st5f4btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');


    }).error(function(err){
    	console.log(err);
    });
}

function hapusdata54(idrec){
	 $.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol1/hapusdata54');?>",
      data: {idrecord: idrec}
    })
      .done(function( msg ) {
        loadtable54();
    }).error(function(err){
    	console.log(err);
    });
}

$(document).ready(function(){
	loadtable54();
});
</script>