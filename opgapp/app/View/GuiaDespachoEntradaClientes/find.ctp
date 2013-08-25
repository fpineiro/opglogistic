<div id="datos">
<table>
<?php 
if(isset($names)){
foreach ($names as $name): ?>
		<tr>
			<td><?php echo $name['GuiaDespachoEntradaCliente']['GUIA_DESPACHO_CLIENTE_ID']; ?>&nbsp;</td>
		</tr>
<?php endforeach; }?>
</table>
</div>