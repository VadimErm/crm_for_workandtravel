<?php foreach ($tasks as $task) : ?>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <h3><?= $task->title ?></h3>
            <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
            <div class="task-date"><?= $task->getUpdatedDate()?></div>
            <p class="description"><?= $task->description ?></p>

        </div>
    </div>
<?php endforeach; ?>

