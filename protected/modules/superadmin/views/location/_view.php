<?php
/* @var $this LocationController */
/* @var $data Location */
?>

<div class="view">
    <div class="col-lg-1">
	<?php echo ++$index;?>
    </div>

    <div class="col-lg-11">
	<?php echo CHtml::link(CHtml::encode($data->location), array('view', 'id'=>$data->loc_id)); ?>
    </div>
    <div class="clearfix"></div>
</div>