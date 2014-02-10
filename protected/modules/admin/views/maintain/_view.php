<?php
/* @var $this MaintainController */
/* @var $data Maintain */
?>

<table  class="table">
    <tr>
        <td class="col-sm-5">
            <?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?>
        </td>
        <td class="col-sm-2">
	<?php echo CHtml::encode($data->maintain_year); ?>
	</td>
        <td class="col-sm-2">
	<?php echo CHtml::encode($data->createdate); ?>
        </td>
        <td class="col-sm-2">
            
            <?php foreach($data->teches as $tech):?>
                <?php echo $tech->u->first_name.' '.$tech->u->last_name;?>
                <?php echo CHtml::link("<i class='fa fa-envelope'></i>", array('/messages/sendmessage', 'to'=>$tech->u->uid), array('title'=>'Send Message'))?>
            <?php endforeach;?>
        </td>
        <td class="col-sm-3">
            <?php echo CHtml::link(CHtml::encode('View Checklist'), array('checklist', 'id'=>$data->id)); ?>
        </td>
    </tr>
</table>