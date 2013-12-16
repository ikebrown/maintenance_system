<?php
/* @var $this MaterialController */
/* @var $model Material */

$this->breadcrumbs=array(
	'Materials'=>array('index'),
	$model->mat_id,
);

$this->menu=array(
	array('label'=>'List Material', 'url'=>array('index')),
	array('label'=>'Create Material', 'url'=>array('create')),
	array('label'=>'Update Material', 'url'=>array('update', 'id'=>$model->mat_id)),
	array('label'=>'Delete Material', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Material', 'url'=>array('admin')),
);
?>

<h1>View Material #<?php echo $model->mat_id; ?></h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mat_id',
		'material_name',
		'material_description',
		'quantity',
		'type_id',
		'location_id',
	),
)); ?>
