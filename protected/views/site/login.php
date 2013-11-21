<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="form" style="margin-top: 50px;">
    <h3>Please login your account.</h3>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        'htmlOptions'=>array('class'=>'form-signin','role'=>'form')
)); ?>

	<div class="form-group">
		<?php echo $form->textField($model,'username', array('class'=>'form-control', 'placeholder'=>'Username')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control', 'placeholder'=>'Password')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="form-group rememberMe">
            <label class="checkbox">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
            </label>
		<?php echo $form->error($model,'rememberMe'); ?>
          
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Login', array('class'=>'btn btn-lg btn-primary btn-block')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
