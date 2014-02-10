<?php
/* @var $this MaintenanceFormController */
/* @var $model MaintenanceForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maintenance-form-maintenanceForm-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid'); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'act_id'); ?>
		<?php echo $form->textField($model,'act_id'); ?>
		<?php echo $form->error($model,'act_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'act_month'); ?>
		<?php echo $form->textField($model,'act_month'); ?>
		<?php echo $form->error($model,'act_month'); ?>
	</div>


	<div class="form-group">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->