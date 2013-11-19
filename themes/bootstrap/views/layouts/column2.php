<?php $this->beginContent('//elements/header'); ?>     
<?php $this->endContent(); ?>

<?php $this->beginContent('//elements/navigation'); ?>     
<?php $this->endContent(); ?>

    <div class="container">
        <div class="row">
        <div  class=".col-xs-12 col-md-8">
        <?php echo $content ?>
        </div>    

        <div class=".col-xs-6 col-md-4 well">
<!--            <img src="images/unknown.png" class="img-rounded pull-left thumbnail" style="margin-right: 5px" width="80"/>-->
            <ul class="profile_info list-unstyled">
                <li><?php echo Yii::app()->user->display_name;?></li>
                <li><?php echo Yii::app()->user->mobile_no;?></li>
                <li><?php echo Yii::app()->user->email;?></li>
            </ul>
            
        </div>
        </div>
    </div> <!-- /container -->


<?php $this->beginContent('//elements/footer'); ?>     
<?php $this->endContent(); ?>