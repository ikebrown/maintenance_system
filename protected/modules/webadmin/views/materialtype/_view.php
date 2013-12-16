<?php
/* @var $this MaterialTypeController */
/* @var $data MaterialType */
?>

<div class="view well well-sm">
    <div class="col-lg-1">
	<?php echo ++$index;?>
    </div>

    <div class="col-lg-3">
	<?php echo CHtml::link(CHtml::encode($data->mat_type), array('view', 'id'=>$data->type_id)); ?>
    </div>
    <div class="clearfix"></div>

</div>