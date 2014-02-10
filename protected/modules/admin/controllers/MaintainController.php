<?php

class MaintainController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','checklist','assignpersonnel'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

        
        
        public function actionChecklist()
	{
            $this->layout='//layouts/column1';
            if(!Yii::app()->request->getQuery('id')){
                $this->redirect(Yii::app()->getBaseUrl(1).'/admin/maintenance');
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
        
        public function actionAssignPersonnel(){
            $this->layout='//layouts/column1';
            if(!Yii::app()->request->getQuery('mid')){
                $this->redirect(Yii::app()->getBaseUrl(1).'/admin/maintain');
            }
            
            $mid = Yii::app()->request->getQuery('mid');
            $maintain = Maintain::model()->findByPk($mid);
            
            
            $model=new MaintaintechForm();
            if(isset($_POST['MaintaintechForm']))
            {
                
                $model->attributes=$_POST['MaintaintechForm'];
                $model->mid = $mid;
                if($model->validate()){
                    $personnel_uid = explode('|', substr($model->assigned_personnel_uid, 0, strlen($model->assigned_personnel_uid)-1));
                    
                    foreach ($personnel_uid as $uid) {
                        $tech = new Tech();
                        $tech->attributes = array(
                            'mid'=>$mid,
                            'uid'=>$uid
                        );
                        $tech->save();
                    }
                    
                    Yii::app()->user->setFlash('success', "Preventive Maintenance has successfully assigned a personnel!");
                    $this->redirect(Yii::app()->getBaseUrl(1).'/admin/maintain');
                }
            }
            
            $this->render('assignpersonnel',array('model'=>$model, 'maintain' => $maintain));
        }
        
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
                $activities = Activity::model()->findAll('mid = :mid',array(':mid'=>Yii::app()->request->getQuery('id')));
                $dataProvider=new CArrayDataProvider($activities);

		$this->render('view',array(
			'model'=>$this->loadModel($id),
                        'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Maintain;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Maintain']))
		{
			$model->attributes=$_POST['Maintain'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Maintain']))
		{
			$model->attributes=$_POST['Maintain'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Maintain');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Maintain('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Maintain']))
			$model->attributes=$_GET['Maintain'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Maintain the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Maintain::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Maintain $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='maintain-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
