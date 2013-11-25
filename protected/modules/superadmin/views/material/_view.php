<?php
/* @var $this MaterialController */
/* @var $data Material */
?>

<div class="view well well-sm">
    <div class="col-lg-1">
	<?php echo ++$index;?>
    </div>

    <div class="col-lg-3">
	<?php echo CHtml::link(CHtml::encode($data->material_name), array('view', 'id'=>$data->mat_id)); ?>
    </div>
    
    <div class="col-lg-2">
	<?php echo CHtml::encode($data->material_description); ?>
    </div>
    
    <div class="col-lg-2">
	Qty: <?php echo CHtml::encode($data->quantity); ?>
    </div>
    
    <div class="col-lg-2">
	<?php echo CHtml::encode($data->type->mat_type); ?>
    </div>
    
    <div class="col-lg-2">
	<?php echo CHtml::encode($data->location->location); ?>
    </div>
    <div class="clearfix"></div>
</div>