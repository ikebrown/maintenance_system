<?php
/* @var $this MaintainController */
/* @var $model Maintain */

$this->breadcrumbs=array(
	'Maintains'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Maintain', 'url'=>array('index')),
	array('label'=>'Create Maintain', 'url'=>array('create')),
	array('label'=>'View Maintain', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Maintain', 'url'=>array('admin')),
);
?>

<h1>Update Maintain <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>