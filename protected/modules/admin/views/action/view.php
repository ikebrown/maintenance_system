<?php
/* @var $this ActionController */
/* @var $model Action */

$this->breadcrumbs=array(
	'Actions'=>array('index'),
	$model->act_id,
);

$this->menu=array(
	array('label'=>'List Action', 'url'=>array('index')),
	array('label'=>'Create Action', 'url'=>array('create')),
	array('label'=>'Update Action', 'url'=>array('update', 'id'=>$model->act_id)),
	array('label'=>'Delete Action', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->act_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Action', 'url'=>array('admin')),
);
?>

<h1>View Action #<?php echo $model->act_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'act_id',
		'action',
	),
)); ?>
