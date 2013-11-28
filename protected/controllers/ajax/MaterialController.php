<?php

class MaterialController extends Controller
{
    
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
				'actions'=>array('index', 'getitem', 'savejobrequestmaterials'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
	public function actionIndex()
	{
            
	}
        
        public function actionGetItem(){
            $request = Yii::app()->request;
            $id = $request->getQuery('id');
            if($id){
                $result = Material::model()->findByPk($id);
                echo CJSON::encode(array('data'=>$result));
            }
        }
        
        public function actionSaveJobrequestMaterials(){
            $request = Yii::app()->request;
            if($request->getIsPostRequest()){
                $data = json_decode(file_get_contents("php://input"));
                
                $model = new JobrequestMaterial();
                $material = new Material();
                foreach ($data->materials as $row) {
                    $model->addJobMaterial($row->id, $row->job_id, $row->quantity); 
                    $material->updateMaterialQuantity($row->id, $row->quantity);
                }
                
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