
<ul class="nav navbar-nav side-nav">
    <li><?php echo CHtml::link('<i class="fa fa-dashboard"></i> Dashboard', array('/main'))?></li>
<!--    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o"></i> Job Request  <span class="badge">7</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Construction'.((isset($result['CONSTRUCTION']))?'&nbsp;<span class="badge">'.$result['CONSTRUCTION'].'</span>':''), array('/webadmin/jobrequest/viewlist', 'nature'=>'construction'))?></li>
        <li><?php echo CHtml::link('Installation'.((isset($result['INSTALLATION']))?'&nbsp;<span class="badge">'.$result['INSTALLATION'].'</span>':''), array('/webadmin/jobrequest/viewlist', 'nature'=>'installation'))?></li>
        <li><?php echo CHtml::link('Repair'.((isset($result['REPAIR']))?'&nbsp;<span class="badge">'.$result['REPAIR'].'</span>':''), array('/webadmin/jobrequest/viewlist', 'nature'=>'repair'))?></li>
        <li><?php echo CHtml::link('Replacement'.((isset($result['REPLACEMENT_OF_DEFECTIVE_PARTS']))?'&nbsp;<span class="badge">'.$result['REPLACEMENT_OF_DEFECTIVE_PARTS'].'</span>':''), array('/webadmin/jobrequest/viewlist', 'nature'=>'replacement'))?></li>
        <li><?php echo CHtml::link('Preventive Maintenance'.((isset($result['PREVENTIVE_MAINTENANCE']))?'&nbsp;<span class="badge">'.$result['PREVENTIVE_MAINTENANCE'].'</span>':''), array('/webadmin/jobrequest/viewlist', 'nature'=>'preventive_maintenance'))?></li>
        <li><?php echo CHtml::link('Cost Estimation'.((isset($result['COST_ESTIMATION']))?'&nbsp;<span class="badge">'.$result['COST_ESTIMATION'].'</span>':''), array('/webadmin/jobrequest/viewlist', 'nature'=>'cost_estimation'))?></li>
        <li><?php echo CHtml::link('Others'.((isset($result['OTHERS']))?'&nbsp;<span class="badge">'.$result['OTHERS'].'</span>':''), array('/webadmin/jobrequest/viewlist', 'nature'=>'others'))?></li>
      </ul>
    </li>-->
<!--    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o"></i> Work Order <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Issued', array('/webadmin/workorder/viewlist', 'status'=>'issued'))?></li>
        <li><?php echo CHtml::link('Denied', array('/webadmin/workorder/viewlist', 'status'=>'denied'))?></li>
        <li><?php echo CHtml::link('On-hold', array('/webadmin/workorder/viewlist', 'status'=>'on_hold'))?></li>
        <li><?php echo CHtml::link('Canceled', array('/webadmin/workorder/viewlist', 'status'=>'canceled'))?></li>
        <li><?php echo CHtml::link('Closed', array('/webadmin/workorder/viewlist', 'status'=>'closed'))?></li>
      </ul>
    </li>-->
<!--    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ticket"></i> Daily Trip Request  <span class="badge">7</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Pending', array('/webadmin/dailytrip/viewlist', 'status'=>'pending'))?></li>
        <li><?php echo CHtml::link('Approved', array('/webadmin/dailytrip/viewlist', 'status'=>'approved'))?></li>
        <li><?php echo CHtml::link('Denied', array('/webadmin/dailytrip/viewlist', 'status'=>'denied'))?></li>
        <li><?php echo CHtml::link('Closed', array('/webadmin/dailytrip/viewlist', 'status'=>'closed'))?></li>
      </ul>
    </li>-->
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Users<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Create New User',Yii::app()->getBaseUrl(1).'/webadmin/user/create')?></li>
        <li><?php echo CHtml::link('View All Users',Yii::app()->getBaseUrl(1).'/webadmin/user')?></li>
      </ul>
    </li>
<!--    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-briefcase"></i> Assets<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Material',Yii::app()->getBaseUrl(1).'/webadmin/material')?></li>
        <li><?php echo CHtml::link('Material Type',Yii::app()->getBaseUrl(1).'/webadmin/materialtype')?></li>
        <li><?php echo CHtml::link('Car',Yii::app()->getBaseUrl(1).'/webadmin/car')?></li>
        <li><?php echo CHtml::link('Location',Yii::app()->getBaseUrl(1).'/webadmin/location')?></li>
      </ul>
    </li>-->
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Settings<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Department',Yii::app()->getBaseUrl(1).'/webadmin/department')?></li>
        <li><?php echo CHtml::link('Job Action',Yii::app()->getBaseUrl(1).'/webadmin/action')?></li>
      </ul>
    </li>
  </ul>
