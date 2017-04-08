<?php
/**
 * CommonController
 * @author  lmh <lmh@fshows.com|Q:991564110>
 * @link http://www.51youdian.com/
 * @copyright 2015-2016 51youdian.com
 * @package app\modules\wap\controllers\BaseController
 * @since 1.0
 * @date: 2016/10/12- 11:04
 */

namespace app\modules\wap\controllers;


use yii\web\Controller;

class CommonController extends Controller
{
    /**
     * @var bool
     */
    public $enableCsrfValidation = false;

    /**
     * 过滤器
     * 如果有其他需求子类重载此方法即可默认json
     * @return array
     */
    public function behaviors()
    {
        return [
            [
                'class' => \yii\filters\ContentNegotiator::className(),
                'formats' => [
                    'application/json' => \yii\web\Response::FORMAT_JSON,
                ]
            ],
        ];
    }

    /**
     * 返回信息的集合
     * @param string $messages
     * @param int $code
     * @param array $data
     * @param null $subMessage
     * @return array
     */
    public function renderData($messages = '', $code = 200, $data = [], $subMessage = null)
    {

        $return = [
            'message' => $messages,
            'sub_message' => !is_null($subMessage) ? $subMessage : $messages,
            'code' => $code
        ];
        return empty($data) ? $return : array_merge($return, ['data' => $data]);
    }


}