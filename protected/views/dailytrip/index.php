<div>
    
    <?php echo CHtml::link('Create Request', 'dailytrip/createrequest', array('class'=>'btn btn-primary'))?><br/><br/>
    
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
        if(count($dailytrip) > 0):
        foreach ($dailytrip as $row):?>
        <tr>
            <td><?php echo $x++?></td>
            <td><?php echo $row->dateofuse_from.' '.$row->et_departure;?></td>
            <td><?php echo $row->dateofuse_to.' '.$row->et_arrival;?></td>
            <td><?php echo date('Y-m-d', strtotime($row->request_date));?></td>
            <td><?php echo $row->car->car_model;?></td>
            <td><span class="badge"><?php echo $row->createstatus;?></span></td>
            <td><a href="dailytrip/viewrequest?trip_id=<?php echo $row->trip_id;?>"><i class="fa fa-eye"></i></a></td>
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