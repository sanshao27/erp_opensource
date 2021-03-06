<?php

namespace eagle\models;

use Yii;

/**
 * This is the model class for table "saas_priceminister_user".
 *
 * @property string $site_id
 * @property string $token
 * @property string $store_name
 * @property string $username
 * @property string $sync_type
 * @property string $sync_status
 * @property string $sync_info
 * @property string $token_expired_date
 * @property integer $sellerid
 * @property integer $is_active
 * @property string $uid
 * @property string $create_time
 * @property string $update_time
 * @property string $last_order_retrieve_time
 * @property string $last_order_success_retrieve_time
 * @property string $order_retrieve_message
 * @property string $last_product_retrieve_time
 * @property string $last_product_success_retrieve_time
 * @property string $product_retrieve_message
 * @property string $initial_fetched_changed_order_since
 * @property string $addi_info
 * @property string $routine_fetched_changed_order_from
 * @property string $shopname
 */
class SaasPriceministerUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'saas_priceminister_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'create_time'], 'required'],
            [['sync_info', 'order_retrieve_message', 'product_retrieve_message', 'addi_info'], 'string'],
            [['token_expired_date', 'create_time', 'update_time', 'last_order_retrieve_time', 'last_order_success_retrieve_time', 'last_product_retrieve_time', 'last_product_success_retrieve_time', 'initial_fetched_changed_order_since', 'routine_fetched_changed_order_from'], 'safe'],
            [['sellerid', 'is_active', 'uid'], 'integer'],
            [['token'], 'string', 'max' => 250],
            [['store_name'], 'string', 'max' => 50],
            [['username', 'shopname'], 'string', 'max' => 100],
            [['sync_type', 'sync_status'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'site_id' => 'Site ID',
            'token' => 'Token',
            'store_name' => 'Store Name',
            'username' => 'Username',
            'sync_type' => 'Sync Type',
            'sync_status' => 'Sync Status',
            'sync_info' => 'Sync Info',
            'token_expired_date' => 'Token Expired Date',
            'sellerid' => 'Sellerid',
            'is_active' => 'Is Active',
            'uid' => 'Uid',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'last_order_retrieve_time' => 'Last Order Retrieve Time',
            'last_order_success_retrieve_time' => 'Last Order Success Retrieve Time',
            'order_retrieve_message' => 'Order Retrieve Message',
            'last_product_retrieve_time' => 'Last Product Retrieve Time',
            'last_product_success_retrieve_time' => 'Last Product Success Retrieve Time',
            'product_retrieve_message' => 'Product Retrieve Message',
            'initial_fetched_changed_order_since' => 'Initial Fetched Changed Order Since',
            'addi_info' => 'Addi Info',
            'routine_fetched_changed_order_from' => 'Routine Fetched Changed Order From',
            'shopname' => 'Shopname',
        ];
    }
}
