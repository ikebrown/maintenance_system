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
			array('job_id, act_id, createdate', 'required'),
			array('job_id, act_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('jobact_id, job_id, act_id, createdate', 'safe', 'on'=>'search'),
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
}
