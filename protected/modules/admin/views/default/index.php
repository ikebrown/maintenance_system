<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Job Order Requests</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive" ng-controller="JobrequestController">
                    
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Requester</th>
                    <th>JO Order No.</th>
<!--                    <th>Date Needed</th>-->
                    <th>Date Requested</th>
                    <th>Nature</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $x = 1;
                foreach ($request as $row):?>
                <tr>
                    <td><?php echo $x++?></td>
                    <td><?php echo $row->requesterU->first_name. ' '.$row->requesterU->last_name;?></td>
                    <td><?php echo CHtml::link($row->job_no, array('/admin/jobrequest/viewrequest', 'job_id'=>$row->job_id));?></td>
<!--                    <td><?php echo $row->date_needed;?></td>-->
                    <td><?php echo $row->date_requested;?></td>
                    <td><?php echo $row->nature;?></td>
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
                            <li><a href="#" ng-click="updateJobrequest('<?php echo $row->job_id?>','On-Hold')">On-Hold</a></li>
                            <li><a href="#" ng-click="updateJobrequest('<?php echo $row->job_id?>','Denied')">Denied</a></li>
                          </ul>
                        </div>
                    </td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>


        </div>
        <div class="text-right">
            <?php echo CHtml::link('View All Pending Request  <i class="fa fa-arrow-circle-right"></i>', array('/admin/jobrequest/index','status'=>'Pending'));?>
        </div>
  </div>
</div>
</div>            

<?php /* ?>
<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Daily Trip Requests</h3>
      </div>
      <div class="panel-body">
    <div class="table-responsive" ng-controller="TriprequestController">



    <table class="table table-striped">
        <thead>
        <tr>
            <th>No.</th>
            <th>Requester</th>
            <th>Date of Use From</th>
            <th>Date of Use To</th>
            <th>Date Requested</th>
            <th>Car</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $x = 1;
        foreach ($dailytrip as $row):?>
        <tr>
            <td><?php echo $x++?></td>
            <td><?php echo $row->requesterU->first_name. ' '.$row->requesterU->last_name;?></td>
            <td><?php echo $row->dateofuse_from.' '.$row->et_departure;?></td>
            <td><?php echo $row->dateofuse_to.' '.$row->et_arrival;?></td>
            <td><?php echo date('Y-m-d', strtotime($row->request_date));?></td>
            <td><?php echo $row->car->car_model;?></td>
            <td><span class="badge"><?php echo $row->createstatus;?></span></td>
            <td>
                <!-- Split button -->
                <div class="btn-group text-left">
                  <?php echo CHtml::link('View Request', array('/admin/dailytrip/viewrequest','trip_id'=>$row->trip_id), array('class'=>'btn btn-primary'))?>
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#" ng-click="updateTriprequest('<?php echo $row->trip_id?>','Approved')">Approve</a></li>
                    <li><a href="#" ng-click="updateTriprequest('<?php echo $row->trip_id?>','Denied')">Denied</a></li>
                  </ul>
                </div>
                
            </td>
        </tr>
        </tbody>
        <?php endforeach;?>
    </table>

   
        </div>
    <div class="text-right">
      <?php echo CHtml::link('View All Pending Request  <i class="fa fa-arrow-circle-right"></i>', array('/admin/dailytrip/index','status'=>'Pending'));?>
    </div>
  </div>
</div>
</div>        
<?php */ ?>