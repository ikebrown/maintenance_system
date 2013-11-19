<?php
/* @var $this PassengersController */
/* @var $model Passengers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'passengers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'trip_id'); ?>
		<?php echo $form->textField($model,'trip_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'trip_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passenger'); ?>
		<?php echo $form->textField($model,'passenger',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'passenger'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->