<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->uid,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->uid)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->uid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->uid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'uid',
		'username',
		'first_name',
		'last_name',
		'mobile_no',
		'email',
		'createdate',
		array(
                    'name'=>'User Tyoe',
                    'type'=>'text',
                    'value'=>$model->usertype->utype
                ),
		array(
                    'name'=>'Department',
                    'type'=>'text',
                    'value'=>$model->dept->department
                ),
	),
)); ?>
