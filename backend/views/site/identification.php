<?php
/**
 * @var $loaded boolean
 */
use common\helpers\Url;

?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel" style="height: auto;">
        <div class="x_title">
            <h2>Удостоверение личности</h2>
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
                <img src="<?= Url::fileGet('identification', $user_id) ?>" alt="Identification" width="500" height="300">
            <?php else : ?>
                <?php if($role === 'student') { ?>
                    <form action="<?= Url::filePush($user_id) ?>" class="dropzone">
                        <input type="hidden" name="identification">
                    </form>
                <?php } ?>

            <?php endif; ?>
        </div>
    </div>
</div>