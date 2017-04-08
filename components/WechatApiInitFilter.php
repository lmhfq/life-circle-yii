<?php
/**
 * 微信API初始化过滤器组件
 * @param string $appid
 * @param string $appsecret 服务号APP_SECRET
 * @param string $originalid 服务号ORIGINAL_ID
 * @param string $token 服务号TOKEN
 * @param string $encoding_aes_key 服务号ENCODING_AES_KEY
 * @param string $apiurl 微信接口地址 APIURL 默认 微信接口 地址 可以 自定义 Proxy
 * @author  lmh <lmh@fshows.com|Q:991564110>
 * @link http://www.51youdian.com/
 * @copyright 2015-2016 51youdian.com
 * @package app\components\AuthInitFilter
 * @since 1.0
 * @date: 2016/10/14- 15:29
 */

namespace app\components;


use yii\base\ActionFilter;

class WechatApiInitFilter extends ActionFilter
{

    public $data = [
        'appid' => '',
        'appsecret' => '',
        'originalid' => '',
        'token' => '',
        'encoding_aes_key' => '',
    ];

    /**
     * @param \yii\base\Action $action
     * @return bool
     */
    public function beforeAction($action)
    {
        $this->initApi();
        return parent::beforeAction($action);
    }

    /**
     * 初始化API接口
     */
    public function initApi()
    {
        \Wechat\Api::init(
            $this->data['appid'],
            $this->data['appsecret'],
            isset($this->data['originalid']) ? $this->data['originalid'] : '',
            isset($this->data['token']) ? $this->data['token'] : '',
            isset($this->data['encoding_aes_key']) ? $this->data['encoding_aes_key'] : ''
        );
    }
}