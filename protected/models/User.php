<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $facility
 * @property string $email
 * @property boolean $approved
 * @property boolean $data_manager
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'required'),			
			array('username, email', 'length', 'max'=>128),
			array('facility', 'length', 'max'=>512),
			array('appid_seed', 'length', 'max'=>4),
			array('approved', 'safe'),
			array('enabled','safe'),
			array('data_manager','safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id,username, facility, email, approved,enabled, data_manager', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'ID',
			'username' => 'User',
			'facility' => 'Facility',
			'email' => 'Email',
			'approved' => 'Approved',
			'enabled' => 'Enabled',
			'data_manager' => 'Data Manager',
			'appid_seed' => 'Random Seed to Generate new App ID',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('facility',$this->facility,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('approved',$this->approved);
		$criteria->compare('enabled',$this->enabled);
		$criteria->compare('data_manager',$this->data_manager);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}