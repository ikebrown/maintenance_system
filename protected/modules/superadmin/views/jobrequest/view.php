<?php
/* @var $this JobrequestController */
/* @var $model Jobrequest */

$this->breadcrumbs=array(
	'Jobrequests'=>array('index'),
	$model->job_id,
);

$this->menu=array(
	array('label'=>'List Jobrequest', 'url'=>array('index')),
	array('label'=>'Create Jobrequest', 'url'=>array('create')),
	array('label'=>'Update Jobrequest', 'url'=>array('update', 'id'=>$model->job_id)),
	array('label'=>'Delete Jobrequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->job_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jobrequest', 'url'=>array('admin')),
);
?>

<h1>View Jobrequest #<?php echo $model->job_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'job_id',
		'job_no',
		'requester_uid',
		'date_needed',
		'date_requested',
		'nature',
		'other_specified',
		'createstatus',
	),
)); ?>
