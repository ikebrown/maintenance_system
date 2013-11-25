<?php
/* @var $this JobrequestController */
/* @var $model Jobrequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jobrequest-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'job_no'); ?>
		<?php echo $form->textField($model,'job_no',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'job_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requester_uid'); ?>
		<?php echo $form->textField($model,'requester_uid',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'requester_uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_needed'); ?>
		<?php echo $form->textField($model,'date_needed'); ?>
		<?php echo $form->error($model,'date_needed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_requested'); ?>
		<?php echo $form->textField($model,'date_requested'); ?>
		<?php echo $form->error($model,'date_requested'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nature'); ?>
		<?php echo $form->textField($model,'nature',array('size'=>0,'maxlength'=>0)); ?>
		<?php echo $form->error($model,'nature'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_specified'); ?>
		<?php echo $form->textField($model,'other_specified',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'other_specified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createstatus'); ?>
		<?php echo $form->textField($model,'createstatus',array('size'=>0,'maxlength'=>0)); ?>
		<?php echo $form->error($model,'createstatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->