
<ul class="nav navbar-nav side-nav">
    <li><?php echo CHtml::link('<i class="fa fa-dashboard"></i> Dashboard', array('/main'))?></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o"></i> Job Request<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Create Job Request', array('/jobrequest/createrequest'))?></li>
        <li><?php echo CHtml::link('My Job Request', array('/jobrequest'))?></li>
      </ul>
    </li>
    <li class="dropdown">
        <?php echo CHtml::link('<i class="fa fa-envelope"></i> Messages '.'<span class="badge">'.$message_count.'</span>', array('/messages'))?>
    </li>
<!--    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><?php echo CHtml::link('Create Trip Request', array('/dailytrip/createrequest'))?></li>
        <li><?php echo CHtml::link('My Trip Request', array('/dailytrip'))?></li>
      </ul>
    </li>-->
  </ul>
