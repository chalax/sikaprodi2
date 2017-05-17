<h3>Dana yang diperoleh dari/untuk kegiatan pelayanan/pengabdian kepada masyarakat pada tiga tahun terakhir</h3>
<input type="text" class="form-control" id="sinput64" placeholder="search">

<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama</th>
			<th rowspan="2">Judul Pelayanan/Pengabdian Kepada Masyarakat</th>
			<th rowspan="2">Tahun</th>
			<th colspan="2">Dana</th>
			
		</tr>
		<tr>
			<th>Sumber</th>
			<th>Jumlah</th>
		</tr>

	</thead>
	<tbody id="tabledata64"></tbody>
	
</table>
<script type="text/javascript">
	
$('#btnsimpan64').click(function(){
	var st6f3c1 = $('#st6f4c1').val();
	var st6f3c2 = $('#st6f4c2').val();
	var st6f3c3 = $('#st6f4c3').val();
	var st6f3c4 = $('#st6f4c4').val();
	var st6f3c5 = $('#st6f4c5').val();
	

	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol1/simpandata64');?>",
      data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f3c1, field2: st6f3c2, field3: st6f3c3, field4: st6f3c4, field5: st6f3c5}
    })
      .done(function( msg ) {
           $('#st6f4c1').val('');
			$('#st6f4c2').val('');
			$('#st6f4c3').val('');
			$('#st6f4c4').val('');
			$('#st6f4c5').val(0);
			
           
           loaddata64();
    }).error(function(err){
    	console.log(err);
    });

});

function loaddata64(){
	$.ajax({
      method: "POST",
      url: "<?php echo base_url('ajaxcontrol1/getdata64');?>",
      data: {idsubmission: <?php echo $idsubmission;?>}
    })
      .done(function( msg ) {
        $('#tabledata64').html(msg);
    }).error(function(err){
    	console.log(err);
    });
}

function hapusdata64(idrec){
	$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/hapusdata64');?>",
          data: {idrecord:idrec}
        })
          .done(function( msg ) {
          loaddata64();
            
        }).error(function(err){
        	console.log(err);
        });
}

$(document).ready(function(){
	loaddata64();
	$("#sinput64").keyup(function () {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#tabledata64").find("tr");
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