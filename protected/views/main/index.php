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
        <?php endforeach;?>
        </tbody>
    </table>
</div>