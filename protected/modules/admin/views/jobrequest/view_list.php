<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Job Request - <?php echo $nature;?></h3>
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
                if(count($request) > 0):
                foreach ($request as $row):?>
                <tr>
                    <td><?php echo $x++?></td>
                    <td><?php echo CHtml::link($row->job_no, array('/admin/jobrequest/viewrequest', 'job_id'=>$row->job_id));?></td>
                    <td><?php echo $row->date_needed;?></td>
                    <td><?php echo $row->date_requested;?></td>
                    <td><span class="badge"><?php echo $row->createstatus;?></span></td>
                    <td><?php echo CHtml::link('Create Work', array('/admin/workorder/createworkorder','job_id'=>$row->job_id))?></td>
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
  </div>
</div>
</div>            