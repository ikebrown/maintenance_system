
<ul class="nav navbar-nav side-nav">
    <li><?php echo CHtml::link('<i class="fa fa-dashboard"></i> Dashboard', array('/main'))?></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o"></i> Work Order <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Issued', array('/technician/workorder/index', 'status'=>'Issued'))?></li>
        <li><?php echo CHtml::link('Denied', array('/technician/workorder/index', 'status'=>'Denied'))?></li>
        <li><?php echo CHtml::link('On-hold', array('/technician/workorder/index', 'status'=>'On-Hold'))?></li>
        <li><?php echo CHtml::link('Canceled', array('/technician/workorder/index', 'status'=>'Canceled'))?></li>
        <li><?php echo CHtml::link('Closed', array('/technician/workorder/index', 'status'=>'Closed'))?></li>
      </ul>
    </li>
  </ul>
