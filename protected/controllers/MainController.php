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
                    $request = Jobrequest::model()->findAll('requester_uid=:requester_uid ORDER BY date_needed ASC', array(':requester_uid'=>Yii::app()->user->id));

                    $dailytrip = Triprequest::model()->findAll('requester_uid=:requester_uid ORDER BY request_date ASC', array(':requester_uid'=>Yii::app()->user->id));
                    $this->render('requester_main', array('request'=>$request, 'dailytrip'=>$dailytrip));   

                    break;
                case 'CDMO_ADMIN':
                    $job = new Jobrequest();
                    $request = $job->getAllJobRequestByCreatestatus('Pending');

                    $trip = new Triprequest();
                    $dailytrip = $trip->getAllTripRequestByCreatestatus('Pending');
                    $this->render('cdmo_main', array('request'=>$request, 'dailytrip'=>$dailytrip));   

                    break;
                
                case 'SUPERADMIN':
                    $job = new Jobrequest();
                    $request = $job->getAllJobRequestByCreatestatus('Pending');

                    $trip = new Triprequest();
                    $dailytrip = $trip->getAllTripRequestByCreatestatus('Pending');
                    $this->render('superadmin_main', array('request'=>$request, 'dailytrip'=>$dailytrip));   

                    break;
                case 'TECHNICIAN':


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