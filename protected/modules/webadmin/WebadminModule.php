<?php

class WebadminModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'webadmin.models.*',
			'webadmin.components.*',
		));
                
                if(!Yii::app()->user->isGuest){
                    $user_type = Yii::app()->user->user_type;
                    if(!in_array($user_type, array('WEBADMIN'))){
                        throw new CHttpException('', 'You have no access rights in this module.');
                    }
                }else{
                      throw new CHttpException('', 'You have no access rights in this module.');
                }
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
