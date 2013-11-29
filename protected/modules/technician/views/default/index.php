<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Work Order</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>JO Order No.</th>
                    <th>Requester</th>
                    <th>Department</th>
                    <th>Date Needed</th>
                    <th>Date Requested</th>
                    <th>Nature</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $x = 1;
                if(count($dataProvider->getData()) > 0):
                foreach ($dataProvider->getData() as $row):?>
                <tr>
                    <td><?php echo $x++?></td>
                    <td><?php echo CHtml::link($row['job_no'], array('/technician/workorder/viewrequest', 'job_id'=>$row['job_id']));?></td>
                    <td><?php echo $row['requester'];?></td>
                    <td><?php echo $row['department'];?></td>
                    <td><?php echo $row['date_needed'];?></td>
                    <td><?php echo $row['date_requested'];?></td>
                    <td><?php echo $row['nature'];?></td>
                    <td><span class="badge"><?php echo $row['createstatus'];?></span></td>
                    <td>
                        <!-- Split button -->
                        <div class="btn-group text-left">
                            <?php echo CHtml::link('View Work Order', array('/technician/workorder/viewrequest','job_id'=>$row['job_id']), array('class'=>'btn btn-primary'))?>
                        </div>
                        
                    </td>
                </tr>
                <?php endforeach;
                else:
                ?>
                <tr>
                    <td colspan="9" class="text-center">No Results</td>
                </tr>
                <?php endif;?>

                </tbody>
            </table>

        </div>
  </div>
</div>
</div>            

