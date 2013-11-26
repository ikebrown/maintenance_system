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
                  <!-- Split button -->
                        <div class="btn-group text-left">
                          <?php echo CHtml::link('Issue Work Order', array('/superadmin/workorder/createworkorder','job_id'=>$request->job_id), array('class'=>'btn btn-primary'))?>
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">On-Hold</a></li>
                            <li><a href="#">Denied</a></li>
                            <li><a href="#">Cancel</a></li>
                          </ul>
                        </div>
        </div>
  </div>
</div>
</div>            

