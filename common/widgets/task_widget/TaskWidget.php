<?php

namespace common\widgets\task_widget;

use yii\bootstrap\Widget;

class TaskWidget extends Widget
{
    /**
     * @var $_user User
     */
    public $tasks;

    public function run()
    {
        $this->render('tasks', ['tasks' => $this->tasks]);
    }


}