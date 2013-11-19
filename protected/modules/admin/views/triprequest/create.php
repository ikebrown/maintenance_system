<?php
/* @var $this TriprequestController */
/* @var $model Triprequest */

$this->breadcrumbs=array(
	'Triprequests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Triprequest', 'url'=>array('index')),
	array('label'=>'Manage Triprequest', 'url'=>array('admin')),
);
?>

<h1>Create Triprequest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>