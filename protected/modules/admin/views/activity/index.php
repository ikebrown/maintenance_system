<?php
/* @var $this ActivityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
        'Preventive Maintainance',
	'Activities ',
);

$this->menu=array(
	array('label'=>'Create Activity', 'url'=>array('create')),
);
?>

<h1><?php echo $model->title;?> Activities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
