<div>
    
    
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
            <td><a href="jobrequest/viewrequest?job_id=<?php echo $row->job_id;?>"><i class="fa fa-eye"></i></a></td>
        </tr>
        </tbody>
        <?php endforeach;?>
    </table>
</div>