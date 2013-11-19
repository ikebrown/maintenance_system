<?php
/* @var $this CarController */
/* @var $data Car */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->car_id), array('view', 'id'=>$data->car_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_model')); ?>:</b>
	<?php echo CHtml::encode($data->car_model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plate_no')); ?>:</b>
	<?php echo CHtml::encode($data->plate_no); ?>
	<br />


</div>