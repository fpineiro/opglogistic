<div class="index">
	<h2>Cursos</h2>
	<table>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Profesor</th>
		</tr>
		<?php foreach ($courses as $k => $course) { ?>
			<tr>
				<td><?php echo $course['Course']['id']; ?></td>
				<td><?php echo $course['Course']['name']; ?></td>
				<td><?php echo $course['Course']['description']; ?></td>
				<td>
					<?php echo $this->Html->link($course['Teacher']['name'],
						array('controller'=>'teachers',
							'action'=>'view',
							$course['Teacher']['id'])
						); ?>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>