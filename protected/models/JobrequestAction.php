<?php

/**
 * This is the model class for table "jobrequest_action".
 *
 * The followings are the available columns in table 'jobrequest_action':
 * @property string $jobact_id
 * @property string $job_id
 * @property string $act_id
 * @property string $createdate
 *
 * The followings are the available model relations:
 * @property Action $act
 * @property Jobrequest $job
 */
class JobrequestAction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jobrequest_action';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('job_id, act_id, createdate, createstatus', 'required'),
			array('job_id, act_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('jobact_id, job_id, act_id, createdate, createstatus', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'act' => array(self::BELONGS_TO, 'Action', 'act_id'),
			'job' => array(self::BELONGS_TO, 'Jobrequest', 'job_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jobact_id' => 'Jobact',
			'job_id' => 'Job',
			'act_id' => 'Act',
			'createdate' => 'Createdate',
                        'createstatus' => 'Status'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('jobact_id',$this->jobact_id,true);
		$criteria->compare('job_id',$this->job_id,true);
		$criteria->compare('act_id',$this->act_id,true);
		$criteria->compare('createdate',$this->createdate,true);
                $criteria->compare('createstatus',$this->createstatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JobrequestAction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
        public function getAllJobAction($job_id){
        $connection=Yii::app()->db;

                $sql = "SELECT ja.jobact_id, a.act_id, a.`action`, ja.createstatus
                            FROM jobrequest_action ja
                                    LEFT JOIN action a
                                            ON a.act_id = ja.act_id
                            WHERE ja.job_id = :job_id
                                    ORDER BY ja.act_id ASC";

                $command = $connection->createCommand($sql);
                $command->bindParam(":job_id",$job_id,PDO::PARAM_INT);
                $command->setFetchMode(PDO::FETCH_OBJ);
                $result = $command->queryAll();

                return $result;
        }
        
        public function getOptionJobAction($job_id){
        $connection=Yii::app()->db;

                $sql = "SELECT ja.jobact_id, a.`action`
                            FROM jobrequest_action ja
                                    LEFT JOIN action a
                                            ON a.act_id = ja.act_id
                            WHERE ja.job_id = :job_id
                                    ORDER BY ja.act_id ASC";

                $command = $connection->createCommand($sql);
                $command->bindParam(":job_id",$job_id,PDO::PARAM_INT);
                $command->setFetchMode(PDO::FETCH_KEY_PAIR);
                $result = $command->queryAll();

                return $result;
        }
        
        
        public function updateJobAction($pk, $status = 'COMPLETED'){
            $job = JobrequestAction::model()->findByPk($pk);
            $job->attributes = array(
                'createstatus' => $status
            );
            $this->completeWorkOrder($pk);
            return $job->update();
        }
        
        public function completeWorkOrder($jobact_id){
            $model = JobrequestAction::model()->findByPk($jobact_id);
            if($model->act_id == 6){
                $job = Jobrequest::model()->findByPk($model->job_id);
                $material = new Material();
                $jobMaterial = new JobrequestMaterial();
                foreach ($job->jobrequestMaterials as $row) {
                    if($row->status == 'IN-USE'){
                        $material->returnMaterialQuantity($row->mat_id, $row->quantity);
                        $jobMaterial->closeMaterialsUsed($row->jobmat_id);
                    }
                }
             
                $jobrequest = new Jobrequest();
                $jobrequest->updateJobStatus($job->job_id, 'Closed');
                
            }
            
        }
}
