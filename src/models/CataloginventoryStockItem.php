<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%cataloginventory_stock_item}}".
 *
 * @property integer $item_id
 * @property integer $product_id
 * @property integer $stock_id
 * @property string $qty
 * @property string $min_qty
 * @property integer $use_config_min_qty
 * @property integer $is_qty_decimal
 * @property integer $backorders
 * @property integer $use_config_backorders
 * @property string $min_sale_qty
 * @property integer $use_config_min_sale_qty
 * @property string $max_sale_qty
 * @property integer $use_config_max_sale_qty
 * @property integer $is_in_stock
 * @property string $low_stock_date
 * @property string $notify_stock_qty
 * @property integer $use_config_notify_stock_qty
 * @property integer $manage_stock
 * @property integer $use_config_manage_stock
 * @property integer $stock_status_changed_auto
 * @property integer $use_config_qty_increments
 * @property string $qty_increments
 * @property integer $use_config_enable_qty_inc
 * @property integer $enable_qty_increments
 * @property integer $is_decimal_divided
 * @property integer $website_id
 *
 * @property CatalogProductEntity $product
 * @property CataloginventoryStock $stock
 */
class CataloginventoryStockItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cataloginventory_stock_item}}';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('magento2db');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'stock_id', 'use_config_min_qty', 'is_qty_decimal', 'backorders', 'use_config_backorders', 'use_config_min_sale_qty', 'use_config_max_sale_qty', 'is_in_stock', 'use_config_notify_stock_qty', 'manage_stock', 'use_config_manage_stock', 'stock_status_changed_auto', 'use_config_qty_increments', 'use_config_enable_qty_inc', 'enable_qty_increments', 'is_decimal_divided', 'website_id'], 'integer'],
            [['qty', 'min_qty', 'min_sale_qty', 'max_sale_qty', 'notify_stock_qty', 'qty_increments'], 'number'],
            [['low_stock_date'], 'safe'],
            [['product_id', 'website_id'], 'unique', 'targetAttribute' => ['product_id', 'website_id'], 'message' => 'The combination of Product Id and Is Divided into Multiple Boxes for Shipping has already been taken.'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => CatalogProductEntity::class, 'targetAttribute' => ['product_id' => 'entity_id']],
            [['stock_id'], 'exist', 'skipOnError' => true, 'targetClass' => CataloginventoryStock::class, 'targetAttribute' => ['stock_id' => 'stock_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_id' => Yii::t('magento2-dbmodels', 'Item Id'),
            'product_id' => Yii::t('magento2-dbmodels', 'Product Id'),
            'stock_id' => Yii::t('magento2-dbmodels', 'Stock Id'),
            'qty' => Yii::t('magento2-dbmodels', 'Qty'),
            'min_qty' => Yii::t('magento2-dbmodels', 'Min Qty'),
            'use_config_min_qty' => Yii::t('magento2-dbmodels', 'Use Config Min Qty'),
            'is_qty_decimal' => Yii::t('magento2-dbmodels', 'Is Qty Decimal'),
            'backorders' => Yii::t('magento2-dbmodels', 'Backorders'),
            'use_config_backorders' => Yii::t('magento2-dbmodels', 'Use Config Backorders'),
            'min_sale_qty' => Yii::t('magento2-dbmodels', 'Min Sale Qty'),
            'use_config_min_sale_qty' => Yii::t('magento2-dbmodels', 'Use Config Min Sale Qty'),
            'max_sale_qty' => Yii::t('magento2-dbmodels', 'Max Sale Qty'),
            'use_config_max_sale_qty' => Yii::t('magento2-dbmodels', 'Use Config Max Sale Qty'),
            'is_in_stock' => Yii::t('magento2-dbmodels', 'Is In Stock'),
            'low_stock_date' => Yii::t('magento2-dbmodels', 'Low Stock Date'),
            'notify_stock_qty' => Yii::t('magento2-dbmodels', 'Notify Stock Qty'),
            'use_config_notify_stock_qty' => Yii::t('magento2-dbmodels', 'Use Config Notify Stock Qty'),
            'manage_stock' => Yii::t('magento2-dbmodels', 'Manage Stock'),
            'use_config_manage_stock' => Yii::t('magento2-dbmodels', 'Use Config Manage Stock'),
            'stock_status_changed_auto' => Yii::t('magento2-dbmodels', 'Stock Status Changed Automatically'),
            'use_config_qty_increments' => Yii::t('magento2-dbmodels', 'Use Config Qty Increments'),
            'qty_increments' => Yii::t('magento2-dbmodels', 'Qty Increments'),
            'use_config_enable_qty_inc' => Yii::t('magento2-dbmodels', 'Use Config Enable Qty Increments'),
            'enable_qty_increments' => Yii::t('magento2-dbmodels', 'Enable Qty Increments'),
            'is_decimal_divided' => Yii::t('magento2-dbmodels', 'Is Divided into Multiple Boxes for Shipping'),
            'website_id' => Yii::t('magento2-dbmodels', 'Is Divided into Multiple Boxes for Shipping'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(CatalogProductEntity::class, ['entity_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStock()
    {
        return $this->hasOne(CataloginventoryStock::class, ['stock_id' => 'stock_id']);
    }
}
