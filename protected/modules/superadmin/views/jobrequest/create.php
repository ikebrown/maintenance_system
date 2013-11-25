<?php
/* @var $this JobrequestController */
/* @var $model Jobrequest */

$this->breadcrumbs=array(
	'Jobrequests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jobrequest', 'url'=>array('index')),
	array('label'=>'Manage Jobrequest', 'url'=>array('admin')),
);
?>

<h1>Create Jobrequest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>