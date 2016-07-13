<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%cataloginventory_stock_status}}".
 *
 * @property integer $product_id
 * @property integer $website_id
 * @property integer $stock_id
 * @property string $qty
 * @property integer $stock_status
 */
class CataloginventoryStockStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cataloginventory_stock_status}}';
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
            [['product_id', 'website_id', 'stock_id', 'stock_status'], 'required'],
            [['product_id', 'website_id', 'stock_id', 'stock_status'], 'integer'],
            [['qty'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => Yii::t('magento2-dbmodels', 'Product Id'),
            'website_id' => Yii::t('magento2-dbmodels', 'Website Id'),
            'stock_id' => Yii::t('magento2-dbmodels', 'Stock Id'),
            'qty' => Yii::t('magento2-dbmodels', 'Qty'),
            'stock_status' => Yii::t('magento2-dbmodels', 'Stock Status'),
        ];
    }
}
