<div ng-controller="MaintenanceController">
    
        <div  class="col-lg-3">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Personnel In-charge</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive" style="height: 300px">
                <ul class="list-unstyled">
                    <?php foreach ($maintain->teches as $row):?>
                        <?php echo $row->u->first_name.' '.$row->u->last_name;?>
                    <?php endforeach;?>
                    
                    <li ng-repeat="item in items.technician">
                        {{item.last_name}} {{item.first_name}}
                    </li>
                </ul>
            </div>
            </div>
         </div>
        </div>
    
         <div class="col-lg-9">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Select Technician</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive" style="overflow-y: scroll;height: 300px">
                    <ul class="list-unstyled">
                        <li ng-repeat="item in response.data" class="col-lg-3">
                            <label for="uid_{{item.uid}}">
                            <input type="checkbox" id="uid_{{item.uid}}" value="{{item.uid}}" name="uid" ng-model="items.uid[item.uid]" ng-click="showTechnician(item)"/>  
                            {{item.last_name}}, {{item.first_name}}</label>
                        </li>
                    </ul>
                </div>
               </div>
             </div>
        </div> 
    <div class="clearfix"></div>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'workorder-form-workorder_form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>
         <?php echo $form->errorSummary($model); ?>
	<div class="row col-md-6">
                
		<?php echo $form->textField($model,'assigned_personnel_uid', array('class'=>'form-control', 'ng-model'=>'assigned_personnel_uid', 'ng-hide'=>'true')); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

        <div class="clearfix"></div>
	<div class="text-right">
		<?php echo CHtml::submitButton('Assign Personnel', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
