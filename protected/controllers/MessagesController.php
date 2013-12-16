<?php

class MessagesController extends Controller
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
				'actions'=>array('index', 'sendmessage', 'readmessage'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
	public function actionIndex()
	{
                $messages = Messages::model()->findAll('sender_uid = :user_id OR receipient_uid=:user_id ORDER BY createdate DESC', array(':user_id'=>Yii::app()->user->id));
                
                $dataProvider=new CArrayDataProvider($messages);
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function actionSendMessage(){
                $model=new MessageForm;

                // uncomment the following code to enable ajax-based validation
                /*
                if(isset($_POST['ajax']) && $_POST['ajax']==='message-form-sendmessage-form')
                {
                    echo CActiveForm::validate($model);
                    Yii::app()->end();
                }
                */
                $request = Yii::app()->request;
                $receipient_uid = $request->getQuery('to');
                $job_id = $request->getQuery('job_id');
                
                if(!$receipient_uid){
                    $this->redirect(Yii::app()->user->returnUrl);
                }
                
                $user = User::model()->findByPk($receipient_uid);
                
                if($job_id){
                    $job = Jobrequest::model()->findByPk($job_id);
                    $model->message = "We found that your Job Order Request (". $job->job_no .") has no available materials. We will process your request once new stocks has been delivered.";
                }
                
                $model->name = $user->first_name . ' '.$user->last_name;
                $model->receipient_uid = $user->uid;
                
                if(isset($_POST['MessageForm']))
                {
                    $model->attributes=$_POST['MessageForm'];
                    if($model->validate())
                    {
                        $message = new Messages();
                        $message->attributes = array(
                            'message'=>$model->message,
                            'sender_uid' => Yii::app()->user->id,
                            'receipient_uid' => $model->receipient_uid,
                            'is_read' => 0
                        );
                                
                        if($message->insert()){
                            $this->redirect(Yii::app()->user->returnUrl);
                        }
                        
                    }
                }
                $this->render('sendmessage',array('model'=>$model));
        }
        
        public function actionReadMessage($id){
            $message = Messages::model()->findByPk($id);
            $message->attributes = array('is_read'=>1);
            $message->update();
            $this->redirect(Yii::app()->getBaseUrl(1).'/messages');
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