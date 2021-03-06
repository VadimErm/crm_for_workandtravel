<?php
namespace common\models;

use Yii;
use yii\base\Event;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use common\models\Agreement;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'unique'],
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            [['program_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    public function getRole()
    {
        $authManager = Yii::$app->authManager;

        $userRole = $authManager->getRolesByUser($this->getId());

        $userRole = current($userRole);

        return isset($userRole->name) ? $userRole->name : null;
    }

    public function getContact()
    {
        return $this->hasOne(Contact::className(), ['id' => 'contact_id'])
            ->viaTable('contact_user', ['user_id' => 'id']);
    }

    public function getAgreements()
    {
        return $this->hasMany(Agreement::className(), ['id' => 'agreement_id'])
            ->viaTable('user_agreements',['user_id' => 'id']);
    }
    public function getProgram()
    {
        return $this->hasOne(Program::className(), ['id' =>'program_id']);
    }

    public function getTasks()
    {
        return $this->hasMany(Task::className(), ['id' => 'task_id'])
            ->viaTable('user_task', ['user_id' => 'id']);
    }

    public function getNewTasks()
    {
        return $this->hasMany(Task::className(), ['id' => 'task_id'])
            ->viaTable('user_task', ['user_id' => 'id'],
                function($q){
                    return $q->andWhere([ 'status' => Task::NEW_TASK])->orWhere(['status' => Task::READED]);
                });
    }

    public function getUserTasks()
    {
        return $this->hasMany(UserTask::className(), ['user_id' => 'id'])->orderBy(['status' =>SORT_ASC]);

    }



    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    public static function getUsersByRole($role)
    {
        if(is_null(Yii::$app->authManager->getRole($role))){
            return null;
        }

        return static::find()->where([
            'id' => Yii::$app->authManager->getUserIdsByRole($role)
        ])->all();

    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {

        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     * User events
     * @param $event Event
     */
    public static function beforeLogout($event)
    {
        // Remove access token
        $event->identity->access_token = null;
        $event->identity->update();
    }

    /**
     * @param $event Event
     */
    public static function afterLogin($event)
    {

        // Generate user access token
        $event->identity->access_token = Yii::$app->security->generateRandomString();
        $event->identity->update();
    }


}
