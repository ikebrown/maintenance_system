<?php

/**
 * This is the model class for table "jobrequest".
 *
 * The followings are the available columns in table 'jobrequest':
 * @property string $job_id
 * @property string $job_no
 * @property string $requester_uid
 * @property string $date_needed
 * @property string $date_requested
 * @property string $nature
 * @property string $other_specified
 * @property string $createstatus
 *
 * The followings are the available model relations:
 * @property User $requesterU
 * @property JobrequestAction[] $jobrequestActions
 * @property JobrequestMaterial[] $jobrequestMaterials
 * @property Workorder[] $workorders
 */
class Jobrequest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jobrequest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('requester_uid, date_needed, date_requested, nature, createstatus, request_type', 'required'),
			array('job_no, other_specified', 'length', 'max'=>50),
			array('requester_uid', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('job_id, job_no, requester_uid, date_needed, date_requested, nature, other_specified, createstatus, request_type', 'safe', 'on'=>'search'),
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
			'requesterU' => array(self::BELONGS_TO, 'User', 'requester_uid'),
			'jobrequestActions' => array(self::HAS_MANY, 'JobrequestAction', 'job_id'),
			'jobrequestMaterials' => array(self::HAS_MANY, 'JobrequestMaterial', 'job_id'),
			'workorders' => array(self::HAS_MANY, 'Workorder', 'job_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'job_id' => 'Job',
			'job_no' => 'Job No',
			'requester_uid' => 'Requester Uid',
			'date_needed' => 'Date Needed',
			'date_requested' => 'Date Requested',
			'nature' => 'Nature',
			'other_specified' => 'Other Specified',
			'createstatus' => 'Createstatus',
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

		$criteria->compare('job_id',$this->job_id,true);
		$criteria->compare('job_no',$this->job_no,true);
		$criteria->compare('requester_uid',$this->requester_uid,true);
		$criteria->compare('date_needed',$this->date_needed,true);
		$criteria->compare('date_requested',$this->date_requested,true);
		$criteria->compare('nature',$this->nature,true);
		$criteria->compare('other_specified',$this->other_specified,true);
		$criteria->compare('createstatus',$this->createstatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jobrequest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        /*
         * Custom Query
         */
        public function getAllJobRequestByCreatestatus($createstatus, $request_type = 'CDMO', $isSuperAdmin = 0){
            if($isSuperAdmin){
                return Jobrequest::model()->findAll('UCASE(createstatus)=:createstatus ORDER BY date_needed ASC', array(':createstatus'=>  strtoupper($createstatus)));            
            }else{
                return Jobrequest::model()->findAll('UCASE(createstatus)=:createstatus AND request_type=:request_type ORDER BY date_needed ASC', array(':createstatus'=>  strtoupper($createstatus), ':request_type'=> $request_type));            
            }
        } 
        
        public function getAllJobRequestByNatureCreatestatus($nature, $createstatus, $request_type = 'CDMO', $isSuperAdmin = 0){
            if($isSuperAdmin){
                return Jobrequest::model()->findAll('UCASE(createstatus)=:createstatus AND UCASE(nature)=:nature ORDER BY date_needed ASC', array(':nature'=>$nature, ':createstatus'=>  strtoupper($createstatus)));            
            }else{
                return Jobrequest::model()->findAll('UCASE(createstatus)=:createstatus AND UCASE(nature)=:nature AND request_type=:request_type ORDER BY date_needed ASC', array(':nature'=>$nature, ':createstatus'=>  strtoupper($createstatus), ':request_type'=> $request_type));            
            }
        }
        
        public function getPendingRequestGroupTotal($user_type = ''){
        $connection=Yii::app()->db;

                $sql = "SELECT nature, COUNT(*) as total
                            FROM jobrequest 
                                    WHERE createstatus = 'Pending'".
                        (($user_type != '')?' AND request_type=\''.$user_type.'\'':'').
                           " GROUP BY nature";

                $command = $connection->createCommand($sql);
                $command->setFetchMode(PDO::FETCH_KEY_PAIR);
                $result = $command->queryAll();

                return $result;
        }
        
        public function getPendingRequestTotal($user_type = ''){
        $connection=Yii::app()->db;

                $sql = "SELECT COUNT(*) as total
                            FROM jobrequest 
                        WHERE createstatus = 'Pending'".
                        (($user_type != '')?' AND request_type=\''.$user_type.'\'':'');

                $command = $connection->createCommand($sql);
                $result = $command->queryRow();

                return $result['total'];
        }
        
        
        public function updateJobStatus($pk, $status){
            $job = Jobrequest::model()->findByPk($pk);
            $job->attributes = array(
                'createstatus' => $status
            );
            return $job->update();
        }
        
        public function getRequestType(){
            $type = array(
                'CDMO' => 'CDMO',
                'LMO' => 'LMO',
                'DOIT' => 'DOIT',
            );
            
            return $type;
        }
}
