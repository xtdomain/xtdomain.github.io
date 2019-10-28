<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Post */

$this->title = 'Обновить Пост: ';
$lock = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-update">

    <h1><b><?= Html::encode($this->title) ?></b><?= Html::encode($lock) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
