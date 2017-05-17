<h3>Aktivitas Dosen Tetap yang Bidang Keahlianya Sesuai PS Dinyatakan Dengan SKS Rata-Rata Per Semester Pada Satu Tahun Akademik Terakhir, Diisi Sesuai Perhitungan SK Dirjen DIKTI No. 48 Tahun 1983 (12 SKS Setara Dengan 36 Jam Kerja Per Minggu)</h3>
<input type="text" class="form-control" id="sinput43" placeholder="search">
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">No. Sertifikat</th>
			<th rowspan="2">Nama Dosen</th>
			<th colspan="4">Semester Ganjil</th>
			<th rowspan="2">&sum;</th>
			<th colspan="4">Semester Genap</th>
			<th rowspan="2">&sum;</th>
			<th rowspan="2">Status</th>
			

		</tr>
		<tr>
			<th>PD</th>
			<th>PL</th>
			<th>PG</th>
			<th>PK</th>

			<th>PD</th>
			<th>PL</th>
			<th>PG</th>
			<th>PK</th>
			
		</tr>
	</thead>
	<tbody id="tabeldatast4f3">
					

	</tbody>

	
</table>

<script type="text/javascript">
	$(document).ready(function(){
		reloadst4f3();
		$("#sinput43").keyup(function () {
		    //split the current value of searchInput
		    var data = this.value.split(" ");
		    //create a jquery object of the rows
		    var jo = $("#tabeldatast4f3").find("tr");
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


	$('#btnsavest4f3').click(function(){
		var st4f3c1 = $('#st4f3c1').val();
		var st4f3c2 = $('#st4f3c2').val();
		var st4f3c3 = $('#st4f3c3').val();
		var st4f3c4 = $('#st4f3c4').val();
		var st4f3c5 = $('#st4f3c5').val();
		var st4f3c6 = $('#st4f3c6').val();
		var st4f3c7 = $('#st4f3c7').val();
		var st4f3c8 = $('#st4f3c8').val();
		var st4f3c9 = $('#st4f3c9').val();
		var st4f3c10 = $('#st4f3c10').val();
		var st4f3c11 = $('#st4f3c11').val();
		var st4f3c12 = $('#st4f3c12').val();
		var st4f3c13 = $('#st4f3c13').val();

		if($('#st4f2c5').is(":checked")){
				st4f2c5= '1';
			}else{
				st4f2c5= '0';
			}
		 $.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/savestandar43');?>",
          data: {idsubmission:<?php echo $idsubmission;?>,field1: st4f3c1,field2: st4f3c2,field3: st4f3c3,field4: st4f3c4,field5: st4f3c5,field6: st4f3c6,field7: st4f3c7,field8: st4f3c8,field9: st4f3c9,field10: st4f3c10,field11: st4f3c11,field12: st4f3c12,field13: st4f3c13}
        })
          .done(function( msg ) {
           reloadst4f3();
        })
          .error(function( err ){
              console.log( err );
        });




	});

	function reloadst4f3(){


		$('st4f3c1').val('');
		$('st4f3c2').val('');
		$('st4f3c3').val('');
		$('st4f3c4').val('');
		$('st4f3c5').val('');
		$('st4f3c6').val('');
		$('st4f3c7').val('');
		$('st4f3c8').val('');
		$('st4f3c9').val('');
		$('st4f3c10').val('');
		$('st4f3c11').val('');
		$('st4f3c12').val('');
		$('st4f3c13').val('');

		 $.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/getdatastandar43');?>",
          data: {idsubmission:<?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
           		
           		$('#tabeldatast4f3').html('');
                    nmr=1;
                    for (var i = msg.length - 1; i >= 0; i--) {
                        $('#tabeldatast4f3').append('<tr> <td>'+nmr+'</td> <td>'+msg[i].no_sertifikat+'</td> <td>'+msg[i].nama_dosen+'</td> <td>'+msg[i].pd_ganjil+'</td> <td>'+msg[i].pl_ganjil+'</td> <td>'+msg[i].pg_ganjil+'</td> <td>'+msg[i].pk_ganjil+'</td><td>'+msg[i].sum_ganjil+'</td><td>'+msg[i].pd_genap+'</td> <td>'+msg[i].pl_genap+'</td> <td>'+msg[i].pg_genap+'</td> <td>'+msg[i].pk_genap+'</td><td>'+msg[i].sum_genap+'</td><td>'+msg[i].status+'</td>  </tr> '); 
                    nmr++;
                    };
        })
          .error(function( err ){
              console.log( err );
        });


	}

	function hapusstadar42x(id){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol/hapusdatastandar43');?>",
          data: {idrecord:id}
        })
          .done(function( msg ) {
           		
           	
                   reloadst4f3();
        })
          .error(function( err ){
              console.log( err );
        });
	}
</script>