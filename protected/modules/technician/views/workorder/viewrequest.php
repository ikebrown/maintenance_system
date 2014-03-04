<div ng-controller="MaterialController">
<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Checklist</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
            
       
<div class="form col-lg-9" >
    <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$request,
                    'attributes'=>array(
                            'job_no',
                            'requesterU.first_name',
                            'requesterU.last_name',
                            'requesterU.dept.department',
                            'date_requested',
                            'date_needed',
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
                <?php if($row->act_id <= 20):?>
                    <?php if($row->createstatus == 'PENDING'):?>
                        <small><a href="#" ng-click="markActionDone(<?php echo $row->jobact_id?>)">Mark as Done</a><small>
                    <?php elseif($row->createstatus == 'COMPLETED'):?>
                        <small><a href="#" class="badge">Completed</a><small>
                    <?php endif;?>
                <?php else:?>            
                    <?php if($row->createstatus == 'COMPLETED'):?>
                        <small><a href="#" class="badge">Completed</a><small>
                    <?php endif;?>
                <?php endif;?>
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
    <div class="panel-heading">Job Order Details</div>
    <div class="panel-body" style="overflow-y: auto;height: 550px;" id="materials_needed">
        <div>
            <?php echo nl2br($request->materials_needed)?>
        </div>
        
        
        <?php if(count($jobMaterial) > 0):
            foreach ($jobMaterial as $row):?>
            <div class="list-group-item">
              <h4 class="list-group-item-heading"><?php echo $row->mat->material_name;?></h4>
              <p>Quantity: <?php echo $row->quantity;?></p>
            </div>
            <?php endforeach;
            endif;?>
        
    </div>

    </div>
</div>

    </div>
  </div>
</div>
</div>            

    
</div>