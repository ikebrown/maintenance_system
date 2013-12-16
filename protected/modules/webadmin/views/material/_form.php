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

	<div class="row">
		<?php echo $form->labelEx($model,'material_name'); ?>
		<?php echo $form->textField($model,'material_name',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'material_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'material_description'); ?>
		<?php echo $form->textArea($model,'material_description',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'material_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->numberField($model,'quantity',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->dropDownList($model,'type_id', $model->getOptionMaterialType(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location_id'); ?>
		<?php echo $form->dropDownList($model,'location_id', $model->getOptionLocation(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'location_id'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'m_type'); ?>
		<?php echo $form->dropDownList($model,'m_type', $model->getOptionMType(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'m_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->