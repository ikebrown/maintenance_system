<?php

/**
 * This is the model class for table "jobrequest_material".
 *
 * The followings are the available columns in table 'jobrequest_material':
 * @property string $jobmat_id
 * @property string $mat_id
 * @property string $job_id
 * @property string $quantity
 * @property string $createdby
 *
 * The followings are the available model relations:
 * @property Jobrequest $job
 * @property Material $mat
 */
class JobrequestMaterial extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jobrequest_material';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mat_id, job_id, quantity, createdby, status', 'required'),
			array('mat_id, job_id, quantity, createdby', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('jobmat_id, mat_id, job_id, quantity, createdby, status', 'safe', 'on'=>'search'),
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
			'mat' => array(self::BELONGS_TO, 'Material', 'mat_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jobmat_id' => 'Jobmat',
			'mat_id' => 'Mat',
			'job_id' => 'Job',
			'quantity' => 'Quantity',
			'createdby' => 'Createdby',
                        'status' => 'Status'
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

		$criteria->compare('jobmat_id',$this->jobmat_id,true);
		$criteria->compare('mat_id',$this->mat_id,true);
		$criteria->compare('job_id',$this->job_id,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('createdby',$this->createdby,true);
                $criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JobrequestMaterial the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function addJobMaterial($mat_id, $job_id, $quantity){
            $material = new JobrequestMaterial();
            $material->attributes = array(
                'mat_id'=> $mat_id,
                'job_id'=>$job_id,
                'quantity'=>$quantity,
                'createdby'=>Yii::app()->user->id,
                'status' => 'IN-USE'
            );
            
            return $material->save();
        }
        
        public function closeMaterialsUsed($pk){
            $material = JobrequestMaterial::model()->findByPk($pk);
            $material->attributes = array(
              'status' => 'CLOSED'  
            );
            $material->update();
        }
}
