<h3>Judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selam tiga tahun terakhir oleh dosen tetap yang bidang keahlianya sesuai dengan PS</h3>
<input type="text" class="form-control" id="sinput72" placeholder="search">

<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Judul</th>
			<th rowspan="2">Nama-Nama Dosen</th>
			<th rowspan="2">Dihasilkan/Dipublikasikan Pada</th>
			<th rowspan="2">Tahun Penyajian / Publikasi</th>
			<th colspan="3">Tingkat*</th>
			<th rowspan="2">Upload</th>
			
		</tr>
		<tr>
			<th>Lokasl</th>
			<th>Nasional</th>
			<th>Internasional</th>
		</tr>
	</thead>
	<tbody id="tabeldata721">
	</tbody>
	

</table>

<script type="text/javascript">
	//------721------------
	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st7f21upload').fileupload({
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
                                           $('#st7f21c8').val(msg);
                                           $('#st7f21btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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

$('#btnsimpan721').click(function(){
	var st7f21c1 = $('#st7f21c1').val();
	var st7f21c2 = $('#st7f21c2').val();
	var st7f21c3 = $('#st7f21c3').val();
	var st7f21c4 = $('#st7f21c4').val();
	var st7f21c5 = '0';
	var st7f21c6 = '0';
	var st7f21c7 = '0';
	var st7f21c8 = $('#st7f21c8').val();

		if($('#st7f21c5').is(':checked')){
			st7f21c5 = '1';
		}else{
			st7f21c5 = '0';
		}
		if($('#st7f21c6').is(':checked')){
			st7f21c6 = '1';
		}else{
			st7f21c6 = '0';
		}
		if($('#st7f21c7').is(':checked')){
			st7f21c7 = '1';
		}else{
			st7f21c7 = '0';
		}

		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/simpandata721');?>",
          data: {idsubmission:<?php echo $idsubmission;?>, field1: st7f21c1, field2: st7f21c2, field3: st7f21c3, field4: st7f21c4, field5: st7f21c5, field6: st7f21c6, field7: st7f21c7, field8: st7f21c8 }
        })
          .done(function( msg ) {
           reloadtabel721();
           $('#st7f21c1').val('');
			$('#st7f21c2').val('');
			$('#st7f21c3').val('');
			$('#st7f21c4').val('');
			$('#st7f21c8').val('');
			$('#st7f21c5').attr('checked',false);
			$('#st7f21c6').attr('checked',false);
			$('#st7f21c7').attr('checked',false);
           $('#st7f21btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');

        })
          .error(function( err ){
              console.log( err );
        });
});
function reloadtabel721(){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/getdata721');?>",
          data: {idsubmission:<?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
           $('#tabeldata721').html(msg);
        })
          .error(function( err ){
              console.log( err );
        });
}
function hapusdata721(idrec,idfile){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/hapusdata721');?>",
          data: {idrecord: idrec, idattachmentfile: idfile}
        })
          .done(function( msg ) {
           reloadtabel721();
        })
          .error(function( err ){
              console.log( err );
        });
}
$(document).ready(function(){
	reloadtabel721();
  $("#sinput72").keyup(function () {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#tabeldata721").find("tr");
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
</script>


<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul Buku</th>
			<th>Nama Penulis</th>
			<th>Nomor ISBN</th>
			<th>Upload</th>
			

		</tr>
	</thead>
	<tbody id="tabledata722"></tbody>
	

</table>

<script type="text/javascript">
	//------721------------
	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st7f22upload').fileupload({
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
                                           $('#st7f22c4').val(msg);
                                           $('#st7f22btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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

$('#btnsimpan722').click(function(){
	var st7f22c1 = $('#st7f22c1').val();
	var st7f22c2 = $('#st7f22c2').val();
	var st7f22c3 = $('#st7f22c3').val();
	var st7f22c4 = $('#st7f22c4').val();
	

		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/simpandata722');?>",
          data: {idsubmission:<?php echo $idsubmission;?>, field1: st7f22c1, field2: st7f22c2, field3: st7f22c3, field4: st7f22c4}
        })
          .done(function( msg ) {
           reloadtabel722();
           $('#st7f22c1').val('');
			$('#st7f22c2').val('');
			$('#st7f22c3').val('');
			$('#st7f22c4').val('');
			
           $('#st7f22btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');

        })
          .error(function( err ){
              console.log( err );
        });
});
function reloadtabel722(){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/getdata722');?>",
          data: {idsubmission:<?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
           $('#tabledata722').html(msg);
        })
          .error(function( err ){
              console.log( err );
        });
}
function hapusdata722(idrec,idfile){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/hapusdata722');?>",
          data: {idrecord: idrec, idattachmentfile: idfile}
        })
          .done(function( msg ) {
           reloadtabel722();
        })
          .error(function( err ){
              console.log( err );
        });
}
$(document).ready(function(){
	reloadtabel722();
});
</script>