<?php
/**
 * AuthController.php
 * @author  lmh <lmh@fshows.com|Q:991564110>
 * @link http://www.51youdian.com/
 * @copyright 2015-2016 51youdian.com
 * @package app\modules\wap\controllers\AuthController
 * @since 1.0
 * @date: 2016/10/14- 15:06
 */

namespace app\modules\wap\controllers;


use Wechat\Api;
use yii\helpers\Url;

class AuthController extends CommonController
{
    /**
     * @var array
     */
    public $apiInfo = [];

    public function init()
    {
        parent::init();
        $this->apiInfo = $this->getApiInfo();
    }

    /**
     * 增加授权初始化
     * @return array
     */
    public function behaviors()
    {
        return [
            'wechat' => [
                'class' => \app\components\WechatApiInitFilter::className(),
                'data' => $this->apiInfo
            ],
        ];
    }

    /**
     * 获取接口的数据 数据库查询或者写死
     * @return array
     */
    public function getApiInfo()
    {
        return [
            'appid' => '456466+4',
            'appsecret' => '5456'
        ];
    }

    /**
     * 生成outh URL
     */
    public function actionUrl()
    {

        $WxApi = Api::factory('Auth');
        $ret = $WxApi->url(Url::to(['auth/url'], true));
        if (!$ret) {
            $ret = $WxApi->getError();
        }
        echo $ret;
    }

    /**
     * 直接跳转授权
     */
    public function actionRedirect()
    {
        $WxApi = Api::factory('Auth');
        $ret = $WxApi->redirect();
        if (!$ret) {
            $ret = $WxApi->getError();
        }
        var_dump($ret);
    }

    /**
     * 获取用户信息
     */
    public function actionGetUser()
    {
        $WxApi = Api::factory('Auth');
        $request = \Yii::$app->request;
        if (!$request->get('state', false) || (!$code = $request->get('code', false)) && $request->get('state', false)) {
            $redirect = $WxApi->redirect();//直接跳转
        }
        $permission = $WxApi->getAccessPermission($code);//通过 code 获取 openid 和 access_token
        $ret = $WxApi->getUser($permission['openid'], $permission['access_token']);//获取用户信息
        if (!$ret) {
            $ret = $WxApi->getError();
        }
        var_dump($ret);
    }


    /**
     * 获取已授权用户
     */
    public function actionUser()
    {
        $WxApi = Api::factory('Auth');
        $request = \Yii::$app->request;
        if (!$request->get('state', false) || (!$code = $request->get('code', false)) && $request->get('state', false)) {
            $redirect = $WxApi->redirect();//直接跳转
        }
        $ret = $WxApi->user();//获取授权用户信息
        if (!$ret) {
            $ret = $WxApi->getError();
        }
        var_dump($ret);
    }

}