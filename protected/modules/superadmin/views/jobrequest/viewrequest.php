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
                            'createstatus'
                    ),
                    'htmlOptions'=>array('class'=>'table table-hover')
            )); ?>

        </div>
    
        <div class="text-right">
                  <?php echo CHtml::link('Create Work', array('/admin/workorder/createworkorder','job_id'=>$request->job_id), array('class'=>'btn btn-lg btn-primary')); ?>
        </div>
  </div>
</div>
</div>            

