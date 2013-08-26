<div id="datos">
<table>
<?php 
if(isset($names)){
foreach ($names as $name): ?>
		<tr>
		
		<td><?php echo $name['User']['NAME'].' '.$name['User']['LASTNAME'] ?>&nbsp;</td>

		</tr>
<?php endforeach; }?>
</table>
</div>