
<ul class="nav navbar-nav side-nav">
    <li><?php echo CHtml::link('<i class="fa fa-dashboard"></i> Dashboard', array('/main'))?></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o"></i> Job Request  <?php echo (($total != 0)?'&nbsp;<span class="badge">'.$total.'</span>':'')?><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Construction'.(($result['CONSTRUCTION'])?'&nbsp;<span class="badge">'.$result['CONSTRUCTION'].'</span>':''), array('/admin/jobrequest/viewlist', 'nature'=>'construction'))?></li>
        <li><?php echo CHtml::link('Installation'.((isset($result['INSTALLATION']))?'&nbsp;<span class="badge">'.$result['INSTALLATION'].'</span>':''), array('/admin/jobrequest/viewlist', 'nature'=>'installation'))?></li>
        <li><?php echo CHtml::link('Repair'.((isset($result['REPAIR']))?'&nbsp;<span class="badge">'.$result['REPAIR'].'</span>':''), array('/admin/jobrequest/viewlist', 'nature'=>'repair'))?></li>
        <li><?php echo CHtml::link('Replacement'.((isset($result['REPLACEMENT_OF_DEFECTIVE_PARTS']))?'&nbsp;<span class="badge">'.$result['REPLACEMENT_OF_DEFECTIVE_PARTS'].'</span>':''), array('/admin/jobrequest/viewlist', 'nature'=>'replacement'))?></li>
        <li><?php echo CHtml::link('Preventive Maintenance'.((isset($result['PREVENTIVE_MAINTENANCE']))?'&nbsp;<span class="badge">'.$result['PREVENTIVE_MAINTENANCE'].'</span>':''), array('/admin/jobrequest/viewlist', 'nature'=>'preventive_maintenance'))?></li>
        <li><?php echo CHtml::link('Cost Estimation'.((isset($result['COST_ESTIMATION']))?'&nbsp;<span class="badge">'.$result['COST_ESTIMATION'].'</span>':''), array('/admin/jobrequest/viewlist', 'nature'=>'cost_estimation'))?></li>
        <li><?php echo CHtml::link('Others'.((isset($result['OTHERS']))?'&nbsp;<span class="badge">'.$result['OTHERS'].'</span>':''), array('/admin/jobrequest/viewlist', 'nature'=>'others'))?></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o"></i> Work Order <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Issued', array('/admin/workorder/viewlist', 'status'=>'issued'))?></li>
        <li><?php echo CHtml::link('Denied', array('/admin/workorder/viewlist', 'status'=>'denied'))?></li>
        <li><?php echo CHtml::link('On-hold', array('/admin/workorder/viewlist', 'status'=>'on_hold'))?></li>
        <li><?php echo CHtml::link('Canceled', array('/admin/workorder/viewlist', 'status'=>'canceled'))?></li>
        <li><?php echo CHtml::link('Closed', array('/admin/workorder/viewlist', 'status'=>'closed'))?></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ticket"></i> Daily Trip Request  <span class="badge">7</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Pending', array('/admin/dailytrip/viewlist', 'status'=>'pending'))?></li>
        <li><?php echo CHtml::link('Approved', array('/admin/dailytrip/viewlist', 'status'=>'approved'))?></li>
        <li><?php echo CHtml::link('Denied', array('/admin/dailytrip/viewlist', 'status'=>'denied'))?></li>
        <li><?php echo CHtml::link('Closed', array('/admin/dailytrip/viewlist', 'status'=>'closed'))?></li>
      </ul>
    </li>
    <li><?php echo CHtml::link('<i class="fa fa-wrench"></i> Technician', array('/admin/technician'))?></li>
  </ul>
