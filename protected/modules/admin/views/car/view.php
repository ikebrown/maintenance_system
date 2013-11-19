<?php
/* @var $this CarController */
/* @var $model Car */

$this->breadcrumbs=array(
	'Cars'=>array('index'),
	$model->car_id,
);

$this->menu=array(
	array('label'=>'List Car', 'url'=>array('index')),
	array('label'=>'Create Car', 'url'=>array('create')),
	array('label'=>'Update Car', 'url'=>array('update', 'id'=>$model->car_id)),
	array('label'=>'Delete Car', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->car_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Car', 'url'=>array('admin')),
);
?>

<h1>View Car #<?php echo $model->car_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'car_id',
		'car_model',
		'plate_no',
	),
)); ?>
