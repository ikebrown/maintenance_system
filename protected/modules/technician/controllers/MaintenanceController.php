<?php

class MaintenanceController extends Controller
{
	
	public function actionIndex()
	{
            $rawData = Tech::model()->with('m')->findAll('uid = :user_id', array(':user_id'=>Yii::app()->user->id));
            
            $dataProvider=new CArrayDataProvider($rawData);
            $this->render('index',array(
                    'dataProvider'=>$dataProvider,
            ));
            
	}
        
        public function actionChecklist()
	{
            $this->layout='//layouts/column1';
            if(!Yii::app()->request->getQuery('id')){
                $this->redirect(Yii::app()->getBaseUrl(1).'/technician/maintenance');
            }
            $activities = Activity::model()->findAll('mid = :mid',array(':mid'=>Yii::app()->request->getQuery('id')));
            
            $model=new MaintenanceForm;
            
            if(isset($_POST['MaintenanceForm']))
            {
                $model->attributes=$_POST['MaintenanceForm'];
                $model->uid = Yii::app()->user->id;
                
                $has_record = Techactivity::model()->find('uid = :uid AND act_id=:act_id AND act_month=:act_month',array(':uid'=>Yii::app()->user->id,':act_id'=>$model->act_id, ':act_month'=>$model->act_month));
                
                if($model->validate() && !$has_record)
                {
                    $techActivity = new Techactivity();
                    $techActivity->attributes = array(
                        'uid' => $model->uid,
                        'act_id' => $model->act_id,
                        'remarks' => $model->remarks,//$_POST['MaintenanceForm']['remarks'],
                        'act_month' => $model->act_month,
                    );

                    $techActivity->save();
                    Yii::app()->user->setFlash('success', "Preventive Maintenance Activity has successfully save!");
                }else{
                    Yii::app()->user->setFlash('error', "Record already exist!");
                }
            }
            
            $this->render('checklist', array('activities'=>$activities, 'model'=>$model));
            
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