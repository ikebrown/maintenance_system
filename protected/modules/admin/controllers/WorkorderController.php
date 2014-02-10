<?php

class WorkorderController extends Controller
{
	public function actionCreateWorkorder(){
            try{
            $model=new WorkorderForm;

            // uncomment the following code to enable ajax-based validation
            /*
            if(isset($_POST['ajax']) && $_POST['ajax']==='workorder-form-workorder_form-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
            */
            $job_id = Yii::app()->request->getQuery('job_id');
            $request = Jobrequest::model()->findByPk($job_id);
                
            $model->job_id = $request->job_id;
            $model->job_no = $request->job_no;
            $model->name = Yii::app()->user->display_name;
            $model->department = Yii::app()->user->department;
            $model->date_created = date('Y-m-d',  strtotime($request->date_requested));
            $model->date_needed = $request->date_needed;
            $model->nature_of_job=$request->nature;
            $model->reason=$request->reason;
            $model->materials_needed=$request->materials_needed;
            
            $model->createstatus = $request->createstatus;
            if(isset($_POST['WorkorderForm']))
            {
                
                $model->attributes=$_POST['WorkorderForm'];
                
                
                if($model->validate()){
                    $personnel_uid = explode('|', substr($model->personnel_assigned_uid, 0, strlen($model->personnel_assigned_uid)-1));
                    
                    $work = new Workorder();
                    foreach ($personnel_uid as $uid) {
                        $work->job_id = $model->job_id;
                        $work->personnel_assigned_uid = $uid;
                        $work->addPersonnel();
                    }
                    
                    $work->addJobAction($model->job_id);
                    $job = new Jobrequest();
                    
                    $job->updateJobStatus($model->job_id, 'Issued');
                    
                    Yii::app()->user->setFlash('success', "Work Order has been successfully ISSUED!");
                    $this->redirect(Yii::app()->getBaseUrl(1).'/admin');
                }
            }
            
            $this->render('workorder_form',array('model'=>$model));
            }  catch (CHttpException $e){
                echo $e;die;
            }
        }

	public function actionIndex()
	{
            $status = Yii::app()->request->getQuery('status');
            
            if(!$status){
                $status = 'Issued';
            }
            
            $user_type = Yii::app()->user->user_type;
            $request = Jobrequest::model()->getAllJobRequestByCreatestatus($status, $user_type);
            
            if($status == 'Closed'){
                $this->render('index_closed', array('request'=>$request, 'status'=>ucwords($status)));
            }elseif($status == 'Denied'){
                $this->render('index_denied', array('request'=>$request, 'status'=>ucwords($status)));
            }elseif($status == 'On-Hold'){
                $this->render('index_hold', array('request'=>$request, 'status'=>ucwords($status)));
            }else{
                $this->render('index', array('request'=>$request, 'status'=>ucwords($status)));
            }
	}

        public function actionIssueMaterial(){
            $job_id = Yii::app()->request->getQuery('job_id');
            $request = Jobrequest::model()->findByPk($job_id);
            
            if($job_id){
                $model=new MaterialrequestForm;
                
                $model->job_id = $request->job_id;
                
                $jobAction = new JobrequestAction();
                $actions = $jobAction->getAllJobAction($request->job_id);
                
                $workorder = new Workorder();
                $personnel = $workorder->getAllAssignedPersonnel($request->job_id);
                
                $material = new Material();
                $materialResult = $material->getAllMaterial($request->request_type);
                
                $jobMaterial = $request->jobrequestMaterials;
                $this->render('issuematerial_form',array('job_id'=>$request->job_id, 'model'=>$model, 'request'=>$request, 'actions' => $actions, 'materialResult'=>$materialResult, 'personnel'=>$personnel, 'jobMaterial'=>$jobMaterial));
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