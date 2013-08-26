<div id="datos">
<table>
<?php 
if(isset($names)){
foreach ($names as $name): ?>
		<tr>
			<td><?php echo $name['MaterialIntermedio']['NOMBRE_MATERIAL_INTERMEDIO'];?>&nbsp;</td>
		</tr>
<?php endforeach; }?>
</table>
</div>