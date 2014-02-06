<?php
/* @var $this MaintainController */
/* @var $model Maintain */

$this->breadcrumbs=array(
	'Maintains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Preventive Maintainance', 'url'=>array('index')),
);
?>

<h1>Create Preventive Maintenance</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>