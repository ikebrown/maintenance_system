<?php
/* @var $this MaterialTypeController */
/* @var $model MaterialType */

$this->breadcrumbs=array(
	'Material Types'=>array('index'),
	$model->type_id=>array('view','id'=>$model->type_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MaterialType', 'url'=>array('index')),
	array('label'=>'Create MaterialType', 'url'=>array('create')),
	array('label'=>'View MaterialType', 'url'=>array('view', 'id'=>$model->type_id)),
	array('label'=>'Manage MaterialType', 'url'=>array('admin')),
);
?>

<h1>Update MaterialType <?php echo $model->type_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>