<?php
/* @var $this MaterialController */
/* @var $data Material */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mat_id), array('view', 'id'=>$data->mat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material_name')); ?>:</b>
	<?php echo CHtml::encode($data->material_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material_description')); ?>:</b>
	<?php echo CHtml::encode($data->material_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location_id')); ?>:</b>
	<?php echo CHtml::encode($data->location_id); ?>
	<br />


</div>