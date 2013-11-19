<?php
/* @var $this PassengersController */
/* @var $model Passengers */

$this->breadcrumbs=array(
	'Passengers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Passengers', 'url'=>array('index')),
	array('label'=>'Create Passengers', 'url'=>array('create')),
	array('label'=>'Update Passengers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Passengers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Passengers', 'url'=>array('admin')),
);
?>

<h1>View Passengers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'trip_id',
		'passenger',
	),
)); ?>
