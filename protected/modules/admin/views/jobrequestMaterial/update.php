<?php
/* @var $this JobrequestMaterialController */
/* @var $model JobrequestMaterial */

$this->breadcrumbs=array(
	'Jobrequest Materials'=>array('index'),
	$model->jobmat_id=>array('view','id'=>$model->jobmat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobrequestMaterial', 'url'=>array('index')),
	array('label'=>'Create JobrequestMaterial', 'url'=>array('create')),
	array('label'=>'View JobrequestMaterial', 'url'=>array('view', 'id'=>$model->jobmat_id)),
	array('label'=>'Manage JobrequestMaterial', 'url'=>array('admin')),
);
?>

<h1>Update JobrequestMaterial <?php echo $model->jobmat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>