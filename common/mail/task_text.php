<?= $task->title?>

Hello <?= $task->userTasks[0]->user->username?>. This task for program <?= $task->program->title ?>.

<?= $task->content?>
