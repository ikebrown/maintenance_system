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
                                'encodeLabel' => false,
                                'items'=>array(
                                        array('label'=>'Home', 'url'=>array('/site')),
                                        array('label'=>'My Request', 'url'=>array('/jobrequest'), 'visible'=>!Yii::app()->user->isGuest),
                                        array('label'=> 'Create <b class="caret"></b>', 'url'=>"#", 'visible'=>!Yii::app()->user->isGuest,
                                        'items'=>array(
                                         array('label'=>'Job Request', 'url'=>array('/jobrequest/createrequest')),
                                         array('label'=>'Daily Trip Request', 'url'=>array('/dailytrip/createrequest')),
                                        ), 
                                        'submenuOptions'=>array('class'=>'dropdown-menu'),
                                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                                        'itemOptions'=>array('class'=>'dropdown'))),
                        ));
          ?>  
            
        <?php
          $this->widget('zii.widgets.CMenu',array(
                                'htmlOptions' => array( 'class' => 'nav navbar-nav navbar-right' ),
                                'activeCssClass'=> 'active',
                                'encodeLabel' => false,
                                'items'=>array(
                                        array('label'=>  'My Account <b class="caret"></b>', 'url'=>"#", 'visible'=>!Yii::app()->user->isGuest,
                                        'items'=>array(
                                         array('label'=>'Profile', 'url'=>array('/profile')),
                                         array('label'=>'Logout', 'url'=>array('/site/logout')),
                                        ), 
                                        'submenuOptions'=>array('class'=>'dropdown-menu'),
                                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                                        'itemOptions'=>array('class'=>'dropdown'))),
                        ));
          ?>    
            
        </div><!--/.nav-collapse -->
      </div>
    </div>