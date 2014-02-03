<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Job Request - <?php echo $nature;?></h3>
      </div>
      <div class="panel-body">
          <div class="table-responsive" ng-controller="JobrequestController">



            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>JO Order No.</th>
                    <th>Requester</th>
<!--                    <th>Date Needed</th>-->
                    <th>Date Requested</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $x = 1;
                if(count($request) > 0):
                foreach ($request as $row):?>
                <tr>
                    <td><?php echo $x++?></td>
                    <td><?php echo CHtml::link($row->job_no, array('/admin/jobrequest/viewrequest', 'job_id'=>$row->job_id));?></td>
                    <td><?php echo $row->requesterU->first_name. ' '.$row->requesterU->last_name;?></td>
<!--                    <td><?php echo $row->date_needed;?></td>-->
                    <td><?php echo $row->date_requested;?></td>
                    <td><span class="badge"><?php echo $row->createstatus;?></span></td>
                    <td>
                        <!-- Split button -->
                        <div class="btn-group text-left">
                          <?php echo CHtml::link('Issue Work Order', array('/admin/workorder/createworkorder','job_id'=>$row->job_id), array('class'=>'btn btn-primary'))?>
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><?php echo CHtml::link('On-Hold', array('/admin/jobrequest/deniedhold','job_id'=>$row->job_id, 'status'=>'On-Hold'), array('class'=>''))?></li>
                            <li><?php echo CHtml::link('Denied', array('/admin/jobrequest/deniedhold','job_id'=>$row->job_id, 'status'=>'Denied'), array('class'=>''))?></li>
                          </ul>
                        </div>
                        
                    </td>
                </tr>
                <?php endforeach;
                else:
                ?>
                <tr>
                    <td colspan="7" class="text-center">No Results</td>
                </tr>
                <?php endif;?>

                </tbody>
            </table>

            
            
        </div>
  </div>
</div>
</div>            