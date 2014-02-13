<div ng-controller="MaintenanceController">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center" rowspan="3">Activity</th>
                <th class="text-center" colspan="12">Month / Year</th>
                <!--<th class="text-center" rowspan="3">Performed By</th>-->
                <th class="text-center" rowspan="3">Remarks</th>
            </tr>
            <tr>
                <th class="text-center" colspan="12">2014</th>
            </tr>
            <tr>
                <th class="text-center">Jan</th>
                <th class="text-center">Feb</th>
                <th class="text-center">Mar</th>
                <th class="text-center">Apr</th>
                <th class="text-center">May</th>
                <th class="text-center">June</th>
                <th class="text-center">July</th>
                <th class="text-center">Aug</th>
                <th class="text-center">Sept</th>
                <th class="text-center">Oct</th>
                <th class="text-center">Nov</th>
                <th class="text-center">Dec</th>
            </tr>
        </thead>
        <tbody>
            <?php $x=1;foreach($activities as $activity):?>
            <tr>
                <td>
                    <?php echo $x++.'. ';
                          echo $activity->activity;?>
<!--                    $activity->m->teches[0]->uid-->
                </td>
                
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>1));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>2));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>3));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>4));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>5));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>6));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>7));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>8));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>9));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>10));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>11));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                
                <?php $monthAct = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id, ':act_month'=>12));?>
                <th class="text-center">
                    <?php if($monthAct):?>
                    <i class="fa fa-check"></i>
                    <sup style="margin-right:-8px;" class="pull-right"><a href="#" title="Remove" ng-click="removeCheck(<?php echo $monthAct->id;?>)">&times;</a></sup>
                    <?php endif;?>
                </th>
                
                <th class="text-center">
                    <?php $remarks = Techactivity::model()->findAll('uid = :uid AND act_id=:act_id',array(':uid'=>Yii::app()->user->id,':act_id'=>$activity->id));?>
                    <?php foreach($remarks as $row):?>
                            <?php echo $row->remarks.'<br/>';?>
                    <?php endforeach;?>
                </th>
                
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<div class="clearfix"></div>

<h4>Add Activity</h4>

<div class="form well">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'maintenance-form-maintenanceForm-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'act_id'); ?>
        <?php echo $form->dropDownList($model,'act_id', CHtml::listData($activities, 'id', 'activity'), array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'act_id'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'act_month'); ?>
        <?php
          $months = array();
            for ($x=0; $x < 12; $x++) {
                $time = strtotime('+' . $x . ' months', strtotime(date('Y-M' . '-01')));
                $key = date('n', $time);
                $name = date('F', $time);
                $months[$key] = $name;
            }
        ?>
        <?php echo $form->dropDownList($model,'act_month', $months, array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'act_month'); ?>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model,'remarks'); ?>
        <?php echo $form->textField($model,'remarks', array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'remarks'); ?>
    </div>


    <div class="form-group">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->