<?php

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{

    public $email;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [[ 'email'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
         ];
    }


    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return boolean whether the email was sent
     */
    public function contact($email, $password)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($this->email)
                ->setFrom($email)
                ->setSubject("Your trial password in KSET")
                ->setTextBody("Your login is:".$this->email."<br>"."Your pass is:".$password."<br>")
                ->send();

            return true;
        }
        return false;
    }
}
