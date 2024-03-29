<div class="col-lg-12" ng-controller="MyCtrl">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i>&nbsp;Create Job Order</h3>
      </div>
      <div class="panel-body">
         <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'jobrequest-form-jobrequest_form-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // See class documentation of CActiveForm for details on this,
                // you need to use the performAjaxValidation()-method described there.
                'enableAjaxValidation'=>false,
                'htmlOptions'=>array('class'=>'form')
        )); ?> 
          
        <div class="table-responsive">
            
        <div class="form">

            <?php echo $form->errorSummary($model); ?>
	<div class="row col-md-6">
                <?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'name', array('class'=>'form-control', 'placeholder'=>'Name', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
        

	<div class="row col-md-6 col-md-offset-6">
                <?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department', array('class'=>'form-control', 'placeholder'=>'Department', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row col-md-6">
		<?php /*echo $form->labelEx($model,'date_needed'); ?>
		<?php echo $form->dateField($model,'date_needed', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'date_needed');*/ ?>
	</div>

	<div class="row col-md-6 col-md-offset-6">
		<?php echo $form->labelEx($model,'date_created'); ?>
		<?php echo $form->dateField($model,'date_created', array('class'=>'form-control', 'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'date_created'); ?>
	</div>
        <div class="clearfix "></div>
        <div class="row col-md-6">
		<?php echo $form->labelEx($model,'nature_of_job'); ?>
                <?php echo $form->radioButtonList(
                        $model,
                        'nature_of_job', 
                        $model->getNatureOfJob(),
                        array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'<br/>'));
                  ?>
            
		<?php echo $form->textField($model,'other_specified', array('class'=>'form-control', 'placeholder'=>'Please specify')); ?>
		<?php echo $form->error($model,'nature_of_job'); ?>
            
                <br/>
                
                <?php echo $form->labelEx($model,'reason'); ?>
		<?php echo $form->textField($model,'reason', array('class'=>'form-control', 'placeholder'=>'Reason')); ?>
		<?php echo $form->error($model,'reason'); ?>
                
                <br/>
                
                <?php echo $form->labelEx($model,'room'); ?>
		<?php echo $form->textField($model,'room', array('class'=>'form-control hidden', 'placeholder'=>'Room', 'ng-model'=>'room')); ?>
		<?php echo $form->error($model,'room'); ?>
              

                <div ng-controller="MyCtrl">
                  <autocomplete ng-model="result" attr-placeholder="type to search room..." click-activation="true" data="movies" on-type="doSomething"></autocomplete>
                </div>
                
                
	</div>
        <div class="row col-md-6">
		<?php /*echo $form->labelEx($model,'request_type'); ?>
                <?php echo $form->radioButtonList(
                        $model,
                        'request_type', 
                        $model->getRequestType(),
                        array( 'labelOptions'=>array('style'=>'display:inline;width:150px;'), 'template'=>"{input} {label}", 'separator'=>'<br/>'));
                  ?>
		<?php echo $form->error($model,'request_type');*/ ?>
	</div>

        <div class="row col-md-6 col-md-offset-6">
            <?php echo $form->labelEx($model,'materials_needed'); ?>
            <?php echo $form->textArea($model,'materials_needed', array('class'=>'form-control', 'rows'=>'10', 'placeholder'=>'Job Order Details')); ?>
            <?php echo $form->error($model,'materials_needed'); ?>
	</div>
    <div class="clearfix "></div>
</div><!-- form -->


        </div>
    <div class="text-right">
      <?php echo CHtml::submitButton('Submit', array('class'=>'btn btn-lg btn-primary')); ?>
    </div>
          
    <?php $this->endWidget(); ?>
  </div>
</div>
</div>          
