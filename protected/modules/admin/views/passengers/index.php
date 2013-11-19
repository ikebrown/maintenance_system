<?php
/* @var $this PassengersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Passengers',
);

$this->menu=array(
	array('label'=>'Create Passengers', 'url'=>array('create')),
	array('label'=>'Manage Passengers', 'url'=>array('admin')),
);
?>

<h1>Passengers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
