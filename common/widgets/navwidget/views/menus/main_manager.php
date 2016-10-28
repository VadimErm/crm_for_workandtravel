<?php
/**
 * @var $view \yii\web\View
 */
use common\widgets\navwidget\NavWidget;
?>
<?= $this->render(NavWidget::MENUS_VIEW_PATH . 'manager', [
    'mainManagerMenuList' => $this->render(NavWidget::MENUS_VIEW_PATH . '_main_manager_menu')
]); ?>
