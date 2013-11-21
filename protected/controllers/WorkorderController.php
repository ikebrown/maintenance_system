<?php

class WorkorderController extends Controller
{
	public function actionCreateWorkorder(){
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
                
            $model->name = Yii::app()->user->display_name;
            $model->department = Yii::app()->user->department;
            $model->date_created = date('Y-m-d',  strtotime($request->date_requested));
            $model->date_needed = $request->date_needed;
            $model->nature_of_job=$request->nature;
            $model->status = $request->createstatus;
            if(isset($_POST['WorkorderForm']))
            {
                $model->attributes=$_POST['WorkorderForm'];
                if($model->validate())
                {
                    // form inputs are valid, do something here
                    return;
                }
            }
            $this->render('workorder_form',array('model'=>$model));
        }

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionViewwork()
	{
		$this->render('viewwork');
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