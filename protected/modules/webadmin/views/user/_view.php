<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view well well-sm">
	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->username), array('view', 'id'=>$data->uid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_no')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('dept_id')); ?>:</b>
	<?php echo CHtml::encode($data->dept->department); ?>
        <br/>
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('usertype_id')); ?>:</b>
	<?php echo CHtml::encode($data->usertype->utype); ?>


</div>