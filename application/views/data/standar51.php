<h3>Struktur Kurikulum</h3>
<input type="text" class="form-control" id="sinput51" placeholder="search">

<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">Semester</th>
			<th rowspan="2">Kode Mata Kuliah</th>
			<th rowspan="2">Nama Mata Kuliah</th>
			<th colspan="2">Bobot SKS Untuk</th>
			<th colspan="2">Beri tanda &#10004 Pada Kolom yang Sesuai</th>
			<th rowspan="2">Bobot Tugas</th>
			<th colspan="3">Kelengkapan</th>
			<th rowspan="2">Unit/jur/fak Penyelenggara</th>
			<th rowspan="2">Bukti Pendukung</th>
			
		</tr>
		<tr>
			<th>Kuliah</th>
			<th>Praktikum</th>
			<th>Inti<span style="color:transparent">............</span></th>
			<th>Intstitusional</th>
			<th>Deskripsi</th>
			<th>Silabus</th>
			<th>SAP</th>
		</tr>
	</thead>
	<tbody id="datatable51"></tbody>
	
	
	<tbody>
		<tr>
			<th colspan="3">Total SKS</th>
			<td><span id="totalsks51kuliah"></span></td>
			<td><span id="totalsks51praktikum"></span></td>
			<td></td>
			<td></td>
			<td class="bg-info" colspan="7"></td>
		</tr>
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		loadtabel51();
		hitungtotalsks51();
		$("#sinput51").keyup(function () {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#datatable51").find("tr");
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
            $('#st5f1upload').fileupload({
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
                                           $('#st5f1c13').val(msg);
                                           $('#st5f1btnupload').removeClass('glyphicon-open').addClass('glyphicon-refresh');
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



	$('#st5f1btnsimpan').click(function(){
		var st5f1c1 = $('#st5f1c1').val();
		var st5f1c2 = $('#st5f1c2').val();
		var st5f1c3 = $('#st5f1c3').val();
		var st5f1c4 = $('#st5f1c4').val();
		var st5f1c5 = $('#st5f1c5').val();

		var st5f1c6 = '';
		var st5f1c7 = '';

		var st5f1c8 = $('#st5f1c8').val();
		var st5f1c9 = $('#st5f1c9').val();
		var st5f1c10 = $('#st5f1c10').val();
		var st5f1c11 = $('#st5f1c11').val();
		var st5f1c12 = $('#st5f1c12').val();
		var st5f1c13 = $('#st5f1c13').val();

		if($('#st5f1c6').is(':checked')){
			st5f1c6 ='1';
		}else{
			st5f1c6='0';
		}
		if($('#st5f1c7').is(':checked')){
			st5f1c7 ='1';
		}else{
			st5f1c7='0';
		}		

		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ajaxcontrol1/simpandata51');?>",
			data: {idsubmission: <?php echo $idsubmission;?>,field1: st5f1c1, field2: st5f1c2, field3: st5f1c3, field4: st5f1c4, field5: st5f1c5, field6: st5f1c6, field7: st5f1c7, field8: st5f1c8, field9: st5f1c9, field10: st5f1c10, field11: st5f1c11, field12: st5f1c12, field13: st5f1c13}
		}).done(function(data){
			loadtabel51();
			netralizeform();
		}).error(function(err){

		});

	});
	
	function netralizeform(){
		$('#st5f1c1').val('1');
		$('#st5f1c2').val('');
		$('#st5f1c3').val('');
		$('#st5f1c4').val('');
		$('#st5f1c5').val('');

		$('#st5f1c6').attr('checked',false);
		$('#st5f1c7').attr('checked',false);



		$('#st5f1c8').val('');
		$('#st5f1c9').val('');
		$('#st5f1c10').val('');
		$('#st5f1c11').val('');
		$('#st5f1c12').val('');
		$('#st5f1c13').val('');
	}

	function loadtabel51(){
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ajaxcontrol1/getdata51');?>",
			data: {idsubmission: <?php echo $idsubmission;?>}
		}).done(function(data){
			$('#datatable51').html(data);
		}).error(function(err){
			console.log(err);
		});
	}

	function hapusdata51(idrec){
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ajaxcontrol1/hapusdata51');?>",
			data: {idrecord: idrec}
		}).done(function(data){
			loadtabel51();
		}).error(function(err){
			
		});
	}

	function hitungtotalsks51(){
		$.ajax({
				method: "POST",
				url: "<?php echo base_url('ajaxcontrol1/hitungtotalsks51');?>",
				data: {idsubmission: <?php echo $idsubmission;?>}
			}).done(function(data){
				var dt = data.split("|");
				console.log(dt);
				$('#totalsks51kuliah').text(dt[0]);
				$('#totalsks51praktikum').text(dt[1]);
			}).error(function(err){
				console.log(err);
			});
	}
</script>

