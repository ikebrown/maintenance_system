<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-file-text"></i> Work Order</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
                    
            <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_view',
            )); ?>


        </div>
        <div class="text-right">
            <?php echo CHtml::link('View All Pending Request  <i class="fa fa-arrow-circle-right"></i>', array('/admin/jobrequest/index','status'=>'Pending'));?>
        </div>
  </div>
</div>
</div>            

