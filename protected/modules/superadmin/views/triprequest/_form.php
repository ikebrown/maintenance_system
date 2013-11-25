<?php
/* @var $this TriprequestController */
/* @var $model Triprequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'triprequest-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<div class="row">
		<?php echo $form->labelEx($model,'requester_id'); ?>
		<?php echo $form->textField($model,'requester_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'requester_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateofuse_from'); ?>
		<?php echo $form->textField($model,'dateofuse_from'); ?>
		<?php echo $form->error($model,'dateofuse_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateofuse_to'); ?>
		<?php echo $form->textField($model,'dateofuse_to'); ?>
		<?php echo $form->error($model,'dateofuse_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'request_date'); ?>
		<?php echo $form->textField($model,'request_date'); ?>
		<?php echo $form->error($model,'request_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_id'); ?>
		<?php echo $form->textField($model,'car_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'car_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purpose'); ?>
		<?php echo $form->textArea($model,'purpose',array('rows'=>6, 'cols'=>50)); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'createstatus'); ?>
		<?php echo $form->textField($model,'createstatus',array('size'=>0,'maxlength'=>0)); ?>
		<?php echo $form->error($model,'createstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modifiedby'); ?>
		<?php echo $form->textField($model,'modifiedby',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'modifiedby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departure_time'); ?>
		<?php echo $form->textField($model,'departure_time'); ?>
		<?php echo $form->error($model,'departure_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departure_guard'); ?>
		<?php echo $form->textField($model,'departure_guard',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'departure_guard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arrival_time'); ?>
		<?php echo $form->textField($model,'arrival_time'); ?>
		<?php echo $form->error($model,'arrival_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arrival_guard'); ?>
		<?php echo $form->textField($model,'arrival_guard',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'arrival_guard'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->