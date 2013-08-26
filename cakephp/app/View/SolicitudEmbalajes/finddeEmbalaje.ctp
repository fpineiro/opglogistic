<div id="datos"  onClick="cacaman()">
	<table>
		<?php
			if(isset($names)){
				foreach ($names as $name):
		?>
		<tr>
				
			<td><?php echo $name['MaterialDeEmbalaje']['NOMBRE_MATERIAL_DE_EMBALAJE']?>&nbsp;</td>

		</tr>
		<?php 
				
				endforeach; 
			}
		?>
	</table>
</div>