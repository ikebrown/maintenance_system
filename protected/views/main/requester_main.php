<h4>Welcome <?php echo Yii::app()->user->username;?>!</h4>
<div>
    <ul class="shortcut-tools list-unstyled list-inline">
        <li class="well well-sm">
            <a href="jobrequest/createrequest"><i class="fa fa-file-text-o font_larger"></i><br/>Job Order</a>
        </li>
        <li class="well well-sm">
            <a href="dailytrip/createrequest"><i class="fa fa-file-text-o font_larger"></i><br/>&nbsp;Daily Trip</a>
        </li>
    </ul>
</div>

<div>
    <h4>Job Order Request</h4>
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
            <td><?php echo $row->job_no;?></td>
            <td><?php echo $row->date_needed;?></td>
            <td><?php echo $row->date_requested;?></td>
            <td><span class="badge"><?php echo $row->createstatus;?></span></td>
            <td><a href="jobrequest/viewrequest?job_id=<?php echo $row->job_id;?>">View</a></td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

<br/><br/>

<div>
    <h4>Daily Trip Request</h4>
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