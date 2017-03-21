<style>
    .task-item{
        position: relative;
        display: block;
        margin-bottom: 12px;
        border: 1px solid #E4E4E4;
        -webkit-border-radius: 5px;
        overflow: hidden;
        padding-bottom: 5px;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 5px;
        -moz-background-clip: padding;
        border-radius: 5px;
        background-clip: padding-box;
        background: #FFF;
        transition: all 300ms ease-in-out;
        padding: 15px;
    }
    .tile-stats .icon{
        position: static;
        width: auto;
        height: auto;
    }
    .tile-stats h3 {
        color: #BAB8B8;
        white-space: nowrap;
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 35px;
    }
    .task-date {
        color: #ccc;
        font-size: 12px;
        margin-bottom: 15px;
    }
    .tile-stats .icon i{
        font-size: 45px;
    }
</style>

<div class="row bar bar-filter">
    <div class="col-xs-12 col-md-3 col-lg-3 filter-selection">
        <select class="form-control filter-destination" id="filter-destination" name="destination">
            <option selected value="0">Select purpose</option>
            <option value="1">For me</option>
            <option value="2">For all</option>
        </select>
    </div>
    <?php if(!isset($done)): ?>
        <div class="col-xs-12 col-md-3 col-lg-3 filter-selection">
            <select class="form-control filter-status" id="filter-status" name="status">
                <option selected value="0">Select status</option>
                <option value="1">New</option>
                <option value="2">Readed</option>
            </select>
        </div>
    <?php endif; ?>
</div>
<?php if(!is_null(\Yii::$app->request->get('destination'))) : ?>
    <script type="text/javascript">
        document.getElementById('filter-destination').value = "<?= \Yii::$app->request->get('destination');?>";
    </script>
<?php endif; ?>
<?php if(!is_null(\Yii::$app->request->get('status'))) : ?>
    <script type="text/javascript">
      document.getElementById('filter-status').value = "<?= \Yii::$app->request->get('status');?>";
    </script>
<?php endif; ?>
<style>
    .bar-filter{
        padding: 10px;
        margin: 0 0 10px 0;
        background-color: #f7f7f9;
        border: 1px solid #e1e1e8;
    }
    .filter-destination, .filter-status{
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }


</style>
<div class="grid row">
    <?php foreach ($tasks as $task) : ?>
        <?php if(!is_null($task->task)) : ?>
            <div class="grid-sizer"></div>
            <div class="animated flipInY grid-item col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <a href="#"  data-task-id="<?= $task->task->id ?>">
                    <div class="task-item  <?php if($task->status == \common\models\Task::READED || $task->status == \common\models\Task::DONE) { echo 'task-default'; } ?> <?php if($task->status == \common\models\Task::NEW_TASK) { echo 'new-task'; } ?>" >
                        <div class="tile-stats row" style="border: 0; margin-bottom: 0;">
                            <div class="col-md-8 col-lg-8">
                                <h3><?= $task->task->title ?></h3>
                            </div>
                            <div class="col-md-4 col-lg-4 ">
                                <div class="icon pull-right" style="width: 45px; height: 45px;"><i class="fa fa-caret-square-o-right"></i></div>
                            </div>
                        </div>

                        <div class="task-date"><?= $task->task->getUpdatedDate()?></div>
                        <p class="description"><?= $task->task->description ?></p>
                    </div>
                </a>

            </div>
        <?php endif; ?>
    <?php endforeach; ?>
 </div>


