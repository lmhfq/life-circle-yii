<?php

namespace app\modules\wap\models;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property integer $id
 * @property integer $belong
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $company
 * @property string $companyaddress
 * @property string $people
 * @property string $createtime
 * @property string $status
 * @property string $viptime
 * @property string $contact
 * @property integer $role_id
 * @property integer $parent_id
 * @property string $province
 * @property string $city
 * @property string $area
 * @property integer $platform
 * @property integer $salesman
 * @property integer $mcard_status
 * @property integer $is_alipay
 * @property string $mobile
 * @property string $lasttime
 * @property integer $latestOnlineTime
 * @property integer $onlineTime
 * @property integer $lifecircle_time
 * @property integer $isPush
 * @property integer $recharge_limit
 * @property string $users_token
 * @property string $users_headerpic
 * @property string $lastip
 * @property string $store_id
 * @property string $qq
 * @property string $real_name
 * @property integer $pay_limit
 * @property integer $isEmsCnplPush
 * @property integer $api_user
 */
class TpUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['belong', 'role_id', 'parent_id', 'platform', 'salesman', 'mcard_status', 'is_alipay', 'latestOnlineTime', 'onlineTime', 'lifecircle_time', 'isPush', 'recharge_limit', 'pay_limit', 'isEmsCnplPush', 'api_user'], 'integer'],
            [['username'], 'string', 'max' => 60],
            [['password'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 90],
            [['company', 'companyaddress'], 'string', 'max' => 100],
            [['people', 'store_id', 'real_name'], 'string', 'max' => 20],
            [['createtime', 'viptime', 'contact', 'lasttime'], 'string', 'max' => 13],
            [['status'], 'string', 'max' => 1],
            [['province', 'city', 'area', 'users_token'], 'string', 'max' => 50],
            [['mobile'], 'string', 'max' => 11],
            [['users_headerpic', 'qq'], 'string', 'max' => 255],
            [['lastip'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'belong' => 'Belong',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'company' => 'Company',
            'companyaddress' => 'Companyaddress',
            'people' => 'People',
            'createtime' => 'Createtime',
            'status' => 'Status',
            'viptime' => 'Viptime',
            'contact' => 'Contact',
            'role_id' => 'Role ID',
            'parent_id' => 'Parent ID',
            'province' => 'Province',
            'city' => 'City',
            'area' => 'Area',
            'platform' => 'Platform',
            'salesman' => 'Salesman',
            'mcard_status' => 'Mcard Status',
            'is_alipay' => 'Is Alipay',
            'mobile' => 'Mobile',
            'lasttime' => 'Lasttime',
            'latestOnlineTime' => 'Latest Online Time',
            'onlineTime' => 'Online Time',
            'lifecircle_time' => 'Lifecircle Time',
            'isPush' => 'Is Push',
            'recharge_limit' => 'Recharge Limit',
            'users_token' => 'Users Token',
            'users_headerpic' => 'Users Headerpic',
            'lastip' => 'Lastip',
            'store_id' => 'Store ID',
            'qq' => 'Qq',
            'real_name' => 'Real Name',
            'pay_limit' => 'Pay Limit',
            'isEmsCnplPush' => 'Is Ems Cnpl Push',
            'api_user' => 'Api User',
        ];
    }
}
