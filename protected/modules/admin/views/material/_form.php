<?php
/* @var $this MaterialController */
/* @var $model Material */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'material-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'material_name'); ?>
		<?php echo $form->textField($model,'material_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'material_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'material_description'); ?>
		<?php echo $form->textArea($model,'material_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'material_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location_id'); ?>
		<?php echo $form->textField($model,'location_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'location_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->