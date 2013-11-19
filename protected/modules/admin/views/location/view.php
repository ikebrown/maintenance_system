<?php
/* @var $this LocationController */
/* @var $model Location */

$this->breadcrumbs=array(
	'Locations'=>array('index'),
	$model->loc_id,
);

$this->menu=array(
	array('label'=>'List Location', 'url'=>array('index')),
	array('label'=>'Create Location', 'url'=>array('create')),
	array('label'=>'Update Location', 'url'=>array('update', 'id'=>$model->loc_id)),
	array('label'=>'Delete Location', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->loc_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Location', 'url'=>array('admin')),
);
?>

<h1>View Location #<?php echo $model->loc_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'loc_id',
		'location',
	),
)); ?>
