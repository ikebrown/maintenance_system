<?php

class MainController extends Controller
{
        public $layout='//layouts/main';
        public $page_title = 'Main';
    
        /**
	 * @return array action filters
	 */
	public function filters()
	{
            return array(
                    'accessControl', // perform access control for CRUD operations
            );
	}
        
        /**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
	public function actionIndex()
	{
            switch (Yii::app()->user->user_type) {
                case 'REQUESTER':
                    $request = Jobrequest::model()->findAll('requester_uid=:requester_uid ORDER BY date_needed ASC LIMIT 5', array(':requester_uid'=>Yii::app()->user->id));

                    $dailytrip = Triprequest::model()->findAll('requester_uid=:requester_uid ORDER BY request_date ASC LIMIT 5', array(':requester_uid'=>Yii::app()->user->id));
                    $this->render('index', array('request'=>$request, 'dailytrip'=>$dailytrip));   

                    break;
                case 'CDMO':
                case 'LMO':
                case 'DOIT':    
                    $this->redirect(Yii::app()->getBaseUrl(1).'/admin');
                    break;
                
                case 'WEBADMIN':
                    $this->redirect(Yii::app()->getBaseUrl(1).'/webadmin');
                    break;
                
                case 'CDMO_TECH':
                case 'LMO_TECH':
                case 'DOIT_TECH':    
                        $this->redirect(Yii::app()->getBaseUrl(1).'/technician');
                    break;
                default:
                    break;
            }
            
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}