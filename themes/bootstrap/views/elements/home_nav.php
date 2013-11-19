<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo Yii::app()->name;?></a>
        </div>
        <div class="navbar-collapse collapse">
          <?php
          $this->widget('zii.widgets.CMenu',array(
                                'htmlOptions' => array( 'class' => 'nav navbar-nav' ),
                                'activeCssClass'=> 'active',
                                'items'=>array(
                                        array('label'=>'Home', 'url'=>array('/site')),
                                        array('label'=>'About', 'url'=>array('/site/about'))),
                        ));
          ?>    
            
        </div><!--/.nav-collapse -->
      </div>
    </div>