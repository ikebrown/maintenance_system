<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Job Request - <?php echo $request->job_no;?></h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">

	<div class="col-lg-6">
            <b>Name</b>
        </div>
        <div  class="col-lg-offset-6">    
		<?php echo $model->name;?>
	</div>
        
	<div class="col-lg-6">
            <b>Department</b>
        </div>
        <div  class="col-lg-offset-6">          
		<?php echo $model->department;?>
	</div>

	<div class="col-lg-6">
		<b>Date Created</b>
        </div>
        <div  class="col-lg-offset-6">          
		<?php echo $model->date_created;?>
	</div>

	<div class="col-lg-6">
		<b>Date Needed</b>
        </div>
        <div  class="col-lg-offset-6">  
		<?php echo $request->date_needed;?>
	</div>

        <div class="col-lg-6">
		<b>Nature of Job</b>
        </div>
        <div  class="col-lg-offset-6">  
                  <?php echo $request->nature;?> <?php echo $request->other_specified;?>
	</div>
        
        <div class="col-lg-6">
                <b>Status</b>
        </div>
        <div  class="col-lg-offset-6">          
                <span class="badge badge-important"><?php echo $request->createstatus;?></span>
	</div>
     
        </div>
    
  </div>
</div>
</div>            