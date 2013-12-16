<?php
/* @var $this CarController */
/* @var $data Car */
?>

<div class="view col-lg-12">
    <div class="<?php echo (($data->is_read)?'well well-sm':'alert alert-info')?>">
        <?php $user = User::model()->findByPk($data->sender_uid);?>
        <?php $to = User::model()->findByPk($data->receipient_uid);?>
        <span class="pull-right"><i><?php echo $data->createdate;?></i> </span>
        <b>To:</b> <?php echo $to->first_name . ' '.$to->last_name;?><br/>
        <b>From:</b> <?php echo $user->first_name . ' '.$user->last_name;?><br/><br/>
        
        <p><b>Message:</b> <?php echo CHtml::encode($data->message); ?></p><br/>
        <?php if($data->sender_uid != Yii::app()->user->id):?>
        <?php echo CHtml::link('Reply', array('/messages/sendmessage', 'to'=>$data->sender_uid, 'job_id'=>''), array('class'=>'btn btn-default btn-xs'))?>
        <?php endif;?>
        <?php echo ((!$data->is_read)?CHtml::link('Mark as read', array('readmessage', 'id'=>$data->id), array('class'=>'btn btn-default btn-xs')):'')?>
        
    </div>
    
    <div class="clearfix"></div>
</div>