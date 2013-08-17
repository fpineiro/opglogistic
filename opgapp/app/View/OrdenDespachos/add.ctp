<script type="text/javascript">
	function agregarMaterial(){
		
	}
</script>

<div class="ordenDespachos form">
	<?php echo $this->Form->create('OrdenDespacho'); ?>
	<fieldset>
		<legend><?php echo __('Realizar Orden Despacho'); ?></legend>
		<?php
			echo $this->Form->input('nombreMaterial',array(
				'label' => 'Nombre Material',
				'class' => 'input-large'
			));
			echo $this->Form->input('cantidadMaterial',array(
				'label' => 'Cantidad Material',
				'class' => 'input-mini',
				'type' => 'number',
				'min' => '0'
			));
			echo $this->Form->button('Agregar Material',array(
				'type' => 'button',
				'class' => 'btn',
				'onClick' => 'agregarMaterial()',
				'style' => 'margin-bottom: 20px'
			));
		?>
		<table class="table table-striped table-bordered">
			<thead>
				<?php
					echo $this->Html->tableHeaders(array(
						array('Material Intermedio' => array('class' => 'materialIntermedio')),
						array('Cantidad' => array('class' => 'cantidadIntermedio'))
					));
				?>
			</thead>
			<tbody>
				<?php
					$contador = 0;
					$tabla = array();
					foreach($materiales as $material){
						$tabla[$contador] = array($material['MaterialIntermedio']['NOMBRE_MATERIAL_INTERMEDIO'],/*La cantidad del material*/'');
						$contador = $contador + 1;
					}
					echo $this->Html->tableCells($tabla);
				?>
			</tbody>
		</table>
	</fieldset>
	<?php
		$options = array(
			'label' => 'Realizar Orden',
			'class' => 'btn btn-primary'
		);
		echo $this->Form->end($options);
	?>
</div>
