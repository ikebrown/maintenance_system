<?php
/* @var $this TriprequestController */
/* @var $model Triprequest */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'trip_id'); ?>
		<?php echo $form->textField($model,'trip_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requester_id'); ?>
		<?php echo $form->textField($model,'requester_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateofuse_from'); ?>
		<?php echo $form->textField($model,'dateofuse_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateofuse_to'); ?>
		<?php echo $form->textField($model,'dateofuse_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'request_date'); ?>
		<?php echo $form->textField($model,'request_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_id'); ?>
		<?php echo $form->textField($model,'car_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purpose'); ?>
		<?php echo $form->textArea($model,'purpose',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'et_departure'); ?>
		<?php echo $form->textField($model,'et_departure'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'et_arrival'); ?>
		<?php echo $form->textField($model,'et_arrival'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createstatus'); ?>
		<?php echo $form->textField($model,'createstatus',array('size'=>0,'maxlength'=>0)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modifiedby'); ?>
		<?php echo $form->textField($model,'modifiedby',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departure_time'); ?>
		<?php echo $form->textField($model,'departure_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departure_guard'); ?>
		<?php echo $form->textField($model,'departure_guard',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arrival_time'); ?>
		<?php echo $form->textField($model,'arrival_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arrival_guard'); ?>
		<?php echo $form->textField($model,'arrival_guard',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->