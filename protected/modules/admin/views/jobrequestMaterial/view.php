<?php
/* @var $this JobrequestMaterialController */
/* @var $model JobrequestMaterial */

$this->breadcrumbs=array(
	'Jobrequest Materials'=>array('index'),
	$model->jobmat_id,
);

$this->menu=array(
	array('label'=>'List JobrequestMaterial', 'url'=>array('index')),
	array('label'=>'Create JobrequestMaterial', 'url'=>array('create')),
	array('label'=>'Update JobrequestMaterial', 'url'=>array('update', 'id'=>$model->jobmat_id)),
	array('label'=>'Delete JobrequestMaterial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jobmat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobrequestMaterial', 'url'=>array('admin')),
);
?>

<h1>View JobrequestMaterial #<?php echo $model->jobmat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jobmat_id',
		'mat_id',
		'job_id',
		'quantity',
		'createdby',
	),
)); ?>
