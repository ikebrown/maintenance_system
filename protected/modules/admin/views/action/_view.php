<?php
/* @var $this ActionController */
/* @var $data Action */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('act_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->act_id), array('view', 'id'=>$data->act_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('action')); ?>:</b>
	<?php echo CHtml::encode($data->action); ?>
	<br />


</div>