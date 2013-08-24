<div id="datos">
<table>
<?php 
if(isset($names)){
foreach ($names as $name): ?>
		<tr>
		
		<td><?php echo $name['MaterialIndividual']['NOMBRE_MATERIAL_INDIVIDUAL']; ?></td>

		</tr>
<?php endforeach; }?>
</table>
</div>