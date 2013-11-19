<?php
/* @var $this MaterialController */
/* @var $model Material */

$this->breadcrumbs=array(
	'Materials'=>array('index'),
	$model->mat_id=>array('view','id'=>$model->mat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Material', 'url'=>array('index')),
	array('label'=>'Create Material', 'url'=>array('create')),
	array('label'=>'View Material', 'url'=>array('view', 'id'=>$model->mat_id)),
	array('label'=>'Manage Material', 'url'=>array('admin')),
);
?>

<h1>Update Material <?php echo $model->mat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>