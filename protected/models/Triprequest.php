<?php

/**
 * This is the model class for table "triprequest".
 *
 * The followings are the available columns in table 'triprequest':
 * @property string $trip_id
 * @property string $requester_uid
 * @property string $dateofuse_from
 * @property string $dateofuse_to
 * @property string $request_date
 * @property string $car_id
 * @property string $purpose
 * @property string $et_departure
 * @property string $et_arrival
 * @property string $createstatus
 * @property string $modifiedby
 * @property string $departure_time
 * @property string $departure_guard
 * @property string $arrival_time
 * @property string $arrival_guard
 *
 * The followings are the available model relations:
 * @property Passengers[] $passengers
 * @property Car $car
 * @property User $requesterU
 */
class Triprequest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'triprequest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('requester_uid, dateofuse_from, dateofuse_to, request_date, car_id, purpose, et_departure, et_arrival, createstatus', 'required'),
			array('requester_uid, car_id, modifiedby', 'length', 'max'=>20),
			array('departure_guard, arrival_guard', 'length', 'max'=>50),
			array('departure_time, arrival_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('trip_id, requester_uid, dateofuse_from, dateofuse_to, request_date, car_id, purpose, et_departure, et_arrival, createstatus, modifiedby, departure_time, departure_guard, arrival_time, arrival_guard', 'safe', 'on'=>'search'),
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
			'passengers' => array(self::HAS_MANY, 'Passengers', 'trip_id'),
			'car' => array(self::BELONGS_TO, 'Car', 'car_id'),
			'requesterU' => array(self::BELONGS_TO, 'User', 'requester_uid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'trip_id' => 'Trip',
			'requester_uid' => 'Requester Uid',
			'dateofuse_from' => 'Date of use from',
			'dateofuse_to' => 'Date of use to',
			'request_date' => 'Request Date',
			'car_id' => 'Car',
			'purpose' => 'Purpose',
			'et_departure' => 'Et Departure',
			'et_arrival' => 'Et Arrival',
			'createstatus' => 'Createstatus',
			'modifiedby' => 'Modifiedby',
			'departure_time' => 'Departure Time',
			'departure_guard' => 'Departure Guard',
			'arrival_time' => 'Arrival Time',
			'arrival_guard' => 'Arrival Guard',
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

		$criteria->compare('trip_id',$this->trip_id,true);
		$criteria->compare('requester_uid',$this->requester_uid,true);
		$criteria->compare('dateofuse_from',$this->dateofuse_from,true);
		$criteria->compare('dateofuse_to',$this->dateofuse_to,true);
		$criteria->compare('request_date',$this->request_date,true);
		$criteria->compare('car_id',$this->car_id,true);
		$criteria->compare('purpose',$this->purpose,true);
		$criteria->compare('et_departure',$this->et_departure,true);
		$criteria->compare('et_arrival',$this->et_arrival,true);
		$criteria->compare('createstatus',$this->createstatus,true);
		$criteria->compare('modifiedby',$this->modifiedby,true);
		$criteria->compare('departure_time',$this->departure_time,true);
		$criteria->compare('departure_guard',$this->departure_guard,true);
		$criteria->compare('arrival_time',$this->arrival_time,true);
		$criteria->compare('arrival_guard',$this->arrival_guard,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Triprequest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        /*
         * Custom Query
         */
        public function getAllTripRequestByCreatestatus($createstatus){
            return Triprequest::model()->findAll('UCASE(createstatus)=:createstatus ORDER BY request_date ASC', array(':createstatus'=>  strtoupper($createstatus)));
        }
        
        public function getPendingRequestTotal(){
        $connection=Yii::app()->db;

                $sql = "SELECT COUNT(*) as total
                            FROM triprequest 
                        WHERE createstatus = 'Pending'";

                $command = $connection->createCommand($sql);
                $result = $command->queryRow();

                return $result['total'];
        }
        
        
        public function updateTriprequestStatus($pk, $status){
            $job = Triprequest::model()->findByPk($pk);
            $job->attributes = array(
                'createstatus' => $status
            );
            return $job->update();
        }
}
