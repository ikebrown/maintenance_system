<?php
/* @var $this ActivityController */
/* @var $data Activity */
?>

<table class="table">
    <tr>
        <td>
	<?php echo CHtml::encode($data->activity); ?>
        </td>
        <td>
        <?php echo CHtml::link('<i class="fa fa-edit"></i>', array('/admin/activity/update', 'id'=>$data->id), array('class'=>'pull-right')); ?>
        </td>
   </tr>     

</table>