<?php
/* @var $this DailytripCompletionFormController */
/* @var $model DailytripCompletionForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dailytrip-completion-form-dailytripcompletion_form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'trip_id'); ?>
		<?php echo $form->textField($model,'trip_id'); ?>
		<?php echo $form->error($model,'trip_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'departure_time'); ?>
		<?php echo $form->textField($model,'departure_time'); ?>
		<?php echo $form->error($model,'departure_time'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'departure_guard'); ?>
		<?php echo $form->textField($model,'departure_guard'); ?>
		<?php echo $form->error($model,'departure_guard'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'arrival_time'); ?>
		<?php echo $form->textField($model,'arrival_time'); ?>
		<?php echo $form->error($model,'arrival_time'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'arrival_guard'); ?>
		<?php echo $form->textField($model,'arrival_guard'); ?>
		<?php echo $form->error($model,'arrival_guard'); ?>
	</div>


	<div class="form-group">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->