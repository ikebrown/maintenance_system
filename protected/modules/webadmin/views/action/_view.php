<?php
/* @var $this ActionController */
/* @var $data Action */
?>

<div class="view well well-sm">
    <div class="col-lg-1">
	<?php echo ++$index;?>
    </div>
    <div class="col-lg-11">
        <?php echo CHtml::link(CHtml::encode($data->action), array('view', 'id'=>$data->act_id)); ?>
	<br />
    </div>
    <div class="clearfix"></div>

</div>