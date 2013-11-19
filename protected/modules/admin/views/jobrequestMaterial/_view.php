<?php
/* @var $this JobrequestMaterialController */
/* @var $data JobrequestMaterial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobmat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jobmat_id), array('view', 'id'=>$data->jobmat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mat_id')); ?>:</b>
	<?php echo CHtml::encode($data->mat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_id')); ?>:</b>
	<?php echo CHtml::encode($data->job_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdby')); ?>:</b>
	<?php echo CHtml::encode($data->createdby); ?>
	<br />


</div>