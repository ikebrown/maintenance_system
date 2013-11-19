<?php
/* @var $this TriprequestController */
/* @var $model Triprequest */

$this->breadcrumbs=array(
	'Triprequests'=>array('index'),
	$model->trip_id,
);

$this->menu=array(
	array('label'=>'List Triprequest', 'url'=>array('index')),
	array('label'=>'Create Triprequest', 'url'=>array('create')),
	array('label'=>'Update Triprequest', 'url'=>array('update', 'id'=>$model->trip_id)),
	array('label'=>'Delete Triprequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->trip_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Triprequest', 'url'=>array('admin')),
);
?>

<h1>View Triprequest #<?php echo $model->trip_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'trip_id',
		'requester_id',
		'dateofuse_from',
		'dateofuse_to',
		'request_date',
		'car_id',
		'purpose',
		'et_departure',
		'et_arrival',
		'createstatus',
		'modifiedby',
		'departure_time',
		'departure_guard',
		'arrival_time',
		'arrival_guard',
	),
)); ?>
