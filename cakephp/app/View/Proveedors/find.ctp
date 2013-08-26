<div id="datos">
<table>
<?php 
if(isset($names)){
foreach ($names as $name): ?>
		<tr>
			<td><?php echo $name['Proveedor']['NOMBRE_PROVEEDOR'];?>&nbsp;</td>
		</tr>
<?php endforeach; }?>
</table>
</div>