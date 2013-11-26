<?php

class DailytripController extends Controller
{
    public $layout='//layouts/main';
    
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
            $status = Yii::app()->request->getQuery('status');
            
            if(!$status){
                $status = 'Pending';
            }
            
            $dailytrip = Triprequest::model()->findAll('createstatus=:createstatus ORDER BY request_date ASC', array(':createstatus'=>$status));
            
            if($status == 'Pending'){
                $this->render('index', array('dailytrip'=>$dailytrip, 'status'=>$status));
            }elseif($status == 'Denied'){
                $this->render('denied_list', array('dailytrip'=>$dailytrip, 'status'=>$status));
            }else{
                $this->render('index_list', array('dailytrip'=>$dailytrip, 'status'=>$status));
            }
	}
        
        
        public function actionViewRequest(){
                $trip_id = Yii::app()->request->getQuery('trip_id');
                $request = Triprequest::model()->findByPk($trip_id);
                
                $model=new DailytripCompletionForm;

                // uncomment the following code to enable ajax-based validation
                /*
                if(isset($_POST['ajax']) && $_POST['ajax']==='dailytrip-completion-form-dailytripcompletion_form-form')
                {
                    echo CActiveForm::validate($model);
                    Yii::app()->end();
                }
                */
                $model->trip_id = $request->trip_id;
                
                if(isset($_POST['DailytripCompletionForm']))
                {
                    $model->attributes=$_POST['DailytripCompletionForm'];
                    if($model->validate())
                    {
                        $dailytrip = Triprequest::model()->findByPk($model->trip_id);
                        $dailytrip->attributes = array(
                            'departure_time'=>$model->arrival_time,
                            'departure_guard'=>$model->departure_guard,
                            'arrival_time'=>$model->arrival_time,
                            'arrival_guard'=>$model->arrival_guard,
                            'modifiedby'=>Yii::app()->user->id,
                            'createstatus'=>'Closed'
                        );
                        if($dailytrip->update()){
                            $this->redirect(Yii::app()->getBaseUrl(true).'/main');
                        }
                    }
                }
                
                
		$this->render('viewrequest', array('request'=>$request, 'model'=>$model));
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