<?php
	Yii::app()->clientscript
                ->registerCssFile( Yii::app()->getBaseUrl(1) . '/lib/font-awesome/css/font-awesome.css' )
		->registerCssFile( Yii::app()->getBaseUrl(1) . '/lib/bootstrap/css/bootstrap.css' )
		->registerCssFile( Yii::app()->getBaseUrl(1) . '/lib/bootstrap/css/bootstrap-theme.css' )
                ->registerCssFile( Yii::app()->getBaseUrl(1) . '/css/main.css' )
                ->registerCssFile( Yii::app()->getBaseUrl(1) . '/css/form.css' )
                
                ->registerCoreScript( 'jquery', CClientScript::POS_END )
                ->registerScriptFile( Yii::app()->getBaseUrl(1) . '/lib/bootstrap/js/bootstrap.js', CClientScript::POS_END )
                
?>   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">-->
    <title><?php echo Yii::app()->name;?></title>
    <script type="text/javascript">
        var BASE_URL = '<?php echo Yii::app()->getBaseUrl(1);?>';
    </script>
  </head>
  <body>

    