
<ul class="nav navbar-nav side-nav">
    <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o"></i> Job Request  <span class="badge">7</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Construction', array('jobrequest/viewlist', 'nature'=>'construction'))?></li>
        <li><?php echo CHtml::link('Instalation', array('jobrequest/viewlist', 'nature'=>'installation'))?></li>
        <li><?php echo CHtml::link('Repair', array('jobrequest/viewlist', 'nature'=>'repair'))?></li>
        <li><?php echo CHtml::link('Replacement', array('jobrequest/viewlist', 'nature'=>'replacement'))?></li>
        <li><?php echo CHtml::link('Construction', array('jobrequest/viewlist', 'nature'=>'construction'))?></li>
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
    <li><a href="typography.html"><i class="fa fa-wrench"></i> Technician</a></li>
  </ul>
