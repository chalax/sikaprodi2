<div class="row">
	<div class="col-md-4 col-md-offset-4">
		
		<div class="panel panel-info">
			<div class="panel-heading">Pengguna Baru</div>
			<div class="panel-body">
		      <form action="<?php echo base_url();?>admin/simpantambahpengguna" method="post" class="">
		        
		      	<input placeholder="Login Pengguna" required type="text" name="username" id="username" class="form-control">
		      	<br>
		      	<input placeholder="Katasandi" required type="password" name="password" id="password" class="form-control">
		      	<br>
		      	<input placeholder="Ulangi Katasandi" required type="password" name="repassword" id="repassword" class="form-control">
		      	<br>
		      	<input placeholder="Nama Pengguna" required type="text" name="realname" id="realname" class="form-control">
		      	<br>
		      		<select name="position" class="form-control">
						<option disabled selected value="">Posisi Pengguna</option>
		      			
						<option value="KaPS">KaPS</option>
						<option value="Kajur">Kajur</option>
						<option value="Administrator">Administrator</option>

					</select>
				<br>
		      	<input placeholder="Program Studi" required type="text" name="ps" id="ps" class="form-control">
		      	<br>


		        <button id="btnsimpan" class="btn btn-lg btn-primary pull-right" type="submit">Simpan</button>
		      </form>
		  	</div>
		</div>

	</div>
</div>
		
<script type="text/javascript">
	$('#repassword').change(function(){
		var password = $('#password').val();
		var repassword = $('#repassword').val();
		if(password!=repassword){
			alert("Password Tidak Cocok");
			$('#btnsimpan').attr('disabled',true);
		}else{
			$('#btnsimpan').attr('disabled',false);
		}
	});

</script>