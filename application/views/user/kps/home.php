<?php
if(isusercan('createsubmission')){
?>
	<form class="form-inline" action="<?php echo base_url('home/createsubmission');?>" method="post">
		
	<input class='form-control' type="number" placeholder="Tahun" name="tahun">
	<input type="submit" class="btn btn-primary" value="Buat Draf Usulan">
	</form>

<?php
}
?>
<br>
<br>
<table class="table table-bordered">
	<tr>
			<th>No.</th>
			<th>Tahun</th>
			<?php 
				if(isset($draf)){
					echo "<th>Tanggal Dibuat</th>";
				}
			?>
			<th>Status</th>
			<?php
			
					echo "<th>PS</th>";
			
			?>
			<th>Aksi</th>
	</tr>

	<?php
		if(isset($datasubmission)){
			$no = 1;
			foreach ($datasubmission as $ds) {
				?>
					<tr>
							<td><?php echo $no ;?></td>
							<td><?php echo $ds->tahun;?></td>
							<?php 
								if(isdraf($ds->id_submission)){
									echo "<td>".$ds->date_submitted."</td>";
								}
							?>
							<td><?php
								if($ds->status_submission=='submitted'){
								 	echo "<span class='glyphicon glyphicon-check'></span>"; 
									
								}elseif ($ds->status_submission=='draft') {
								 	echo "<span class='glyphicon glyphicon-edit'></span>"; 
									
								}


							 ?></td>
							
							<?php
							
									echo "<td>".$ds->ps."</td>";
							
							?>
							
							<td>
								<?php 
									if(isdraf($ds->id_submission) && isown($ds->id_submission)){
										?>
											<a href="<?php echo base_url('newsubmission/loadform').'/1/'.$ds->id_submission;?>">Edit Data</a>
											<a href="<?php echo base_url('submissionfile/deletesubmission').'/'.$ds->id_submission;?>">Hapus Data</a>
										<?php
									}else{
										?>
											<a href="<?php echo base_url('home/viewsubmission').'/'.$ds->id_submission;?>">Lihat Data</a>
											
										<?php
									}
								?>
							</td>

					</tr>
				<?php
				$no++;
			}
		}
	?>


</table>