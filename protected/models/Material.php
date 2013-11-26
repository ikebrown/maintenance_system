<?php

/**
 * This is the model class for table "material".
 *
 * The followings are the available columns in table 'material':
 * @property string $mat_id
 * @property string $material_name
 * @property string $material_description
 * @property string $quantity
 * @property string $type_id
 * @property string $location_id
 * @property string $m_type
 *
 * The followings are the available model relations:
 * @property JobrequestMaterial[] $jobrequestMaterials
 * @property Location $location
 * @property MaterialType $type
 */
class Material extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'material';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('material_name, material_description, quantity, type_id, m_type', 'required'),
			array('material_name', 'length', 'max'=>50),
			array('quantity, type_id, location_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mat_id, material_name, material_description, quantity, type_id, location_id, m_type', 'safe', 'on'=>'search'),
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
			'jobrequestMaterials' => array(self::HAS_MANY, 'JobrequestMaterial', 'mat_id'),
			'location' => array(self::BELONGS_TO, 'Location', 'location_id'),
			'type' => array(self::BELONGS_TO, 'MaterialType', 'type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'mat_id' => 'Mat',
			'material_name' => 'Material Name',
			'material_description' => 'Material Description',
			'quantity' => 'Quantity',
			'type_id' => 'Type',
			'location_id' => 'Location',
                        'm_type' => 'Admin Asset Type'
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

		$criteria->compare('mat_id',$this->mat_id,true);
		$criteria->compare('material_name',$this->material_name,true);
		$criteria->compare('material_description',$this->material_description,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('type_id',$this->type_id,true);
		$criteria->compare('location_id',$this->location_id,true);
                $criteria->compare('m_type',$this->m_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Material the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getOptionMaterialType(){
            $connection=Yii::app()->db;

            $sql = "SELECT type_id, mat_type
                        FROM material_type";

            $command = $connection->createCommand($sql);
            $command->setFetchMode(PDO::FETCH_KEY_PAIR);
            $result = $command->queryAll();

            return $result;
        }
        
        public function getOptionLocation(){
            $connection=Yii::app()->db;

            $sql = "SELECT loc_id, location
                        FROM location";

            $command = $connection->createCommand($sql);
            $command->setFetchMode(PDO::FETCH_KEY_PAIR);
            $result = $command->queryAll();

            return $result;
        }
        
        public function getOptionMType(){
            return array(
                'CDMO' => 'CDMO',
                'LMO' => 'LMO',
                'DOIT' => 'DOIT'
                );
        }
        
}
