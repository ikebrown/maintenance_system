<?php
/* @var $this JobrequestController */
/* @var $model Jobrequest */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'job_id'); ?>
		<?php echo $form->textField($model,'job_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_no'); ?>
		<?php echo $form->textField($model,'job_no',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requester_uid'); ?>
		<?php echo $form->textField($model,'requester_uid',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_needed'); ?>
		<?php echo $form->textField($model,'date_needed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_requested'); ?>
		<?php echo $form->textField($model,'date_requested'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nature'); ?>
		<?php echo $form->textField($model,'nature',array('size'=>0,'maxlength'=>0)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other_specified'); ?>
		<?php echo $form->textField($model,'other_specified',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createstatus'); ?>
		<?php echo $form->textField($model,'createstatus',array('size'=>0,'maxlength'=>0)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->