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
          <!--<div class="col-lg-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-file-text"></i> Job Request</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Order # <i class="fa fa-sort"></i></th>
                        <th>Order Date <i class="fa fa-sort"></i></th>
                        <th>Order Time <i class="fa fa-sort"></i></th>
                        <th>Amount (USD) <i class="fa fa-sort"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>3326</td>
                        <td>10/21/2013</td>
                        <td>3:29 PM</td>
                        <td>$321.33</td>
                      </tr>
                      <tr>
                        <td>3325</td>
                        <td>10/21/2013</td>
                        <td>3:20 PM</td>
                        <td>$234.34</td>
                      </tr>
                      <tr>
                        <td>3324</td>
                        <td>10/21/2013</td>
                        <td>3:03 PM</td>
                        <td>$724.17</td>
                      </tr>
                      <tr>
                        <td>3323</td>
                        <td>10/21/2013</td>
                        <td>3:00 PM</td>
                        <td>$23.71</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="text-right">
                  <a href="#">View All Pending Request <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
            
          <div class="col-lg-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-file-text"></i> Daily Trip Request</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Order # <i class="fa fa-sort"></i></th>
                        <th>Order Date <i class="fa fa-sort"></i></th>
                        <th>Order Time <i class="fa fa-sort"></i></th>
                        <th>Amount (USD) <i class="fa fa-sort"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>3326</td>
                        <td>10/21/2013</td>
                        <td>3:29 PM</td>
                        <td>$321.33</td>
                      </tr>
                      <tr>
                        <td>3325</td>
                        <td>10/21/2013</td>
                        <td>3:20 PM</td>
                        <td>$234.34</td>
                      </tr>
                      <tr>
                        <td>3324</td>
                        <td>10/21/2013</td>
                        <td>3:03 PM</td>
                        <td>$724.17</td>
                      </tr>
                      <tr>
                        <td>3323</td>
                        <td>10/21/2013</td>
                        <td>3:00 PM</td>
                        <td>$23.71</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="text-right">
                  <a href="#">View All Pending Request  <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>-->
          
          <?php echo $content;?>
          
        </div><!-- /.row -->
        
        
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
<?php $this->beginContent('//elements/footer'); ?>     
<?php $this->endContent(); ?>