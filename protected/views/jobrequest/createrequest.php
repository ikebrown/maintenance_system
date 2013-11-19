<?php
/* @var $this JobrequestFormController */
/* @var $model JobrequestForm */
/* @var $form CActiveForm */
?>

<div class="form">
<h3>Job Request</h3>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jobrequest-form-jobrequest_form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form')
)); ?>

    <div class="col-md-8 col-lg-6">
	<div class="row">
                <?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'name', array('class'=>'form-control', 'placeholder'=>'Name', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'date_created'); ?>
		<?php echo $form->dateField($model,'date_created', array('class'=>'form-control', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'date_created'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'nature_of_job'); ?>
                <?php echo $form->radioButtonList(
                        $model,
                        'nature_of_job', 
                        $model->getNatureOfJob(),
                        array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'<br/>'));
                  ?>
            
		<?php echo $form->textField($model,'other_specified', array('class'=>'form-control', 'placeholder'=>'Please specify')); ?>
		<?php echo $form->error($model,'nature_of_job'); ?>
	</div>
        
        
    </div>
    
    <div class="col-md-8 col-lg-6">
	<div class="row">
                <?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department', array('class'=>'form-control', 'placeholder'=>'Department', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_needed'); ?>
		<?php echo $form->dateField($model,'date_needed', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'date_needed'); ?>
	</div>

    </div>
    <div class="clearfix "></div>
    <div class="col-lg-12">
        <div class="row buttons pull-right">
                <?php echo CHtml::submitButton('Submit', array('class'=>'btn btn-lg btn-primary')); ?>
        </div>
    </div> 
<?php $this->endWidget(); ?>

    <div class="clearfix "></div>
</div><!-- form -->