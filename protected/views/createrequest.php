<?php
/* @var $this DailytripFormController */
/* @var $model DailytripForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dailytrip-form-createrequest-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department'); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created'); ?>
		<?php echo $form->error($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_use_from'); ?>
		<?php echo $form->textField($model,'date_use_from'); ?>
		<?php echo $form->error($model,'date_use_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_use_to'); ?>
		<?php echo $form->textField($model,'date_use_to'); ?>
		<?php echo $form->error($model,'date_use_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car'); ?>
		<?php echo $form->textField($model,'car'); ?>
		<?php echo $form->error($model,'car'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purpose'); ?>
		<?php echo $form->textField($model,'purpose'); ?>
		<?php echo $form->error($model,'purpose'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'et_departure'); ?>
		<?php echo $form->textField($model,'et_departure'); ?>
		<?php echo $form->error($model,'et_departure'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'et_arrival'); ?>
		<?php echo $form->textField($model,'et_arrival'); ?>
		<?php echo $form->error($model,'et_arrival'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->