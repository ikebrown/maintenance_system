<div class="col-lg-9" ng-controller="TriprequestController">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Daily Trip Request</h3>
      </div>
      <div class="panel-body">
      <div class="table-responsive">
            <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$request,
                    'attributes'=>array(
                            'requesterU.first_name',
                            'requesterU.last_name',
                            'requesterU.dept.department',
                            'dateofuse_from',
                            'dateofuse_to',
                            'et_departure',
                            'et_arrival',
                            'car.car_model',
                            'car.plate_no',
                            'purpose',
                            'createstatus'
                    ),
                    'htmlOptions'=>array('class'=>'table table-hover')
            )); ?>

        </div>
      
        <div class="text-right">
            <?php if($request->createstatus == 'Pending'):?>
                  <!-- Split button -->
                <div class="btn-group text-left">
                    <button type="button" class="btn btn-primary">Action</button>
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#" ng-click="updateTriprequest('<?php echo $request->trip_id?>','Approved')" >Approve</a></li>
                    <li><a href="#" ng-click="updateTriprequest('<?php echo $request->trip_id?>','Denied')">Denied</a></li>
                    <li><a href="#" ng-click="updateTriprequest('<?php echo $request->trip_id?>','Canceled')">Cancel</a></li>
                  </ul>
                </div>
            <?php endif;?>
        </div>
  </div>
</div>
</div>            

<?php if($request->createstatus == 'Approved'):?>
<div class="form col-lg-3">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dailytrip-completion-form-dailytripcompletion_form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group hidden" >
		<?php echo $form->textField($model,'trip_id'); ?>
		<?php echo $form->error($model,'trip_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'departure_time'); ?>
		<?php echo $form->timeField($model,'departure_time', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'departure_time'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'departure_guard'); ?>
		<?php echo $form->textField($model,'departure_guard', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'departure_guard'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'arrival_time'); ?>
		<?php echo $form->timeField($model,'arrival_time', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'arrival_time'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'arrival_guard'); ?>
		<?php echo $form->textField($model,'arrival_guard', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'arrival_guard'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Submit', array('class'=>'btn btn-priimary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php endif;?>
