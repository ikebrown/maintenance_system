<?php
/* @var $this CarController */
/* @var $data Car */
?>

<div class="view well well-sm">
    <div class="col-lg-1">
	<?php echo ++$index;?>
    </div>

    <div class="col-lg-5">
        <?php echo CHtml::link(CHtml::encode($data->car_model), array('view', 'id'=>$data->car_id)); ?>
    </div>
    <div class="col-lg-6">
	<?php echo CHtml::encode($data->plate_no); ?>   
    </div>
    
    <div class="clearfix"></div>
</div>