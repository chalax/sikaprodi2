<?php
if(isusercan('createsubmission')){
?>

<?php
}
?>
<br>
<br>
<table class="table table-bordered">
	<tr>
			<th>No.</th>
			<th>Tahun</th>
			<th>Status</th>
			<th>Aksi</th>
	</tr>

	<?php
		if(isset($datasubmission)){
			$no = 1;
			foreach ($datasubmission as $ds) {
				?>
					<tr>
							<td><?php echo $no ;?></td>
							<td><?php echo substr($ds->date_submitted, 0,4);?></td>
							<td><?php echo $ds->status_submission; ?></td>
							<td>
								<?php 
									if(isdraf($ds->id_submission) && isown($ds->id_submission)){
										?>
											<a href="<?php echo base_url('newsubmission/loadform').'/1/'.$ds->id_submission;?>">Edit Data</a>
											<a href="<?php echo base_url('home/deletesubmission').'/'.$ds->id_submission;?>">Hapus Data</a>
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