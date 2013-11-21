<?php
/* @var $this DailytripFormController */
/* @var $model DailytripForm */
/* @var $form CActiveForm */
?>

<div class="form">
    <h3>Daily Trip Request</h3>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dailytrip-form-dailytrip_form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>
    
	<div class="row col-md-6">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name', array('class'=>'form-control', 'placeholder'=>'Name', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
        
        
	<div class="row col-md-6 col-md-offset-6">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department', array('class'=>'form-control', 'placeholder'=>'Name', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>
        
        <div class="row col-md-6">
		<?php echo $form->labelEx($model,'date_created'); ?>
		<?php echo $form->dateField($model,'date_created', array('class'=>'form-control', 'placeholder'=>'Date', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'date_created'); ?>
	</div>
        
        <div class="clearfix"></div>
        <div class="col-md-6"><b>Date of Use</b></div>
        <div class="clearfix"></div>
	<div class="row col-md-6">
		<?php echo $form->labelEx($model,'date_use_from'); ?>
		<?php echo $form->dateField($model,'date_use_from', array('class'=>'form-control', 'placeholder'=>'From')); ?>
		<?php echo $form->error($model,'date_use_from'); ?>
	</div>
    
        <div class="row col-md-6 col-md-offset-6">
		<?php echo $form->labelEx($model,'date_use_to'); ?>
		<?php echo $form->dateField($model,'date_use_to', array('class'=>'form-control', 'placeholder'=>'To')); ?>
		<?php echo $form->error($model,'date_use_to'); ?>
	</div>
        
	<div class="row col-md-6">
		<?php echo $form->labelEx($model,'et_departure'); ?>
		<?php echo $form->timeField($model,'et_departure', array('class'=>'form-control', 'placeholder'=>'ET Departure')); ?>
		<?php echo $form->error($model,'et_departure'); ?>
	</div>
        
        
	<div class="row col-md-6 col-md-offset-6">
		<?php echo $form->labelEx($model,'et_arrival'); ?>
		<?php echo $form->timeField($model,'et_arrival', array('class'=>'form-control', 'placeholder'=>'ET Arrival')); ?>
		<?php echo $form->error($model,'et_arrival'); ?>
	</div>
        
        <div class="row col-md-6">
		<?php echo $form->labelEx($model,'car'); ?>
		<?php echo $form->radioButtonList($model,'car', $carPair,
                        array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'<br/>'));?>
		<?php echo $form->error($model,'car'); ?>
            <br/><br/>
	</div>
        
    
	<div class="row col-md-6 col-md-offset-6">
		<?php echo $form->labelEx($model,'purpose'); ?>
		<?php echo $form->textArea($model,'purpose', array('class'=>'form-control', 'placeholder'=>'Purpose')); ?>
		<?php echo $form->error($model,'purpose'); ?>
	</div>
        <div class="clearfix"></div>
        <div class="row buttons col-md-6">
		<?php echo CHtml::submitButton('Submit', array('class'=>'btn btn-lg btn-primary')); ?>
	</div>
        
    <div class="clearfix"></div>


<?php $this->endWidget(); ?>

</div><!-- form -->