<?php

use yii\db\Migration;

class m170106_082137_add_content_manager_role extends Migration
{
    private $_contentManagerRole;
    private $_auth;

    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $this->_auth = Yii::$app->authManager;
        $this->_contentManagerRole = $this->_auth->createRole('content_manager');
    }

    public function up()
    {

        $this->_auth->add($this->_contentManagerRole);

    }

    public function down()
    {


        $this->_auth->remove($this->_contentManagerRole);

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
