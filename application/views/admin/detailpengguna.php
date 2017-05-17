<table class="table">
	<tr>
		<td>Login</td>
		<td>
			<?php echo $user[0]->username ;?> 
			<i style="cursor: pointer;" class="fa fa-edit" onClick="editun(<?php echo $user[0]->id_login;?>)"></i> 
			<form method="post" action="<?php echo base_url('admin/changeusername').'/'.$user[0]->id_login;?>" class="form-inline" style="visibility: hidden;" id="formeditun">
				<input name="newusername" type="text" value="<?php echo $user[0]->username ;?>" class="form-control">
				<button type="submit" class="form-control btn btn-primary">Simpan</button>
			</form>
		</td>
	</tr>
	<tr>
		<td>Nama Pengguna</td>
		<td>
			<?php echo $user[0]->user_realname ;?> 
			<i style="cursor: pointer;" class="fa fa-edit" onClick="editurn(<?php echo $user[0]->id_login;?>)"></i> 
			<form method="post" action="<?php echo base_url('admin/changerealname').'/'.$user[0]->id_login;?>" class="form-inline" style="visibility: hidden;" id="formediturn">
				<input name="newrealname" type="text" value="<?php echo $user[0]->user_realname ;?>" class="form-control">
				<button type="submit" class="form-control btn btn-primary">Simpan</button>
			</form>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
			********** 
			
			<i style="cursor: pointer;" class="fa fa-edit" onClick="editpsw(<?php echo $user[0]->id_login;?>)"></i> 
			<form method="post" action="<?php echo base_url('admin/changepassword').'/'.$user[0]->id_login;?>" class="form-inline" style="visibility: hidden;" id="formeditpsw">
				<input name="newpassword" type="text" value="" class="form-control">
				<button type="submit" class="form-control btn btn-primary">Simpan</button>
			</form>
		</td>
	</tr>
	<tr>
		<td>Posisi</td>
		<td>
			<?php echo $user[0]->position ;?> 
			
			<form method="post" action="<?php echo base_url('admin/changeposition').'/'.$user[0]->id_login;?>" class="form-inline" style="visibility: hidden;" id="formeditposisi">
				<select name="newposition" class="form-control">
					<option <?php if($user[0]->position=='KaPS'){echo "selected";} ;?> value="KaPS">KaPS</option>
					<option <?php if($user[0]->position=='Kajur'){echo "selected";} ;?> value="Kajur">Kajur</option>
					<option <?php if($user[0]->position=='Administrator'){echo "selected";} ;?> value="Administrator">Administrator</option>

				</select>
				
				<button type="submit" class="form-control btn btn-primary">Simpan</button>
			</form>
			<i style="cursor: pointer;" class="fa fa-edit" onClick="editposisi(<?php echo $user[0]->id_login;?>)"></i> 
		</td>
	</tr>
	<tr>
		<td>Program Studi</td>
		<td>
			<?php echo $user[0]->ps ;?> 
			
			<form method="post" action="<?php echo base_url('admin/changeps').'/'.$user[0]->id_login;?>" class="form-inline" style="visibility: hidden;" id="formeditps">
				<input name="newps" type="text" value="" class="form-control">
				<button type="submit" class="form-control btn btn-primary">Simpan</button>
			</form>
			<i style="cursor: pointer;" class="fa fa-edit" onClick="editps(<?php echo $user[0]->id_login;?>)"></i> 
		</td>
	</tr>
</table>

<script type="text/javascript">
	function editun(idlogin){
		$('#formeditun').css('visibility','visible').fadeIn('slow');
	}
	function editurn(idlogin){
		$('#formediturn').css('visibility','visible');
	}
	function editpsw(idlogin){
		$('#formeditpsw').css('visibility','visible');
	}
	function editposisi(idlogin){
		$('#formeditposisi').css('visibility','visible');
	}
	function editps(idlogin){
		$('#formeditps').css('visibility','visible');
	}

</script>