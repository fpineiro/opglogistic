<h1>Listado de estudiantes</h1>
<?php echo $this->Html->link('Agregar estudiante', array('action'=>'add')); ?>
<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Acciones</th>
		<th>Eliminar</th>
	</tr>

<?php foreach($estudiantes as $k=>$estudiante): ?>
	<tr>
		<td><?php echo $estudiante['Student']['id']; ?></td>
		<td><?php echo $estudiante['Student']['name']; ?></td>
		<td><?php echo $estudiante['Student']['last_name']; ?></td>
		<td>
			<?php echo $this->Html->link('Editar', array('action'=>'edit',$estudiante['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Form->postLink('Eliminar', array('action'=>'delete', $estudiante['Student']['id']), array('confirm'=>'Realmente desea eliminar al estudiante '.$estudiante['Student']['id'].'?')); ?>
		</td>
		
	</tr>
<?php endforeach; ?>
</table>