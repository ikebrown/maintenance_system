<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Job Order Requests</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
                    
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>JO Order No.</th>
                    <th>Date Needed</th>
                    <th>Date Requested</th>
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
                    <td><?php echo CHtml::link($row->job_no, array('/jobrequest/viewrequest', 'job_id'=>$row->job_id));?></td>
                    <td><?php echo $row->date_needed;?></td>
                    <td><?php echo $row->date_requested;?></td>
                    <td><span class="badge"><?php echo $row->createstatus;?></span></td>
                    <td>
                        <?php echo CHtml::link('Create Work', array('/workorder/createworkorder','job_id'=>$row->job_id))?>
                    </td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>


        </div>
    <div class="text-right">
      <?php echo CHtml::link('View All Pending Request  <i class="fa fa-arrow-circle-right"></i>', array('jobrequest'));?>
    </div>
  </div>
</div>
</div>            

<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Daily Trip Requests</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">



    <table class="table table-striped">
        <thead>
        <tr>
            <th>No.</th>
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
            <td><?php echo $row->dateofuse_from.' '.$row->et_departure;?></td>
            <td><?php echo $row->dateofuse_to.' '.$row->et_arrival;?></td>
            <td><?php echo date('Y-m-d', strtotime($row->request_date));?></td>
            <td><?php echo $row->car->car_model;?></td>
            <td><span class="badge"><?php echo $row->createstatus;?></span></td>
            <td><a href="dailytrip/viewrequest?trip_id=<?php echo $row->trip_id;?>">View</a></td>
        </tr>
        </tbody>
        <?php endforeach;?>
    </table>

   
        </div>
    <div class="text-right">
      <?php echo CHtml::link('View All Pending Request  <i class="fa fa-arrow-circle-right"></i>', array('dailytrip'));?>
    </div>
  </div>
</div>
</div>        
