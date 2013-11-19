<?php
/* @var $this JobrequestActionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jobrequest Actions',
);

$this->menu=array(
	array('label'=>'Create JobrequestAction', 'url'=>array('create')),
	array('label'=>'Manage JobrequestAction', 'url'=>array('admin')),
);
?>

<h1>Jobrequest Actions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
