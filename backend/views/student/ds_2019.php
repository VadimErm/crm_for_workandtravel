<?php
/**
* @var $loaded boolean
*/
use common\helpers\Url;
use common\helpers\UserStatusHelper;

?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel" style="height: auto;">
        <div class="x_title">
            <h2>DS-2019</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content" style="display: none;">
            <?php if ($loaded) : ?>
                <img src="<?= Url::fileGet('ds_2019', $user_id) ?>" alt="DS-2019" width="500" height="300">
            <?php else : ?>
                <?php if($role === 'manager' || $role === 'main_manager') { ?>
                    <?php if(!UserStatusHelper::isReject($user_id)) : ?>
                        <form action="<?= Url::filePush() ?>" class="dropzone">
                            <input type="hidden" name="ds_2019">
                            <input type="hidden" name="user_id" value="<?=$user_id?>">
                        </form>
                    <?php endif; ?>
                <?php } ?>
            <?php endif; ?>
        </div>
    </div>
</div>