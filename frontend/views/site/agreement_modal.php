<?php
use yii\helpers\Html;

?>

<div class="modal fade" id="agreementModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Соглашение</h4>
            </div>
            <div class="modal-body">
                <?= Html::encode($agreement->agreement) ?>
            </div>
            <div class="modal-footer">
                <div class="row  agree">

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="check"> Мною внимательно прочитаны все пункты,
                               я принимаю и соглашаюсь со всеми условиями
                               программы, готов соблюдать данное соглашение
                        </label>
                    </div>

                </div>
                <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary confirm" disabled="disabled">Принимаю</button>
            </div>
        </div>
    </div>
</div>