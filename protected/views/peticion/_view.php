<div class="view">
	<?php
		//echo CVarDumper::dump($data,10,true);
		//exit;
	
	?>

	<b><?php echo CHtml::encode('Id'); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data['id']), array('view', 'id'=>$data['id'])); ?>
	<br />

	<b><?php echo CHtml::encode('Cola'); ?>:</b>
	<?php echo CHtml::encode($data['nombre']); ?>
	<br />
	
	<b><?php echo CHtml::encode('Telefono'); ?>:</b>
	<?php echo CHtml::encode($data['telefono']); ?>
	<br />


</div>