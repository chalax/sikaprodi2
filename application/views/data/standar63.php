<h3>Dana untuk kegiatan penelitian pada tiga tahun terakhir yang melibatkan dosen yang bidang keahlianya sesuai dengan program studi</h3>
<input type="text" class="form-control" id="sinput63" placeholder="search">
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama</th>
			<th rowspan="2">Judul Pelayanan/Pengabdian Kepada Masyarakat</th>
			<th rowspan="2">Tahun</th>
			<th colspan="2">Dana</th>
			<th rowspan="2">Upload Data</th>
		
		</tr>
		<tr>
			<th>Sumber</th>
			<th>Jumlah</th>
		</tr>

	</thead>
	<tbody id="tabledata63"></tbody>
	
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
  $("#sinput63").keyup(function () {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#tabledata63").find("tr");
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