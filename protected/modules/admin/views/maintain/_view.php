<?php
/* @var $this MaintainController */
/* @var $data Maintain */
?>

<table  class="table">
    <tr>
        <td class="col-sm-8">
            <?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?>
        </td>
        <td class="col-sm-2">
	<?php echo CHtml::encode($data->maintain_year); ?>
	</td>
        <td class="col-sm-2">
	<?php echo CHtml::encode($data->createdate); ?>
        </td>
    </tr>
</table>