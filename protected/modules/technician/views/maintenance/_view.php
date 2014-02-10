<?php
/* @var $this MaintainController */
/* @var $data Maintain */
?>

<table  class="table">
    <tr>
        <td class="col-sm-5">
            <?php echo CHtml::link(CHtml::encode($data->m->title), array('checklist', 'id'=>$data->mid)); ?>
        </td>
        <td class="col-sm-2">
	<?php echo CHtml::encode($data->m->maintain_year); ?>
	</td>
        <td class="col-sm-2">
	<?php echo CHtml::encode($data->m->createdate); ?>
        </td>
        <td class="col-sm-3">
            <?php echo CHtml::link(CHtml::encode('View Checklist'), array('checklist', 'id'=>$data->id)); ?>
        </td>
    </tr>
</table>