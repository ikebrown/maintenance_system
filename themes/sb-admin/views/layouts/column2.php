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
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-8">
              
          <?php echo $content;?>
          </div>
          
          <div class="col-lg-4">
              <div class="panel panel-default">
                <div class="panel-heading">Actions</div>
                <div class="panel-body">
                  <?php
                    $this->widget('zii.widgets.CMenu', array(
                          'htmlOptions'=>array('class'=>'nav nav-pills nav-stacked'),
                          'items'=>$this->menu,
                      ));
                    ?>
                </div>
              </div>
          </div>
              
          
          
        </div><!-- /.row -->
        
        
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
<?php $this->beginContent('//elements/footer'); ?>     
<?php $this->endContent(); ?>