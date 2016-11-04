<?php
/**
 * @var $model \common\models\LoginForm
 */
?>

<?php $form = \yii\widgets\ActiveForm::begin() ?>
        <h1>Sing in</h1>
        <div>
            <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username'])->label('') ?>
        </div>
        <div>
            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label('') ?>
        </div>
        <div>
            <?= \yii\helpers\Html::submitButton('sign in', [
                'class' => 'btn btn-default submit'
            ]) ?>
            <a class="reset_pass" href="#">Forgot your password?</a>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
            <div class="clearfix"></div>
            <br />

            <div>
                <h1>KCET</h1>
                <p>©2016 All rights reserved. KCET</p>
            </div>
        </div>
    </form>
<?php \yii\widgets\ActiveForm::end() ?>