<?php
/* @var $this MessageFormController */
/* @var $model MessageForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form-sendmessage-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div>
            <b>To:</b> <?php echo $model->name;?>
        </div><br/>
        
	<div class="form-group">
                <?php echo $form->hiddenField($model,'receipient_uid'); ?>
		<?php echo $form->error($model,'receipient_uid'); ?>
		<?php echo $form->labelEx($model,'message'); ?>
		<?php echo $form->textArea($model,'message', array('class'=>'form-control', 'rows'=>'10')); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>


	<div class="form-group">
		<?php echo CHtml::submitButton('Send', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->