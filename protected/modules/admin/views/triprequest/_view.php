<?php
/* @var $this TriprequestController */
/* @var $data Triprequest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('trip_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->trip_id), array('view', 'id'=>$data->trip_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requester_id')); ?>:</b>
	<?php echo CHtml::encode($data->requester_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateofuse_from')); ?>:</b>
	<?php echo CHtml::encode($data->dateofuse_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateofuse_to')); ?>:</b>
	<?php echo CHtml::encode($data->dateofuse_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date')); ?>:</b>
	<?php echo CHtml::encode($data->request_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::encode($data->car_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purpose')); ?>:</b>
	<?php echo CHtml::encode($data->purpose); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('et_departure')); ?>:</b>
	<?php echo CHtml::encode($data->et_departure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('et_arrival')); ?>:</b>
	<?php echo CHtml::encode($data->et_arrival); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createstatus')); ?>:</b>
	<?php echo CHtml::encode($data->createstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedby')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departure_time')); ?>:</b>
	<?php echo CHtml::encode($data->departure_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departure_guard')); ?>:</b>
	<?php echo CHtml::encode($data->departure_guard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrival_time')); ?>:</b>
	<?php echo CHtml::encode($data->arrival_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrival_guard')); ?>:</b>
	<?php echo CHtml::encode($data->arrival_guard); ?>
	<br />

	*/ ?>

</div>