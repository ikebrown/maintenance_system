<?php
/* @var $this JobrequestMaterialController */
/* @var $model JobrequestMaterial */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jobrequest-material-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mat_id'); ?>
		<?php echo $form->textField($model,'mat_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_id'); ?>
		<?php echo $form->textField($model,'job_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'job_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdby'); ?>
		<?php echo $form->textField($model,'createdby',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'createdby'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->