<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $uid
 * @property string $username
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile_no
 * @property string $email
 * @property string $createdate
 * @property string $usertype_id
 * @property string $dept_id
 *
 * The followings are the available model relations:
 * @property Jobrequest[] $jobrequests
 * @property Triprequest[] $triprequests
 * @property Department $dept
 * @property Usertype $usertype
 * @property Workorder[] $workorders
 */
class User extends CActiveRecord
{
        public $repeat_password;
        public  $initialPassword;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('createdate, usertype_id, dept_id', 'required'),
			array('username', 'length', 'max'=>15),
			array('password', 'length', 'max'=>100),
			array('first_name, last_name, email', 'length', 'max'=>50),
			array('mobile_no, usertype_id, dept_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, username, password, first_name, last_name, mobile_no, email, createdate, usertype_id, dept_id', 'safe', 'on'=>'search'),
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
			'jobrequests' => array(self::HAS_MANY, 'Jobrequest', 'requester_uid'),
			'triprequests' => array(self::HAS_MANY, 'Triprequest', 'requester_id'),
			'dept' => array(self::BELONGS_TO, 'Department', 'dept_id'),
			'usertype' => array(self::BELONGS_TO, 'Usertype', 'usertype_id'),
			'workorders' => array(self::HAS_MANY, 'Workorder', 'personnel_assigned_uid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'uid' => 'Uid',
			'username' => 'Username',
			'password' => 'Password',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'mobile_no' => 'Mobile No',
			'email' => 'Email',
			'createdate' => 'Createdate',
			'usertype_id' => 'Usertype',
			'dept_id' => 'Dept',
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

		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('mobile_no',$this->mobile_no,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('createdate',$this->createdate,true);
		$criteria->compare('usertype_id',$this->usertype_id,true);
		$criteria->compare('dept_id',$this->dept_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function encryptPassword($password){
            return $password;
            //return sha1($password. Yii::app()->params['salt']);
        }
        
        public function beforeSave()
        {

            // in this case, we will use the old hashed password.
            if(empty($this->password) && empty($this->repeat_password) && !empty($this->initialPassword)){
                $this->password=$this->repeat_password=$this->initialPassword;
            }else{
                $this->password = $this->encryptPassword($this->password);
            }

            return parent::beforeSave();
        }
        
        public function afterFind()
        {
            //reset the password to null because we don't want the hash to be shown.
            $this->initialPassword = $this->password;
            $this->password = null;

            parent::afterFind();
        }
}
