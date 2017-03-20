<?php
use common\helpers\Url;
\backend\assets\SweetAlertAsset::register($this)
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel" style="height: auto">
        <div class="x_title">
            <h2>Application for reject</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link" id="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
        <div class="x_content"   style="">
            <?php if ($loaded) { ?>
                <img src="<?= Url::fileGet('reject_application', $user_id) ?>" alt="Application for reject" width="500" height="300">
            <?php } else { ?>
                <form action="<?= Url::filePush() ?>" id="reject_application" class="dropzone" style="">
                    <input type="hidden" name="reject_application">
                    <input type="hidden" name="user_id" value="<?=$user_id?>">
                </form>
            <?php } ?>
        </div>
    </div>
</div>