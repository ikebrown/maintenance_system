<div ng-controller="MaterialController">
<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Issue Materials</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
            
       
<div class="form col-lg-7" >
    <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$request,
                    'attributes'=>array(
                            'job_no',
                            'requesterU.first_name',
                            'requesterU.last_name',
                            'requesterU.dept.department',
                            'date_created',
                            'date_needed',
                            'nature',
                            'createstatus'
                    ),
                    'htmlOptions'=>array('class'=>'table table-hover')
            )); ?>
    
    <label>Assigned Personnel</label>
    <?php foreach ($personnel as $row):?>
        <?php echo $row->personnelAssignedU->last_name.', '.$row->personnelAssignedU->first_name;?><br/>
    <?php endforeach;?>
    <br/>
    
        <label>Materials Needed</label>
    <div id="materials_needed">
        
    </div>
        
        
</div><!-- form -->

<div class="col-lg-5">
    <table class="table">
        <tr>
            <td>Material</td>
            <td>Description</td>
            <td>Qty</td>
            <td></td>
        </tr>
        <?php foreach ($materialResult as $row):?>
        <tr>
            <td><?php echo $row->material_name;?></td>
            <td><?php echo $row->material_description;?></td>
            <td><?php echo $row->quantity;?></td>
            <td>
                    <?php echo CHtml::numberField('quantity', '',array('style'=>'width:40px'));?>
                    <button class="btn btn-sm btn-primary" >Add Item</button>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</div>

        </div>
  </div>
</div>
</div>            

     
    
    
</div>