<div id="datos">
<table>
<?php 
if(isset($names)){
foreach ($names as $name): ?>
		<tr>
		
		<td><?php echo $name['MaterialDeEmbalaje']['NOMBRE_MATERIAL_DE_EMBALAJE']; ?></td>

		</tr>
<?php endforeach; }?>
</table>
</div>