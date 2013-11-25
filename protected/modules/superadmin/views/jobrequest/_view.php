<?php
/* @var $this JobrequestController */
/* @var $data Jobrequest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->job_id), array('view', 'id'=>$data->job_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_no')); ?>:</b>
	<?php echo CHtml::encode($data->job_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requester_uid')); ?>:</b>
	<?php echo CHtml::encode($data->requester_uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_needed')); ?>:</b>
	<?php echo CHtml::encode($data->date_needed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_requested')); ?>:</b>
	<?php echo CHtml::encode($data->date_requested); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nature')); ?>:</b>
	<?php echo CHtml::encode($data->nature); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_specified')); ?>:</b>
	<?php echo CHtml::encode($data->other_specified); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('createstatus')); ?>:</b>
	<?php echo CHtml::encode($data->createstatus); ?>
	<br />

	*/ ?>

</div>