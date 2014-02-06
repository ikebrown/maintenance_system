<?php
/* @var $this MaintainController */
/* @var $model Maintain */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maintain-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maintain_year'); ?>
                <?php
                $year = array();
                for($x = date('Y');$x >= 2014;$x--){
                    $year[$x] = $x;
                }
                ?>
		<?php echo $form->dropDownList($model,'maintain_year', $year,array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'maintain_year'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn  btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->