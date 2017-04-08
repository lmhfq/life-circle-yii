<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;


?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="alert alert-danger">
        <?= nl2br(Html::encode($name)) ?>
        <?= nl2br(Html::encode($message)) ?>
        <?= YII_ENV_DEV ? nl2br(Html::encode($exception)) : '' ?>
    </div>

</div>
