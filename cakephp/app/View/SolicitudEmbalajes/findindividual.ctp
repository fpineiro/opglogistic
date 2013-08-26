<div id="datos" onClick="cacaman()">
	<table>
		<?php
			if(isset($names)){
				foreach ($names as $name):
		?>
		<tr>
				
			<td><?php echo $name['MaterialIndividual']['NOMBRE_MATERIAL_INDIVIDUAL']?>&nbsp;</td>

		</tr>
		<?php 
				
				endforeach; 
			}
		?>
	</table>
</div>