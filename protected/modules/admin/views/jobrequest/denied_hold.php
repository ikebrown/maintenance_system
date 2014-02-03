<div class="col-lg-9">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Job Order - <?php echo $request->job_no;?></h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
            
            <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'attributes'=>array(
                            'job_no',
                            'name',
                            'department',
                            'date_created',
                            'date_needed',
                            'nature_of_job',
                            'reason',
                            'materials_needed',
                            'createstatus'
                    ),
                    'htmlOptions'=>array('class'=>'table table-hover')
            )); ?>

        </div>
    
        <div>
            <form action="?status=<?php echo $_GET['status'].'&job_id='.$_GET['job_id'];?>" method="POST">
                <label>Reason to <?php echo $_GET['status'];?></label><br/>
                <textarea name="status_reason" class="form-control" cols="20"></textarea><br/>
                <input type="hidden" name="status" value="<?php echo $_GET['status'];?>"/>
                <?php echo CHtml::submitButton($_GET['status'], array('class'=>'btn btn-lg btn-primary')); ?>
            </form>
        </div>   
          
  </div>
</div>
</div>            

