<?php
namespace backend\models;

use yii\base\Model;
use yii\base\InvalidParamException;
use common\models\User;
use common\models\Contact;
use common\models\Agreement;
/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    public $password;

    /**
     * @var \common\models\User
     */
    private $_user;


    /**
     * Creates a form model given a token.
     *
     * @param string $token
     * @param array $config name-value pairs that will be used to initialize the object properties
     * @throws \yii\base\InvalidParamException if token is empty or not valid
     */
    public function __construct($token, $config = [])
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidParamException('Password reset token cannot be blank.');
        }
        $this->_user = User::findByPasswordResetToken($token);
        //var_dump($token);
        //exit;
        if (!$this->_user) {
            throw new InvalidParamException('Wrong password reset token.');
        }
        parent::__construct($config);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Resets password.
     *
     * @return boolean if password was reset.
     */
    public function resetPassword()
    {
        $user = $this->_user;
        $user->setPassword($this->password);
        $user->removePasswordResetToken();
        $program_id = $user->program_id;

        $agreements = Agreement::find()
            ->where(['program_id' => $program_id])
            ->all();
        $agreements[] = Agreement::find()->where(['program_id' =>  0])->one();


        foreach ($agreements as $agreement) {

            if ($agreement->program_id == 0) {

                $user->link('agreements', $agreement, ['approved' => true]);

            } else {

                $user->link('agreements', $agreement, ['approved' => false]);

            }

        }

        return $user->save(false);
    }
}
