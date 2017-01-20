<ul class="nav side-menu">
    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= Yii::$app->getHomeUrl() ?>">Statistic</a></li>
        </ul>
    </li>
    <li><a><i class="fa fa-users"></i> Applications <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= \yii\helpers\Url::to(['student/add']) ?>">Invite applicant</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['student/students']) ?>">Students</a></li>

        </ul>
    </li>
    <li><a><i class="fa fa-list-ul"></i> Programs <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= \yii\helpers\Url::to(['program/add']) ?>">Add program</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['orientation/index']) ?>">Programs orientations</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['program/index']) ?>">All programs</a></li>
        </ul>
    </li>
    <li>
        <a><i class="fa fa-tasks"></i> Tasks <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li>
                <a href="<?= \yii\helpers\Url::to(['task/index']) ?>">
                    For all
                </a>
            </li>
            <li>
                <a href="<?= \yii\helpers\Url::to(['task/particular']) ?>">
                    For particular student
                </a>
            </li>
        </ul>
    </li>
    <li><a><i class="fa fa-info"></i> Resources <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= \yii\helpers\Url::to(['program/add']) ?>">Add resource</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['program/index']) ?>">All resources</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['program/index']) ?>">Notify all</a></li>
        </ul>
    </li>


    <?php if (!empty($mainManagerMenuList)) : ?>
        <?= $mainManagerMenuList ?>
    <?php endif; ?>
</ul>