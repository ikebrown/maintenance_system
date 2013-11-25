<div class="col-lg-9">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Job Order - <?php echo $request->job_no;?></h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">

        <div class="row">    
        <div class="col-lg-6 well-sm"><b>JO No.:</b> <?php echo $request->job_no;?></div>    
        </div>
            
        <div class="row">
	<div class="col-lg-6 well-sm"><b>Name:</b> <?php echo $model->name;?></div>
	<div class="col-lg-6 well-sm"><b>Department:</b> <?php echo $model->department;?></div>
        </div>
            
        <div class="row">
	<div class="col-lg-6 well-sm"><b>Date Created:</b> <?php echo $model->date_created;?></div>
	<div class="col-lg-6 well-sm"><b>Date Needed:</b> <?php echo $request->date_needed;?></div>
        </div>
        
        <div class="row">
        <div class="col-lg-6 well-sm"><b>Nature of Job:</b> <?php echo $request->nature;?> <?php echo ($request->other_specified)?' - '.$request->other_specified:'';?></div>
        </div>
            
        <div class="row">
            <div class="col-lg-6 well-sm"><b>Status:</b> <span class="badge badge-important"><?php echo $request->createstatus;?></span></div>
        </div>    
        
        </div>
  </div>
</div>
</div>            

