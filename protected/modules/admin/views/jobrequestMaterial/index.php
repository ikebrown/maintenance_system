<?php
/* @var $this JobrequestMaterialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jobrequest Materials',
);

$this->menu=array(
	array('label'=>'Create JobrequestMaterial', 'url'=>array('create')),
	array('label'=>'Manage JobrequestMaterial', 'url'=>array('admin')),
);
?>

<h1>Jobrequest Materials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
