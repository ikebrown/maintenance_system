
<ul class="nav navbar-nav side-nav">
    <li><?php echo CHtml::link('<i class="fa fa-dashboard"></i> Dashboard', array('/main'))?></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o"></i> Job Request  <span class="badge">7</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#">Construction <span class="badge">1</span></a></li>
        <li><a href="#">Installation <span class="badge">1</span></a></li>
        <li><a href="#">Repair <span class="badge">1</span></a></li>
        <li><a href="#">Replacement <span class="badge">1</span></a></li>
        <li><a href="#">Preventive Maintenance <span class="badge">1</span></a></li>
        <li><a href="#">Cost Estimation <span class="badge">1</span></a></li>
        <li><a href="#">Others <span class="badge">1</span></a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o"></i> Work Order <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#">Issued</a></li>
        <li><a href="#">Denied</a></li>
        <li><a href="#">On-hold</a></li>
        <li><a href="#">Canceled</a></li>
        <li><a href="#">Closed</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ticket"></i> Daily Trip Request  <span class="badge">7</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#">Pending <span class="badge">7</span></a></li>
        <li><a href="#">Approved</a></li>
        <li><a href="#">Denied</a></li>
        <li><a href="#">Closed</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Users<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Create New User',Yii::app()->getBaseUrl(1).'/superadmin/user/create')?></li>
        <li><?php echo CHtml::link('View All Users',Yii::app()->getBaseUrl(1).'/superadmin/user')?></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-briefcase"></i> Assets<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Material',Yii::app()->getBaseUrl(1).'/superadmin/material')?></li>
        <li><?php echo CHtml::link('Material Type',Yii::app()->getBaseUrl(1).'/superadmin/materialtype')?></li>
        <li><?php echo CHtml::link('Car',Yii::app()->getBaseUrl(1).'/superadmin/car')?></li>
        <li><?php echo CHtml::link('Location',Yii::app()->getBaseUrl(1).'/superadmin/location')?></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Settings<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Department',Yii::app()->getBaseUrl(1).'/superadmin/department')?></li>
        <li><?php echo CHtml::link('Job Action',Yii::app()->getBaseUrl(1).'/superadmin/action')?></li>
      </ul>
    </li>
  </ul>
