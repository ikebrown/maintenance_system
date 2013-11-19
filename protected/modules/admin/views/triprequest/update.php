<?php
/* @var $this TriprequestController */
/* @var $model Triprequest */

$this->breadcrumbs=array(
	'Triprequests'=>array('index'),
	$model->trip_id=>array('view','id'=>$model->trip_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Triprequest', 'url'=>array('index')),
	array('label'=>'Create Triprequest', 'url'=>array('create')),
	array('label'=>'View Triprequest', 'url'=>array('view', 'id'=>$model->trip_id)),
	array('label'=>'Manage Triprequest', 'url'=>array('admin')),
);
?>

<h1>Update Triprequest <?php echo $model->trip_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>