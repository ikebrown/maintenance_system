<?php
	Yii::app()->clientscript
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/sb-admin.css' )
                ->registerCssFile( Yii::app()->theme->baseUrl . '/font-awesome/css/font-awesome.min.css' )
                ->registerCssFile( Yii::app()->getBaseUrl(1) . '/css/form.css' )
                
                ->registerCoreScript( 'jquery', CClientScript::POS_END )
                ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap.js', CClientScript::POS_END )
                ->registerScriptFile( Yii::app()->getBaseUrl(1) . '/lib/angular/angular.js', CClientScript::POS_END )
                ->registerScriptFile( Yii::app()->getBaseUrl(1) . '/lib/angular/angular-resource.js', CClientScript::POS_END )
                ->registerScriptFile( Yii::app()->getBaseUrl(1) . '/lib/angular/bootstrap/ui-bootstrap-tpls-0.6.0.js', CClientScript::POS_END )
                ->registerScriptFile( Yii::app()->getBaseUrl(1) . '/js/app.js', CClientScript::POS_END )
                ->registerScriptFile( Yii::app()->getBaseUrl(1) . '/js/directives.js', CClientScript::POS_END )
                ->registerScriptFile( Yii::app()->getBaseUrl(1) . '/js/filters.js', CClientScript::POS_END )
                
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo Yii::app()->name;?></title>
    <script type="text/javascript">
        var BASE_URL = '<?php echo Yii::app()->getBaseUrl(1);?>';
    </script>

    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>