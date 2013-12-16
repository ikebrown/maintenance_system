<?php
/* @var $this MaterialTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Material Types',
);

$this->menu=array(
	array('label'=>'Create MaterialType', 'url'=>array('create')),
	array('label'=>'Manage MaterialType', 'url'=>array('admin')),
);
?>

<h1>Material Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
