
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <b>Similar Request found </b><br/>
    Requester: <?php echo $request->requesterU->first_name.' '.$request->requesterU->last_name;?><br/>
    Nature: <?php echo $request->nature;?><br/>
    Reason: <?php echo $request->reason;?><br/>
    Room: <?php echo $request->room;?><br/><br/>
    
    <?php echo CHtml::link('Create New Request',Yii::app()->getBaseUrl(1).'/jobrequest/createrequest');?>
</div>