<ul class="nav side-menu">
    <li><a><i class="fa fa-home"></i> Главная <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= Yii::$app->getHomeUrl() ?>">Статистика</a></li>
        </ul>
    </li>
    <li><a><i class="fa fa-users"></i> Студенты <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= \yii\helpers\Url::to(['student/add']) ?>">Добавить</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['student/index']) ?>">Все</a></li>
        </ul>
    </li>
    <li><a><i class="fa fa-list-ul"></i> Программы <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= \yii\helpers\Url::to(['program/add']) ?>">Добавить</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['orientation/index']) ?>">Ориентации по программах</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['program/index']) ?>">Все</a></li>
        </ul>
    </li>
    <li><a><i class="fa fa-info"></i> Информация <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= \yii\helpers\Url::to(['program/add']) ?>">Добавить</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['program/index']) ?>">Все</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['program/index']) ?>">Оповестить всех</a></li>
        </ul>
    </li>
</ul>