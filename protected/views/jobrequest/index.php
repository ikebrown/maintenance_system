<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i>&nbsp;My Job Order Requests</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
                    
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No.</th>
            <th>JO Order No.</th>
<!--            <th>Date Needed</th>-->
            <th>Date Requested</th>
            <th>Nature</th>
            <th>Room</th>
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
            <td><?php echo $row->job_no;?></td>
<!--            <td><?php //echo $row->date_needed;?></td>-->
            <td><?php echo $row->date_requested;?></td>
            <td><?php echo $row->nature;?></td>
            <td><?php echo $row->room;?></td>
            <td><span class="badge"><?php echo $row->createstatus;?></span></td>
            <td><a href="<?php echo Yii::app()->getBaseUrl(1)?>/jobrequest/viewrequest?job_id=<?php echo $row->job_id;?>">View</a></td>
        </tr>
        <?php endforeach;
        else:
        ?>
        <tr>
            <td colspan="6" class="text-center">No Results</td>
        </tr>
        <?php endif;?>
        
        </tbody>
    </table>

        </div>
    <div class="text-right">
      <?php echo CHtml::link('Create Request', 'jobrequest/createrequest', array('class'=>'btn btn-primary'))?><br/><br/>
    </div>
  </div>
</div>
</div>    

