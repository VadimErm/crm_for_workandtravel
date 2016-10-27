<ul class="nav side-menu">
    <li><a><i class="fa fa-home"></i> Главная <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= Yii::$app->getHomeUrl() ?>">Информация</a></li>
        </ul>
    </li>
    <li><a><i class="fa fa-user"></i> Профиль <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= \yii\helpers\Url::to(['site/questionary']) ?>">Анкета</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['site/documents']) ?>">Документы</a></li>
        </ul>
    </li>
    <li>
        <a><i class="fa fa-tasks"></i> Задания <span class="label label-success">2</span><span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li>
                <a href="<?= \yii\helpers\Url::to(['site/jobOffer']) ?>">
                    Подписать Job-Offer <span class="label label-success">New</span>
                </a>
            </li>
            <li>
                <a href="<?= \yii\helpers\Url::to(['site/jobOffer']) ?>">
                    Пройти ориентацию по программе <span class="label label-success">New</span>
                </a>
            </li>
            <li>
                <a href="<?= \yii\helpers\Url::to(['site/jobOffer']) ?>">
                    Какое-то задание <span class="label label-default">Done</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a><i class="fa fa-life-ring"></i> Помощь <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= \yii\helpers\Url::to(['site/j222obOffer']) ?>">Получить список нужных документов</a></li>
        </ul>
    </li>
</ul>