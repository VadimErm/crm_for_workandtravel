<?php
/* @var $this \yii\web\View */

use common\helpers\FileLoaderHelper;
use common\helpers\Url;
use yii\helpers\Html;

\backend\assets\CustomAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->language ?>">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="<?= Yii::$app->language ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body class="nav-md">
    <?php $this->beginBody() ?>
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?= Yii::$app->getHomeUrl() ?>" class="site_title"><i class="fa fa-globe"></i> <span>KCET</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <?php if(FileLoaderHelper::isExists('photo_3_5x4_5', \Yii::$app->user->getIdentity()->id)) :?>
                                <img src="<?= Url::fileGet('photo_3_5x4_5', \Yii::$app->user->getIdentity()->id) ?>" alt="..." class="img-circle profile_img">
                            <?php else : ?>
                                <img src="/admin/images/man.svg" alt="..." class="img-circle profile_img">
                            <?php endif; ?>

                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <?php if(\Yii::$app->user->getIdentity()->getRole() !== 'student'): ?>
                                <h2><?= ucfirst(\Yii::$app->user->getIdentity()->username) ?></h2>
                            <?php else: ?>
                                <h2><?= \Yii::$app->user->getIdentity()->username ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br/>

                    <!-- sidebar menu -->
                    <?= \common\widgets\navwidget\NavWidget::widget(); ?>
                    <!-- /sidebar menu -->

                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <?php if(FileLoaderHelper::isExists('photo_3_5x4_5', \Yii::$app->user->getIdentity()->id)) :?>
                                        <img src="<?= Url::fileGet('photo_3_5x4_5', \Yii::$app->user->getIdentity()->id) ?>" alt="...">
                                    <?php else : ?>
                                        <img src="/admin/images/man.svg" alt="...">
                                    <?php endif; ?>
                                    <?php if(\Yii::$app->user->getIdentity()->getRole() !== 'student'): ?>
                                        <?= ucfirst(\Yii::$app->user->getIdentity()->username) ?>
                                    <?php else: ?>
                                        <?= \Yii::$app->user->getIdentity()->username ?>
                                    <?php endif; ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <span>Настройки</span>
                                        </a>
                                    </li>
                                    <li><a href="<?= \yii\helpers\Url::to(['site/logout']) ?>"><i
                                                class="fa fa-sign-out pull-right"></i> Выход</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image"><img src="/admin/images/img.jpg"
                                                                     alt="Profile Image"/></span>
                                            <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                            <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <?= $content ?>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    КСЕТ
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>