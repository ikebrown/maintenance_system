<?php
/* @var $this PassengersController */
/* @var $model Passengers */

$this->breadcrumbs=array(
	'Passengers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Passengers', 'url'=>array('index')),
	array('label'=>'Create Passengers', 'url'=>array('create')),
	array('label'=>'View Passengers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Passengers', 'url'=>array('admin')),
);
?>

<h1>Update Passengers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>