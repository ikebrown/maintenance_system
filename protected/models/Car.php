<?php

/**
 * This is the model class for table "car".
 *
 * The followings are the available columns in table 'car':
 * @property string $car_id
 * @property string $car_model
 * @property string $plate_no
 *
 * The followings are the available model relations:
 * @property Triprequest[] $triprequests
 */
class Car extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'car';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('car_model, plate_no', 'required'),
			array('car_model, plate_no', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('car_id, car_model, plate_no', 'safe', 'on'=>'search'),
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
			'triprequests' => array(self::HAS_MANY, 'Triprequest', 'car_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'car_id' => 'Car',
			'car_model' => 'Car Model',
			'plate_no' => 'Plate No',
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

		$criteria->compare('car_id',$this->car_id,true);
		$criteria->compare('car_model',$this->car_model,true);
		$criteria->compare('plate_no',$this->plate_no,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Car the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getCarPair(){
            $connection=Yii::app()->db;

            $sql = "SELECT car_id, car_model
                        FROM car";

            $command = $connection->createCommand($sql);
            $command->setFetchMode(PDO::FETCH_KEY_PAIR);
            $result = $command->queryAll();

            return $result;
        }
}
