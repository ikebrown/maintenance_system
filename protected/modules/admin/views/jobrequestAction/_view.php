<?php
/* @var $this JobrequestActionController */
/* @var $data JobrequestAction */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobact_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jobact_id), array('view', 'id'=>$data->jobact_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_id')); ?>:</b>
	<?php echo CHtml::encode($data->job_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('act_id')); ?>:</b>
	<?php echo CHtml::encode($data->act_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdate')); ?>:</b>
	<?php echo CHtml::encode($data->createdate); ?>
	<br />


</div>