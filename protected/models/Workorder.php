<?php

/**
 * This is the model class for table "workorder".
 *
 * The followings are the available columns in table 'workorder':
 * @property string $work_id
 * @property string $job_id
 * @property string $personnel_assigned_uid
 * @property string $modifiedby
 * @property string $createdate
 * @property string $modifieddate
 * @property string $createdby
 *
 * The followings are the available model relations:
 * @property Jobrequest $job
 * @property User $personnelAssignedU
 */
class Workorder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'workorder';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('job_id, personnel_assigned_uid, createdate, createdby', 'required'),
			array('job_id, personnel_assigned_uid, modifiedby, createdby', 'length', 'max'=>20),
			array('modifieddate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('work_id, job_id, personnel_assigned_uid, modifiedby, createdate, modifieddate, createdby', 'safe', 'on'=>'search'),
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
			'job' => array(self::BELONGS_TO, 'Jobrequest', 'job_id'),
			'personnelAssignedU' => array(self::BELONGS_TO, 'User', 'personnel_assigned_uid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'work_id' => 'Work',
			'job_id' => 'Job',
			'personnel_assigned_uid' => 'Personnel Assigned Uid',
			'modifiedby' => 'Modifiedby',
			'createdate' => 'Createdate',
			'modifieddate' => 'Modifieddate',
			'createdby' => 'Createdby',
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

		$criteria->compare('work_id',$this->work_id,true);
		$criteria->compare('job_id',$this->job_id,true);
		$criteria->compare('personnel_assigned_uid',$this->personnel_assigned_uid,true);
		$criteria->compare('modifiedby',$this->modifiedby,true);
		$criteria->compare('createdate',$this->createdate,true);
		$criteria->compare('modifieddate',$this->modifieddate,true);
		$criteria->compare('createdby',$this->createdby,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Workorder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function addPersonnel(){
            $model = new Workorder();
            $model->attributes = array(
                'job_id' => $this->job_id, 
                'personnel_assigned_uid' => $this->personnel_assigned_uid, 
                'modifiedby' => Yii::app()->user->id, 
                'createdate' => new CDbExpression('NOW()'), 
                'modifieddate' => new CDbExpression('NOW()'), 
                'createdby' => Yii::app()->user->id, 
            );
            
            if($model->save()){
                return $model->work_id;
            }else{
                return 0;
            }
        }
        
        public function addJobAction($job_id){
            $connection=Yii::app()->db;

            $sql = "INSERT INTO jobrequest_action (act_id, job_id, createdate)
                        (SELECT act_id, :job_id, NOW() FROM `action`)";

            $command = $connection->createCommand($sql);
            $command->bindParam(":job_id",$job_id,PDO::PARAM_INT);
            return $command->execute();
        }
        
        public function getAllAssignedPersonnel($job_id){
            return Workorder::model()->findAll('job_id=:job_id', array(':job_id'=>$job_id));
        }
        
        public function getWorkOrderByUserId($user_id){
            return Workorder::model()->findAll('personnel_assigned_uid=:user_id', array(':user_id'=>$user_id));
        }
        
        public function getWorkOrderByAssignedPersonnelUid($user_id){
            $connection=Yii::app()->db;

            $sql = "SELECT j.job_no, j.job_id, j.nature, j.date_requested, j.date_needed,
                            CONCAT(u.last_name, ', ', u.first_name) as requester, d.department, 
                               j.createstatus
                    FROM workorder w
                        LEFT JOIN jobrequest	j
                                ON j.job_id = w.job_id
                        LEFT JOIN `user` u
                                ON u.uid = w.personnel_assigned_uid
                        LEFT JOIN department d
                                ON d.dept_id = u.dept_id	
                        WHERE UCASE(j.createstatus) = 'ISSUED'
                                AND w.personnel_assigned_uid = :user_id";

            $command = $connection->createCommand($sql);
            $command->bindParam(":user_id",$user_id,PDO::PARAM_INT);
            return $command->queryAll();
        }
}
