<?php
/* @var $this PassengersController */
/* @var $model Passengers */

$this->breadcrumbs=array(
	'Passengers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Passengers', 'url'=>array('index')),
	array('label'=>'Manage Passengers', 'url'=>array('admin')),
);
?>

<h1>Create Passengers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>