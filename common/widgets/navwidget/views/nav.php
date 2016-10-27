<?php
/**
 * @var $this \yii\web\View
 * @var $role string
 */
?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>
            <?php if ($role == 'student') : ?>
                <span class="label label-warning">В ожидании</span>
            <?php else : ?>
                <span class="label label-warning" style="visibility: hidden;">Менеджер</span>
            <?php endif; ?>
        </h3>
        <?= $this->render('menus/' . $role) ?>
    </div>
</div>