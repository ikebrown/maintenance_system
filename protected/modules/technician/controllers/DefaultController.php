<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
            $work = new Workorder();
            $request = $work->getWorkOrderByAssignedPersonnelUid(Yii::app()->user->id);
            $dataProvider=new CArrayDataProvider($request);
            $this->render('index',array(
                    'dataProvider'=>$dataProvider,
            ));
            
	}
}