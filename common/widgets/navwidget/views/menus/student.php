<ul class="nav side-menu">
    <li class="active"><a><i class="fa fa-home"></i> Главная <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li class="current-page"><a href="index.html">Dashboard1</a></li>
        </ul>
    </li>
    <li><a><i class="fa fa-user"></i> Профиль <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= \yii\helpers\Url::to(['site/questionary']) ?>">Анкета</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['site/documents']) ?>">Документы</a></li>
        </ul>
    </li>
</ul>