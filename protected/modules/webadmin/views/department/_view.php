<?php
/* @var $this DepartmentController */
/* @var $data Department */
?>

<div class="view well well-sm">
    <div class="col-lg-1">
	<?php echo ++$index;?>
    </div>    
    <div class="col-lg-5">
        <?php echo CHtml::link(CHtml::encode($data->department), array('view', 'id'=>$data->dept_id)); ?>
    </div>
    <div class="col-lg-6">
	<?php echo CHtml::encode($data->description); ?>
    </div>
    <div class="clearfix"></div>
</div>