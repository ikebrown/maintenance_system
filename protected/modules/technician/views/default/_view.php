<div class="view well well-sm">
    <div class="col-lg-1">
	<?php echo ++$index;?>
    </div>
    <div class="col-lg-11">
        <?php echo CHtml::link(CHtml::encode($data->job_no), array('view', 'id'=>$data->job_id)); ?>
	<br />
    </div>
    <div class="clearfix"></div>

</div>