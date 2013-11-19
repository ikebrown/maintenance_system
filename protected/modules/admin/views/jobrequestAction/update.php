<?php
/* @var $this JobrequestActionController */
/* @var $model JobrequestAction */

$this->breadcrumbs=array(
	'Jobrequest Actions'=>array('index'),
	$model->jobact_id=>array('view','id'=>$model->jobact_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobrequestAction', 'url'=>array('index')),
	array('label'=>'Create JobrequestAction', 'url'=>array('create')),
	array('label'=>'View JobrequestAction', 'url'=>array('view', 'id'=>$model->jobact_id)),
	array('label'=>'Manage JobrequestAction', 'url'=>array('admin')),
);
?>

<h1>Update JobrequestAction <?php echo $model->jobact_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>