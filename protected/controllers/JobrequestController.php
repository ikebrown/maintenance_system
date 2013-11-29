<?php

class JobrequestController extends Controller
{
        public $layout='//layouts/main';
    
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
				'actions'=>array('index', 'viewrequest', 'createrequest', 'success'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
	public function actionIndex()
	{
                $request = Jobrequest::model()->findAll('requester_uid=:requester_uid ORDER BY date_needed ASC', array(':requester_uid'=>Yii::app()->user->id));
		$this->render('index', array('request'=>$request));
	}
        
        public function actionViewRequest(){
                $job_id = Yii::app()->request->getQuery('job_id');
                $request = Jobrequest::model()->findByPk($job_id, 'requester_uid=:requester_uid', array(':requester_uid'=>Yii::app()->user->id));
                
                $model=new JobrequestForm;
                $model->name = Yii::app()->user->display_name;
                $model->department = Yii::app()->user->department;
                $model->date_created = date('Y-m-d',  strtotime($request->date_requested));
                $model->date_needed = $request->date_needed;
                $model->nature_of_job=$request->nature;
                $model->other_specified=$request->other_specified;
                $model->createstatus = $request->createstatus;
                
		$this->render('viewrequest', array('model'=>$model, 'request'=>$request));
        }
        
        public function actionCreaterequest(){
            $model=new JobrequestForm;

            // uncomment the following code to enable ajax-based validation
            /*
            if(isset($_POST['ajax']) && $_POST['ajax']==='jobrequest-form-jobrequest_form-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
            */
            $model->name = Yii::app()->user->display_name;
            $model->department = Yii::app()->user->department;
            $model->date_created = date('Y-m-d');

            if(isset($_POST['JobrequestForm']))
            {
                $model->attributes=$_POST['JobrequestForm'];
                if($model->validate())
                {
                    $jobRequest = new Jobrequest();
                    
                    $jobRequest->attributes = array(
                        'requester_uid'=>Yii::app()->user->id,
                        'date_needed'=>$model->date_needed,
                        'date_requested'=>new CDbExpression('NOW()'),
                        'nature'=>$model->nature_of_job,
                        'other_specified'=>$model->other_specified,
                        'createstatus'=>'PENDING',
                        'request_type'=>$model->request_type
                    );
                    
                    if($jobRequest->save()){
                        $request = Jobrequest::model()->findByPk($jobRequest->job_id);
                        $request->attributes = array('job_no'=>'JO'.  date('Ym').sprintf("%04s", $jobRequest->job_id));
                        $request->update();
                        
                        $this->redirect('success?jo='.$request->job_no);
                    }
                }
            }
            $this->render('createrequest',array('model'=>$model));
        }

        public function actionSuccess(){
            $this->render('success', array('job_no'=>Yii::app()->request->getQuery('jo')));
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