<div ng-controller="MaterialController">
<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Issue Materials</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
            
       
<div class="form col-lg-6" >
    <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$request,
                    'attributes'=>array(
                            'job_no',
                            'requesterU.first_name',
                            'requesterU.last_name',
                            'requesterU.dept.department',
                            'date_requested',
                            //'date_needed',
                            'reason',
                            'materials_needed',
                            'nature',
                            'createstatus'
                    ),
                    'htmlOptions'=>array('class'=>'table table-hover')
            )); ?>
    
    
    <table class="table">
        <tr>
            <th colspan="2">Job Actions</th>    
        </tr>
    <?php $x = 1;
    foreach ($actions as $row):?>
        <tr>
            <td><?php echo $x++;?></td>
            <td><?php echo $row->action;?></td>
            <td id="jobstatus_<?php echo $row->jobact_id?>">
                <?php //if($row->act_id <= 2):?>
                    <?php if($row->createstatus == 'COMPLETED'):?>
                    <small><a href="#" class="badge" ng-click="markActionPending(<?php echo $row->jobact_id?>)">Completed</a><small>
                    <?php else:?>
                    <small><a href="#" ng-click="markActionDone(<?php echo $row->jobact_id?>)">Mark as Done</a></small>
                    <?php endif;?>
                <?php //endif;?>
            </td>
        </tr>
    <?php endforeach;?>
    </table>
    
    <table>
        <tr>
        <th>Assigned Personnel</th>    
        </tr>
    <?php foreach ($personnel as $row):?>
        <tr>
            <td><?php echo $row->personnelAssignedU->last_name.', '.$row->personnelAssignedU->first_name;?></td>
        </tr>
    <?php endforeach;?>
    </table>
</div><!-- form -->
<div class="col-lg-3">
    <div class="panel panel-default">
    <div class="panel-heading">Materials Needed</div>
    <div class="panel-body" style="overflow-y: auto;height: 550px;" id="materials_needed">
        
        <?php if(count($jobMaterial) > 0):
            foreach ($jobMaterial as $row):?>
            <div class="list-group-item">
              <h4 class="list-group-item-heading"><?php echo $row->mat->material_name;?></h4>
              <p>Quantity: <?php echo $row->quantity;?></p>
            </div>
            <?php endforeach;
            endif;?>
        
    </div>
    
        <?php if(count($jobMaterial) == 0):?>
        <div class="text-center">
            <button class="btn btn-primary btn-large" ng-click="saveWorkOrder()">Save Issued Materials</button>
        </div><br/>
        <?php endif;?>
        <div class="text-center">
        <?php echo CHtml::link('Send Message', array('/messages/sendmessage', 'to'=>$request->requester_uid, 'job_id'=>$request->job_id), array('class'=>'btn btn-primary'))?>
            </div><br/>
    </div>
</div>

<div class="col-lg-3">

<?php if(count($jobMaterial) == 0):?>
    <div class="panel panel-default">
    <div class="panel-heading">Materials</div>
    <div class="panel-body" style="overflow-y: auto;height: 600px;">
        <div class="list-group">
            <?php foreach ($materialResult as $row):?>
            <div class="list-group-item">
              <h4 class="list-group-item-heading"><?php echo $row->material_name;?></h4>
              <small class="list-group-item-text"><?php echo $row->material_description;?><br/>
                  On-stock Quantity: <?php echo $row->quantity;?><br/><br/>
                  <div class="input-group">
                  <?php echo CHtml::numberField('material_'.$row->mat_id, 0, array('class'=>'form-control input-sm','ng-change'=>'checkValue('.$row->mat_id.','.$row->quantity.')','ng-model'=>'material_'.$row->mat_id));?>
                  <span class="input-group-btn">
                      <button class="btn btn-default btn-sm" type="button" ng-click="addItem(<?php echo $row->mat_id;?>, <?php echo $job_id;?>)">Add</button>
                  </span>
                  </div>
              </small>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<?php endif;?>    
</div>

    </div>
  </div>
</div>
</div>            

    
</div>