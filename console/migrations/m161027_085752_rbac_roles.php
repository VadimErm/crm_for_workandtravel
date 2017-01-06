<?php

use yii\db\Migration;

class m161027_085752_rbac_roles extends Migration
{
    private $_auth;

    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    public function up()
    {
        $auth = Yii::$app->authManager;
        
        $studentRole = $auth->createRole('student');
        $auth->add($studentRole);

        $managerRole = $auth->createRole('manager');
        $auth->add($managerRole);

        $mainManagerRole = $auth->createRole('main_manager');
        $auth->add($mainManagerRole);

        $directorRole = $auth->createRole('director');
        $auth->add($directorRole);


    }

    public function down()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAllRoles();
    }
}
