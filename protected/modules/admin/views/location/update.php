<?php
/* @var $this LocationController */
/* @var $model Location */

$this->breadcrumbs=array(
	'Locations'=>array('index'),
	$model->loc_id=>array('view','id'=>$model->loc_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Location', 'url'=>array('index')),
	array('label'=>'Create Location', 'url'=>array('create')),
	array('label'=>'View Location', 'url'=>array('view', 'id'=>$model->loc_id)),
	array('label'=>'Manage Location', 'url'=>array('admin')),
);
?>

<h1>Update Location <?php echo $model->loc_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>