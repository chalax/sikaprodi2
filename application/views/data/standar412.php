<h3>Pencapaian reputasi/prestasi dosen (misalnya prestasi dalam bidang pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat)</h3>
<input type="text" class="form-control" id="sinput412" placeholder="search">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Dosen</th>
			<th>Presasi yang Dicapai</th>
			<th>Waktu Pencapaian</th>
			<th>Tingkat (Lokal, Nasional, Internasional)</th>
			<th>Upload Data</th>
			
		</tr>
	</thead>
	<tbody id="table412">
		
	</tbody>

</table>









<script type="text/javascript">



	$(document).ready(function(){
		loadtable412();
    $("#sinput412").keyup(function () {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#table412").find("tr");
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

