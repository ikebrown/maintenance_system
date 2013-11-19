<?php
/* @var $this LocationController */
/* @var $data Location */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('loc_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->loc_id), array('view', 'id'=>$data->loc_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />


</div>