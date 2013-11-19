<?php
/* @var $this JobrequestActionController */
/* @var $model JobrequestAction */

$this->breadcrumbs=array(
	'Jobrequest Actions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobrequestAction', 'url'=>array('index')),
	array('label'=>'Manage JobrequestAction', 'url'=>array('admin')),
);
?>

<h1>Create JobrequestAction</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>