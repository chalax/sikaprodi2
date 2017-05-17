<table class="table table-bordered">
	<thead>
		<tr>
			<td>No</td>
			<td>Nama Pengguna</td>
			<td>Posisi</td>
			<td>Program Studi</td>
			<td>Aksi</td>

		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$nmr=1;
				foreach ($user as $u) {
					echo "<tr>";
						echo "<td>$nmr</td>";
					
						echo "<td>".$u->user_realname."</td>";
						echo "<td>".$u->position."</td>";
						echo "<td>".$u->ps."</td>";
						echo "<td>
							<a data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Lihat Detail\" class='btn btn-success btn-sm' href='".base_url('admin/detailpengguna')."/".$u->id_login."'><i class='fa fa-eye'></i></a>
							
						</td>";
					echo "</tr>";
				$nmr++;
				}
			?>
		</tr>
	</tbody>
</table>



<script type="text/javascript">
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
</script>