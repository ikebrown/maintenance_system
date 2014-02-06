<?php
/* @var $this ActivityController */
/* @var $model Activity */

$this->breadcrumbs=array(
	'Activities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Preventive Maintainance', 'url'=>array('/admin/maintain')),
);
?>

<h1>Create Activity</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>