<h3>Aktivitas Dosen Tetap yang Bidang Keahlianya Sesuai PS Dinyatakan Dengan SKS Rata-Rata Per Semester Pada Satu Tahun Akademik Terakhir, Diisi Sesuai Perhitungan SK Dirjen DIKTI No. 48 Tahun 1983 (12 SKS Setara Dengan 36 Jam Kerja Per Minggu)</h3>
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
			<th rowspan="2">Aksi</th>

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

	<tbody>
		<tr>
			<td></td>
			<td> <input type="text" id="st4f3c1" class="form-control">  </td>
			<td> <input type="text" id="st4f3c2" class="form-control">  </td>
			<td> <input type="number" value="0" id="st4f3c3" class="form-control">  </td>
			<td> <input type="number" value="0" id="st4f3c4" class="form-control">  </td>
			<td> <input type="number" value="0" id="st4f3c5" class="form-control">  </td>
			<td> <input type="number" value="0" id="st4f3c6" class="form-control">  </td>
			<td> <input type="number" value="0" id="st4f3c7" class="form-control">  </td>
			<td> <input type="number" value="0" id="st4f3c8" class="form-control">  </td>
			<td> <input type="number" value="0" id="st4f3c9" class="form-control">  </td>
			<td> <input type="number" value="0" id="st4f3c10" class="form-control">  </td>
			<td> <input type="number" value="0" id="st4f3c11" class="form-control">  </td>
			<td> <input type="number" value="0" id="st4f3c12" class="form-control">  </td>
			<td> <input type="text" id="st4f3c13" class="form-control">  </td>
			<td><button id="btnsavest4f3" type="button" class="btn btn-info"> <span class="glyphicon glyphicon-plus"></span> </button> </td>
		</tr>			

	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
		reloadst4f3();
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
                        $('#tabeldatast4f3').append('<tr> <td>'+nmr+'</td> <td>'+msg[i].no_sertifikat+'</td> <td>'+msg[i].nama_dosen+'</td> <td>'+msg[i].pd_ganjil+'</td> <td>'+msg[i].pl_ganjil+'</td> <td>'+msg[i].pg_ganjil+'</td> <td>'+msg[i].pk_ganjil+'</td><td>'+msg[i].sum_ganjil+'</td><td>'+msg[i].pd_genap+'</td> <td>'+msg[i].pl_genap+'</td> <td>'+msg[i].pg_genap+'</td> <td>'+msg[i].pk_genap+'</td><td>'+msg[i].sum_genap+'</td><td>'+msg[i].status+'</td>  <td><button class="btn btn-danger" onClick="hapusstadar42x('+msg[i].id_aktivitas_dosen_tetap_sesuai_ps+')"><span class="glyphicon glyphicon-remove"></span> </button></td> </tr> '); 
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