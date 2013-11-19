<?php
/* @var $this JobrequestMaterialController */
/* @var $model JobrequestMaterial */

$this->breadcrumbs=array(
	'Jobrequest Materials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobrequestMaterial', 'url'=>array('index')),
	array('label'=>'Manage JobrequestMaterial', 'url'=>array('admin')),
);
?>

<h1>Create JobrequestMaterial</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>