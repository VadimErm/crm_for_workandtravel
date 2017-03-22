<?php

namespace common\widgets\new_tasks_count_widget;

use common\models\Task;
use yii\bootstrap\Widget;

class NewTasksCountWidget extends Widget
{
   public $user;

   public function run()
   {
       $count = $this->user->getUserTasks()->where(['status' => Task::NEW_TASK])->count();

       return $this->render('tasks_count', [
           'count' => $count
       ]);
   }

}