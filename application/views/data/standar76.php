<h3>Tuliskan Instansi Luar Negeri Yang Menjalin Kerjasama* yang Terkait Dengan Program Studi/Jurusan Dalam 3 Tahun Terakhir</h3>
<input type="text" class="form-control" id="sinput76" placeholder="search">

<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Instansi</th>
			<th rowspan="2">Jenis Kegiatan</th>
			<th colspan="2">Kurun Waktu Kerjasama</th>
			<th rowspan="2">Manfaat yang Diperoleh</th>
			
		</tr>
		<tr>
			<th>Mulai</th>
			<th>Berakhir</th>
		</tr>
	</thead>
	<tbody id="tabledata76"></tbody>
	
</table>
<script type="text/javascript">
	$(document).ready(function(){
		loadtabel76();
		$("#sinput76").keyup(function () {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#tabledata76").find("tr");
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
	function loadtabel76(){
		$.ajax({
			method: 'POST',
			url:"<?php echo base_url('ajaxcontrol1/getdata76');?>",
			data:{idsubmission:<?php echo $idsubmission;?>}

		}).done(function(data){
			
			$('#tabledata76').html(data);
		}).error(function(err){
			console.log(err);
		});
	}
	$('#btnsimpan76').click(function(){
		var st7f6c1 = $('#st7f6c1').val();
		var st7f6c2 = $('#st7f6c2').val();
		var st7f6c3 = $('#st7f6c3').val();
		var st7f6c4 = $('#st7f6c4').val();
		var st7f6c5 = $('#st7f6c5').val();

		$.ajax({
			method: 'POST',
			url:"<?php echo base_url('ajaxcontrol1/simpandata76');?>",
			data:{idsubmission:<?php echo $idsubmission;?>, field1: st7f6c1, field2: st7f6c2, field3: st7f6c3, field4: st7f6c4, field5: st7f6c5  }

		}).done(function(data){
			$('#st7f6c1').val('');
			$('#st7f6c2').val('');
			$('#st7f6c3').val('');
			$('#st7f6c4').val('');
			$('#st7f6c5').val('');
			loadtabel76();
		}).error(function(err){
			console.log(err);
		});
	});
	function hapusdata76(idrec){
		$.ajax({
			method: 'POST',
			url:"<?php echo base_url('ajaxcontrol1/hapusdata76');?>",
			data:{idrecord:idrec}

		}).done(function(data){
			
			loadtabel76();
		}).error(function(err){
			console.log(err);
		});
	}

	// create table kerjasama_luar_negeri(
 //    id_kerjasama_luar_negeri int not null auto_increment primary key,
 //    id_submission int,
 //    nama_instansi varchar(30),
 //    jenis_kegiatan varchar(30),
 //    tgl_mulai date,
 //    tgl_berakhir date,
 //    manfaat_diperoleh text
 //    )
</script>