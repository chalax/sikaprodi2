<h3>Dosen yang menjadi pembimbing karya/tugas akhir, dan jumlah mahasiswa bimbinganya</h3>
<input type="text" class="form-control" id="sinput56" placeholder="search">

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Th</th>
			<th>Nama Dosen Pembimbing</th>
			<th>Jumlah Mahasiswa</th>
			<th>Upload Data</th>
			
		</tr>
	</thead>
	<tbody id="datatable56"></tbody>
	
</table>
<script type="text/javascript">
	$(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === 'blueimp.github.io' ?
                        '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
            $('#st5f6upload').fileupload({
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
                                           $('#st5f6c4').val(msg);
                                           $('#st5f6btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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

$('#btnsimpan56').click(function(){
	var st5f6c1 = $('#st5f6c1').val();
	var st5f6c2 = $('#st5f6c2').val();
	var st5f6c3 = $('#st5f6c3').val();
	var st5f6c4 = $('#st5f6c4').val();


	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol1/simpandata56');?>",
      data: {idsubmission:<?php echo $idsubmission;?>, field1: st5f6c1, field2: st5f6c2, field3: st5f6c3, field4: st5f6c4 }
    })
      .done(function( msg ) {
           $('#st5f6c1').val('');
			$('#st5f6c2').val('');
			$('#st5f6c3').val('');
			$('#st5f6c4').val('');
           $('#st5f6btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');
           loadtabel56();
    }).error(function(err){
    	console.log(err);
    });

});
$(document).ready(function(){
	loadtabel56();
  $("#sinput56").keyup(function () {
          //split the current value of searchInput
          var data = this.value.split(" ");
          //create a jquery object of the rows
          var jo = $("#datatable56").find("tr");
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
function loadtabel56(){
	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol1/getdata56');?>",
      data: {idsubmission:<?php echo $idsubmission;?>}
    })
      .done(function( msg ) {
           $('#datatable56').html(msg);
           
    }).error(function(err){
    	console.log(err);
    });
}

function hapusdata56(idrec){
	$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/hapusdata56');?>",
	      data: {idrecord: idrec}
	    })
	      .done(function( msg ) {
	           
	      		loadtabel56();
	    }).error(function(err){
	    	console.log(err);
	    });
}
</script>