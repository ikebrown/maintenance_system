<?php
/* @var $this TriprequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Triprequests',
);

$this->menu=array(
	array('label'=>'Create Triprequest', 'url'=>array('create')),
	array('label'=>'Manage Triprequest', 'url'=>array('admin')),
);
?>

<h1>Triprequests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
