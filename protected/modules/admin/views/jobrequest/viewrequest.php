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
                            'createstatus',
                            'status_reason'
                    ),
                    'htmlOptions'=>array('class'=>'table table-hover')
            )); ?>

        </div>
    
          
          
          
        <?php if(!in_array($model->createstatus, array('Denied', 'Issued'))):?>  
        <div class="text-right">
                  <!-- Split button -->
                        <div class="btn-group text-left">
                          <?php echo CHtml::link('Issue Work Order', array('/admin/workorder/createworkorder','job_id'=>$request->job_id), array('class'=>'btn btn-primary'))?>
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><?php echo CHtml::link('On-Hold', array('/admin/jobrequest/deniedhold','job_id'=>$request->job_id, 'status'=>'On-Hold'), array('class'=>''))?></li>
                            <li><?php echo CHtml::link('Denied', array('/admin/jobrequest/deniedhold','job_id'=>$request->job_id, 'status'=>'Denied'), array('class'=>''))?></li>
                          </ul>
                        </div>
        </div>
        <?php endif;?>
  </div>
</div>
</div>            

