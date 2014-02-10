<?php
/* @var $this MaintainController */
/* @var $model Maintain */

$this->breadcrumbs=array(
	'Maintains'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Maintain', 'url'=>array('index')),
	array('label'=>'Create Maintain', 'url'=>array('create')),
        array('label'=>'Add Activity', 'url'=>array('/admin/activity/create', 'mid'=>$model->id)),
        array('label'=>'Assign Personnel', 'url'=>array('/admin/maintain/assignpersonnel', 'mid'=>$model->id)),
	array('label'=>'Update Maintain', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Maintain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Maintain #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'maintain_year',
		'createdate',
	),
)); ?>


<br/><br/>
<h3>Activities</h3>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_activities_view',
)); ?>
