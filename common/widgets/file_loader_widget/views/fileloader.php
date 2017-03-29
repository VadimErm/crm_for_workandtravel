<?php
use common\helpers\Url;
\backend\assets\SweetAlertAsset::register($this)
?>

    <div class="x_panel" style="height: auto">
        <div class="x_title">
            <h2>File</h2>
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
                <div class="uploaded-file">
                    <?php if($edit): ?>
                        <a href="javascript:void(0)" class="delete-file"><i class="fa fa-times"></i></a>
                    <?php endif; ?>
                    <img src="<?= Url::fileGet($fileId) ?>" alt="<?= $type ?>" width="600">
                </div>

            <?php } else { ?>
                <form action="<?= Url::filePush() ?>" id="<?= $type ?>" class="dropzone"  style="">
                    <input type="hidden" name="<?= $type ?>">
                    <input type="hidden" name="user_id" value="<?=$userId?>">
                </form>
            <?php } ?>
        </div>
    </div>

