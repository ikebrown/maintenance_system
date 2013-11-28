<?php

class WorkorderController extends Controller
{
	
	public function actionIndex()
	{
            $status = Yii::app()->request->getQuery('status');
            
            if(!$status){
                $status = 'Issued';
            }
            
            $user_type = Yii::app()->user->user_type;
            $request = Jobrequest::model()->get($status, $user_type);
            
            if($status == 'Closed'){
                $this->render('index_closed', array('request'=>$request, 'status'=>ucwords($status)));
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