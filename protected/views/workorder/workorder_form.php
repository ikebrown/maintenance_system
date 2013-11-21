<?php
/* @var $this WorkorderFormController */
/* @var $model WorkorderForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'workorder-form-workorder_form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row  col-md-6">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name', array('class'=>'form-control', 'placeholder'=>'Name', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row  col-md-6 col-md-offset-6">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department', array('class'=>'form-control', 'placeholder'=>'Department', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row col-md-6">
		<?php echo $form->labelEx($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created', array('class'=>'form-control', 'placeholder'=>'Date Created', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'date_created'); ?>
	</div>

	<div class="row col-md-6 col-md-offset-6">
		<?php echo $form->labelEx($model,'date_needed'); ?>
		<?php echo $form->textField($model,'date_needed', array('class'=>'form-control', 'placeholder'=>'Date Needed', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'date_needed'); ?>
	</div>

	<div class="row col-md-6">
		<?php echo $form->labelEx($model,'nature_of_job'); ?>
		<?php echo $form->textField($model,'nature_of_job', array('class'=>'form-control', 'placeholder'=>'Date Needed', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'nature_of_job'); ?>
	</div>
        <div class="clearfix"></div>
	<div class="row col-md-3">
                <button class="btn btn-default">Assign Technician</button>
		<?php echo $form->textField($model,'personnel_assigned_uid', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'personnel_assigned_uid'); ?>
	</div>
        <div class="clearfix"></div>
	<div class="row  col-md-3">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status', array('class'=>'form-control', 'placeholder'=>'Status', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

        <div class="clearfix"></div>
	<div class="row buttons col-md-6">
		<?php echo CHtml::submitButton('Issue Work Order', array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->