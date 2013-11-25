<?php
/* @var $this JobrequestController */
/* @var $model Jobrequest */

$this->breadcrumbs=array(
	'Jobrequests'=>array('index'),
	$model->job_id=>array('view','id'=>$model->job_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jobrequest', 'url'=>array('index')),
	array('label'=>'Create Jobrequest', 'url'=>array('create')),
	array('label'=>'View Jobrequest', 'url'=>array('view', 'id'=>$model->job_id)),
	array('label'=>'Manage Jobrequest', 'url'=>array('admin')),
);
?>

<h1>Update Jobrequest <?php echo $model->job_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>