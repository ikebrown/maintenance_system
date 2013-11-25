<?php

class DailytripController extends Controller
{
    public $layout='//layouts/column2';
    
	public function actionCreaterequest()
	{
            $model=new DailytripForm;

            // uncomment the following code to enable ajax-based validation
            /*
            if(isset($_POST['ajax']) && $_POST['ajax']==='dailytrip-form-createrequest-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
            */
            $model->name = Yii::app()->user->display_name;
            $model->department = Yii::app()->user->department;
            $model->date_created = date('Y-m-d');

            if(isset($_POST['DailytripForm']))
            {
                $model->attributes=$_POST['DailytripForm'];
                if($model->validate())
                {
                    $dailytrip = new Triprequest();
                    $dailytrip->attributes = array(
                        'requester_uid'=>Yii::app()->user->id,
                        'request_date'=> new CDbExpression('NOW()'),
                        'dateofuse_from'=>$model->date_use_from,
                        'dateofuse_to'=>$model->date_use_to,
                        'car_id'=>$model->car, 
                        'purpose'=>$model->purpose, 
                        'et_departure'=>$model->et_departure, 
                        'et_arrival'=>$model->et_arrival, 
                        'createstatus'=>'PENDING'
                    );
                    if($dailytrip->save()){
                        $this->redirect(Yii::app()->getBaseUrl(true).'/dailytrip');
                    }
                    
                }
            }
            
            $carModel = new Car();
            $carPair = $carModel->getCarPair();
            $this->render('createrequest',array('model'=>$model, 'carPair'=>$carPair));
	}

	public function actionIndex()
	{
            $dailytrip = Triprequest::model()->findAll('requester_uid=:requester_uid ORDER BY request_date ASC', array(':requester_uid'=>Yii::app()->user->id));
            $this->render('index', array('dailytrip'=>$dailytrip));
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