<?php
/* @var $this TriprequestController */
/* @var $model Triprequest */

$this->breadcrumbs=array(
	'Triprequests'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Triprequest', 'url'=>array('index')),
	array('label'=>'Create Triprequest', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#triprequest-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Triprequests</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'triprequest-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'trip_id',
		'requester_id',
		'dateofuse_from',
		'dateofuse_to',
		'request_date',
		'car_id',
		/*
		'purpose',
		'et_departure',
		'et_arrival',
		'createstatus',
		'modifiedby',
		'departure_time',
		'departure_guard',
		'arrival_time',
		'arrival_guard',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
