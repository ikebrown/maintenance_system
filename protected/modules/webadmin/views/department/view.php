<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	$model->dept_id,
);

$this->menu=array(
	array('label'=>'List Department', 'url'=>array('index')),
	array('label'=>'Create Department', 'url'=>array('create')),
	array('label'=>'Update Department', 'url'=>array('update', 'id'=>$model->dept_id)),
	array('label'=>'Delete Department', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dept_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Department', 'url'=>array('admin')),
);
?>

<h1>View Department #<?php echo $model->dept_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dept_id',
		'department',
		'description',
	),
)); ?>
