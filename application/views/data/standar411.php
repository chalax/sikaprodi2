<h3>Kegiatan dosen tetap yang bidang keahlianya sesuai PS dalam seminar ilmiah/lokakarya/penataran/workshop/pagelaran/pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri</h3>
<input type="text" class="form-control" id="sinput411" placeholder="search">
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Dosen</th>
			<th rowspan="2">Jenis Kegiatan</th>
			<th rowspan="2">Tempat</th>
			<th rowspan="2">Waktu</th>
			<th colspan="2">Sebagai</th>
			<th rowspan="2">Upload Data</th>
			
		</tr>
		<tr>
			<th>Penyaji</th>
			<th>Pesarta</th>
		</tr>
	</thead>
	<tbody id="datatable411">
		
	</tbody>

	
</table>




<script type="text/javascript">
	$(document).ready(function(){
		loadtable411();
    $("#sinput411").keyup(function () {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#datatable411").find("tr");
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

$(function () {
'use strict';
// Change this to the location of your server-side upload handler:
var url = window.location.hostname === 'blueimp.github.io' ?
            '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>jqfu/server/php/';
$('#st4f11upload').fileupload({
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
                               $('#st4f411c6modal').val(msg);
                               $('#st4f11btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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


$('#btn411simpan').click(function(){
		var st4f11c11 = $('#st4f11c11').val();
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/simpaninduk411');?>",
          data: {idsubmission: <?php echo $idsubmission;?>, namadosen: st4f11c11 }
        })
          .done(function( msg ) {
              $('#st4f411c7modal').val(msg);
              $('#namadosenmodal411').text(st4f11c11);
              initiatemodal411();
        }).error(function(err){
        	  console.log(err);
        });
});

function initiatemodal411(){
	
	$('#modal411').modal('show');
}

$('#simpandetail411').click(function(){
	var st4f411c1modal = $('#st4f411c1modal').val();
	var st4f411c2modal = $('#st4f411c2modal').val();
	var st4f411c3modal = $('#st4f411c3modal').val();
	var st4f411c4modal ='';
	var st4f411c5modal ='';
	var st4f411c6modal = $('#st4f411c6modal').val();
	var st4f411c7modal = $('#st4f411c7modal').val();
	if($('#st4f411c4modal').is(':checked')){
		st4f411c4modal = '1';
	}else{
		st4f411c4modal = '0';
	}
	if($('#st4f411c5modal').is(':checked')){
		st4f411c5modal = '1';
	}else{
		st4f411c5modal = '0';
	}

	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol/simpandetail411');?>",
      data: {field1:st4f411c1modal ,field2:st4f411c2modal ,field3:st4f411c3modal ,field4:st4f411c4modal ,field5:st4f411c5modal ,field6:st4f411c6modal ,field7:st4f411c7modal}
    })
      .done(function( msg ) {
      	 $('#st4f11btnupload').removeClass('glyphicon-refresh').addClass('glyphicon-open');
         loadtabledetail411(st4f411c7modal);
    }).error(function(err){
    	  console.log(err);
	});	

});

function loadtabledetail411(idparent){
	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol/getdetail411');?>",
      data: {idprnt:idparent}
    })
      .done(function( msg ) {
        $('#datatabel411modal').html(msg);

        $('#st4f411c1modal').val('');
		$('#st4f411c2modal').val('');
		$('#st4f411c3modal').val('');
		$('#st4f411c4modal').attr('checked',false);
		$('#st4f411c5modal').attr('checked',false);
		$('#st4f411c6modal').val('');
		
    }).error(function(err){
    	  console.log(err);
	});

}
function loadtable411(){
	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol/getdata411');?>",
      data: {idsubmission:<?php echo $idsubmission;?>}
    })
      .done(function( msg ) {
       $('#datatable411').html(msg);       
		
    }).error(function(err){
    	  console.log(err);
	});
}

function hapusdetail411(idrecord,idparent){
	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol/hapusdetail411');?>",
      data: {idr:idrecord}
    })
      .done(function( msg ) {
       
       loadtabledetail411(idparent);
		
    }).error(function(err){
    	  console.log(err);
	});
}

$('#detail411btnsimpan').click(function(){
	$('#st4f11c11').val('');
	loadtable411();
	$('#modal411').modal('hide');
	$('#datatabel411modal').html('');
});

function hapusdata411(idrecord){
	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol/hapusdata411');?>",
      data: {idr:idrecord}
    })
      .done(function( msg ) {
       
       loadtable411();
		
    }).error(function(err){
    	  console.log(err);
	});
}
</script>