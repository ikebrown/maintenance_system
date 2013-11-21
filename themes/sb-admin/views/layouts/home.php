<?php $this->beginContent('//elements/header'); ?>     
<?php $this->endContent(); ?>

    <div id="wrapper_">

      
    <?php $this->beginContent('//elements/home_nav'); ?>     
    <?php $this->endContent(); ?>

      <div id="page-wrapper">

        <div class="row">
            <div class="col-lg-3 col-lg-offset-4">
            <?php echo $content;?>
            </div>
        </div><!-- /.row -->
        
        
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
<?php $this->beginContent('//elements/footer'); ?>     
<?php $this->endContent(); ?>