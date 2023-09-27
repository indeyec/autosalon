<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
use yii\captcha\Captcha;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $login
 * @property string $email
 * @property string $password
 * @property int $role
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    public $password2;
    public $verifyCode;

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return null;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'email', 'password','password2', 'verifyCode','captcha'], 'required'],
            ['email', 'email'],
            ['login', 'validateLogin'],
            ['password2', 'compare', 'compareAttribute' => 'password'],
            [['role'], 'integer'],
            [['login', 'email', 'password'], 'string', 'max' => 255],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'email' => 'Email',
            'password' => 'Password',
            'password2' => 'Repeat Password',
            'role' => 'Role',
            'verifyCode' => 'Verification Code',
        ];
    }
    public function validatePassword($password){
        return $this->password === md5($password);
    }

    static public function findByUsername($username){
        return self::find()->where(['login' => $username])->one();
    }
    public function validateLogin($attr){
        $user = self::find()->where(['login' => $this->login])->one();

        if($user !== null){
            $this->addError($attr, 'занято');
        }
    }

    public function beforeSave($insert)
    {
       $this->password = md5($this->password);
       return true; 
    }
    
    
}
