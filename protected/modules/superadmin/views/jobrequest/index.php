<?php
/* @var $this JobrequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jobrequests',
);

$this->menu=array(
	array('label'=>'Create Jobrequest', 'url'=>array('create')),
	array('label'=>'Manage Jobrequest', 'url'=>array('admin')),
);
?>

<h1>Jobrequests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
