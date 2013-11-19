<?php
/* @var $this JobrequestActionController */
/* @var $model JobrequestAction */

$this->breadcrumbs=array(
	'Jobrequest Actions'=>array('index'),
	$model->jobact_id,
);

$this->menu=array(
	array('label'=>'List JobrequestAction', 'url'=>array('index')),
	array('label'=>'Create JobrequestAction', 'url'=>array('create')),
	array('label'=>'Update JobrequestAction', 'url'=>array('update', 'id'=>$model->jobact_id)),
	array('label'=>'Delete JobrequestAction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jobact_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobrequestAction', 'url'=>array('admin')),
);
?>

<h1>View JobrequestAction #<?php echo $model->jobact_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jobact_id',
		'job_id',
		'act_id',
		'createdate',
	),
)); ?>
