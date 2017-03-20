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
<div class="wrapper">

<div class="grid row">
    <?php foreach ($tasks as $task) : ?>
        <div class="grid-sizer"></div>
        <div class="animated flipInY grid-item col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="#"  data-task-id="<?= $task->id ?>">
                <div class="task-item" >
                    <div class="tile-stats row" style="border: 0; margin-bottom: 0;">
                        <div class="col-md-8 col-lg-8">
                            <h3><?= $task->title ?></h3>
                        </div>
                        <div class="col-md-4 col-lg-4 ">
                            <div class="icon pull-right" style="width: 45px; height: 45px;"><i class="fa fa-caret-square-o-right"></i></div>
                        </div>
                    </div>

                    <div class="task-date"><?= $task->getUpdatedDate()?></div>
                    <p class="description"><?= $task->description ?></p>
                </div>
            </a>

        </div>
    <?php endforeach; ?>
 </div>
</div>

