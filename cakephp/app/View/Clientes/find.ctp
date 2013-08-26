<div id="datos">
<table>
<?php 
if(isset($names)){
foreach ($names as $name): ?>
		<tr>
			<td><?php echo $name['Cliente']['NOMBRE_CLIENTE'];?>&nbsp;</td>
		</tr>
<?php endforeach; }?>
</table>
</div>