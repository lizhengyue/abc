<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/22
 * Time: 15:55
 */

namespace common\models;
use Yii;
use yii\base\Model;

class SignUpForm extends Model {
        public $username;
        public $password;
        public $email;
        public $confirmPassword;
   public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password','confirmPassword'], 'required'],
            ['email','email'],
            ['confirmPassword','compare','compareAttribute' => 'password']
        ];
    }
    public function signUp(){
            if($this->validate()){
                $user=new User();
                $user->username=$this->username;
                $user->email=$this->email;
                $user->setPassword($this->password);

                if($user->save()){
                    return $user;
                }
            }
    }
}