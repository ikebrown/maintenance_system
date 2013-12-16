<?php
/* @var $this MaterialTypeController */
/* @var $model MaterialType */

$this->breadcrumbs=array(
	'Material Types'=>array('index'),
	$model->type_id,
);

$this->menu=array(
	array('label'=>'List MaterialType', 'url'=>array('index')),
	array('label'=>'Create MaterialType', 'url'=>array('create')),
	array('label'=>'Update MaterialType', 'url'=>array('update', 'id'=>$model->type_id)),
	array('label'=>'Delete MaterialType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->type_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MaterialType', 'url'=>array('admin')),
);
?>

<h1>View MaterialType #<?php echo $model->type_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'type_id',
		'mat_type',
	),
)); ?>
