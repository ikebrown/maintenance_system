<?php

class TriprequestController extends Controller
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
				'actions'=>array('index', 'updatetriprequest'),
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
        
        public function actionUpdateTriprequest(){
            $model = new Triprequest();
            $request = Yii::app()->request;
            if($request->getIsPostRequest()){
                $data = json_decode(file_get_contents("php://input"));

                switch ($data->status) {
                    case 'Denied':
                        $status = 'Denied';
                        break;
                    case 'Approved':
                        $status = 'Approved';
                        break;
                    case 'Canceled':
                        $status = 'Canceled';
                        break;
                }

                if($model->updateTriprequestStatus($data->trip_id, $status)){
                    echo CJSON::encode(array('response'=>true));
                }else{
                    echo CJSON::encode(array('response'=>false));
                }
                
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