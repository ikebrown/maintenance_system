<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>Oops Sorry!<?php //echo $code; ?></h2>

<div class="error">
<?php echo CHtml::encode($message); ?>
    
<?php echo CHtml::link('Back to Main', Yii::app()->getBaseUrl(1).'/main')?>    
</div>