<?php
/* @var $this MaterialTypeController */
/* @var $model MaterialType */

$this->breadcrumbs=array(
	'Material Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MaterialType', 'url'=>array('index')),
	array('label'=>'Manage MaterialType', 'url'=>array('admin')),
);
?>

<h1>Create MaterialType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>