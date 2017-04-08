<?php
/**
 * 自定义路由
 */
return [
    '/' => 'wap',
    //'Wap/Index/storeInfo/sid/<id:\d+>' => 'wap/index',
    //"wap-index-<action:\w+>/<id:\d+>" => "wap-index/<action>",
    "<module:[-\w]+>/<controller:[-\w]+>/<action:[-\w]+><suffix:(.json)?>" => "<module>/<controller>/<action>",
    "<module:[-\w]+>/<controller:[-\w]+>/<action:[-\w]+>/<id:\d+>" => "<module>/<controller>/<action>",
    // 为路由指定一个别名简化网址
    //'reg' => 'user/register',
    // 加id参数，这里用到了一点点正则，\d+在正则中表示至少一位的纯数字
    //'article/<id:\d+>' => 'article/view',
    //标准的控制器/方法显示
    //'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
    //加id参数
    //'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',

    // controller和action进行严格限制
    //'<controller:(post|comment)>/<id:\d+>/<action:(create|update|delete)>'=> '<controller>/<action>',

    // 包含了 HTTP 方法限定，用于restful风格的Web Server
    //'DELETE <controller:\w+>/<id:\d+>' => '<controller>/delete',

    // 配置Web Server ,接收 *.cn09.com 域名的请求
    //'http://<user:\w+>.cn09.com/<lang:\w+>/profile' => 'user/profile',
    #  定义方法: public function actionSearch($name);   <name> 就是search方法传入的参数
    //'POST customer/api/search/<name>' => 'customer/api/search',
    //自定义接口路由 参照上面的方法

    //手机端
    "<module:[-\w]+>.<controller:[-\w]+>.<action:[-\w]+><suffix:(.json)?>" => "<module>/<controller>/<action>",
];