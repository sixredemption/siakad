<div class = "table-responsive">
	<table class = "table table-hover tablesorter">
		<thead>
			<tr>
				<th class = "header">idNilai</th>
				<th class = "header">idGuru</th>
				<th class = "header">idKelas</th>
				<th class = "header">idSiswa</th>
				<th class = "header">idMapel</th>
				<th class = "header">nilaiSiswa</th>
			</tr>
		</thead>
	<tbody>
		<?php

		if (isset($employeeInfo) && !empty($employeeInfo)) {
			foreach ($employeeInfo as $key => $element) {
			?>
			<tr>
				<td><?php echo $element ['id_nilai']; ?></td>
				<td><?php echo $element ['id_guru']; ?></td>
				<td><?php echo $element ['id_kelas']; ?></td>
				<td><?php echo $element ['id_siswa']; ?></td>
				<td><?php echo $element ['id_mapel']; ?></td>
				<td><?php echo $element ['nilai_siswa']; ?></td>
			</tr>
			<?php
			}
		} else {
			?>
			<tr>
				<td colspan="5" > There is no employee </td>
			</tr>
	<?php	} ?>
	</tbody>
	</table>
</div>

		
