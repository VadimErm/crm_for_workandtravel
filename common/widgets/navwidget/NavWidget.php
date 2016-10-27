<?php

namespace common\widgets\navwidget;

use common\models\User;
use yii\bootstrap\Widget;
use yii\rbac\DbManager;

class NavWidget extends Widget
{
    /**
     * @var $_user User
     */
    private $_user;
    /**
     * @var $_authManager DbManager
     */
    private $_authManager;

    public function init()
    {
        $this->_user = \Yii::$app->user;
        $this->_authManager = \Yii::$app->authManager;

        parent::init();
    }

    public function run()
    {
        return $this->render('nav', ['role' => $this->getUserRole()]);
    }

    /**
     * @return string
     */
    protected function getUserRole()
    {
        $userRole =$this->_authManager->getRolesByUser($this->_user->getId());
        $userRole = current($userRole);

        return isset($userRole->name) ? $userRole->name : null;
    }
}