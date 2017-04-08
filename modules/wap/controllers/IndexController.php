<?php

namespace app\modules\wap\controllers;


class IndexController extends CommonController
{

    /**
     * 首页接口
     * @param int $id
     * @return array
     */
    public function actionIndex($id = 0)
    {

        return $this->renderData('API test Ok!', 200);
    }

    /**
     * @return array
     */
    public function actionTest()
    {
        return $this->renderData('API test Ok!', 200);
    }

}
