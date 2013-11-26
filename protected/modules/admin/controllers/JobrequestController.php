<?php

class JobrequestController extends Controller
{
        public $layout='//layouts/main';

	public function actionIndex()
	{
            $status = Yii::app()->request->getQuery('status');
            
            if(!$status){
                $status = 'Pending';
            }
            
            $request = Jobrequest::model()->getAllJobRequestByCreatestatus($status);
            $this->render('index', array('request'=>$request, 'status'=>$status));    
	}
        
        public function actionViewRequest(){
                $job_id = Yii::app()->request->getQuery('job_id');
                $request = Jobrequest::model()->findByPk($job_id);
                
                $model=new JobrequestForm;
                $model->job_no = $request->job_no;    
                $model->name = Yii::app()->user->display_name;
                $model->department = Yii::app()->user->department;
                $model->date_created = date('Y-m-d',  strtotime($request->date_requested));
                $model->date_needed = $request->date_needed;
                $model->nature_of_job=$request->nature;
                $model->other_specified=$request->other_specified;
                $model->createstatus = $request->createstatus;
                
		$this->render('viewrequest', array('model'=>$model, 'request'=>$request));
        }
        
        public function actionViewList()
	{
            $nature = Yii::app()->request->getQuery('nature');
            
            if($nature){
                $request = Jobrequest::model()->getAllJobRequestByNatureCreatestatus($nature, 'Pending');
                $this->render('view_list', array('request'=>$request, 'nature'=>ucwords($nature)));
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