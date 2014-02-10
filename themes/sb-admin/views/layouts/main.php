<?php $this->beginContent('//elements/header'); ?>     
<?php $this->endContent(); ?>

    <div id="wrapper">

      
    <?php $this->beginContent('//elements/main_nav'); ?>     
    <?php $this->endContent(); ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php 
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'encodeLabel'=>false,    
                'links'=>$this->breadcrumbs,
                'htmlOptions'=>array('class'=>'breadcrumb')
            ));
            ?>
<!--            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Welcome to Online Maintenance Management System.
            </div>-->
          </div>
        </div><!-- /.row -->

        <div class="row">
            
            <?php if(Yii::app()->user->hasFlash('success')):?>
                <div class="alert alert-success alert-dismissable">  
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                  </div>
            <?php endif; ?>
            
            <?php if(Yii::app()->user->hasFlash('error')):?>
                <div class="alert alert-danger alert-dismissable">  
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo Yii::app()->user->getFlash('error'); ?>
                  </div>
            <?php endif; ?>
            
            
          <?php echo $content;?>
        </div><!-- /.row -->
        
        
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
<?php $this->beginContent('//elements/footer'); ?>     
<?php $this->endContent(); ?>