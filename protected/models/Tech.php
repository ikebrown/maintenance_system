<?php

/**
 * This is the model class for table "pms_tech".
 *
 * The followings are the available columns in table 'pms_tech':
 * @property string $id
 * @property string $mid
 * @property string $uid
 * @property string $createdby
 * @property string $createdate
 *
 * The followings are the available model relations:
 * @property User $createdby0
 * @property Maintain $m
 * @property User $u
 */
class Tech extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pms_tech';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mid, uid', 'required'),
			array('mid, uid, createdby', 'length', 'max'=>20),
			array('createdate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, mid, uid, createdby, createdate', 'safe', 'on'=>'search'),
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
			'createdby0' => array(self::BELONGS_TO, 'User', 'createdby'),
			'm' => array(self::BELONGS_TO, 'Maintain', 'mid'),
			'u' => array(self::BELONGS_TO, 'User', 'uid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mid' => 'Mid',
			'uid' => 'Uid',
			'createdby' => 'Createdby',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('mid',$this->mid,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('createdby',$this->createdby,true);
		$criteria->compare('createdate',$this->createdate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tech the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
