<?php

namespace app\modules\wap;

/**
 * wap module definition class
 * config info
 */
class Index extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\wap\controllers';

    public $layout = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
