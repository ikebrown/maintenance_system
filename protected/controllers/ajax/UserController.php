<?php

class UserController extends Controller
{
    
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
				'actions'=>array('index', 'gettechnician'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
	public function actionIndex()
	{
            
	}
        
        public function actionGetTechnician(){
            $user_type = Yii::app()->user->user_type;
            
            switch ($user_type) {
                case 'CDMO':
                    $tech = 'CDMO_TECH';
                    break;
                case 'LMO':
                    $tech = 'LMO_TECH';
                    break;
                case 'DOIT':
                    $tech = 'DOIT_TECH';
                    break;
            }
            
            $user = User::model()->getUserList($tech);
            echo CJSON::encode(array('data'=>$user,'count'=> count($user)));
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