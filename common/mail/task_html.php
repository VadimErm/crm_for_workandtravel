<div class="task">
    <h3><?= $task->title?></h3>
    <p>Hello <?= $task->userTasks[0]->user->username?>. This task for program <?= $task->program->title ?>.</p>
    <hr>
    <p class="task-content"><?= $task->content?></p>
</div>