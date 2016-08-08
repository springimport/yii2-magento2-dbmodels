<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%cataloginventory_stock}}".
 *
 * @property integer $stock_id
 * @property integer $website_id
 * @property string $stock_name
 *
 * @property CataloginventoryStockItem[] $cataloginventoryStockItems
 */
class CataloginventoryStock extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cataloginventory_stock}}';
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
            [['website_id'], 'required'],
            [['website_id'], 'integer'],
            [['stock_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stock_id' => Yii::t('magento2-dbmodels', 'Stock Id'),
            'website_id' => Yii::t('magento2-dbmodels', 'Website Id'),
            'stock_name' => Yii::t('magento2-dbmodels', 'Stock Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCataloginventoryStockItems()
    {
        return $this->hasMany(CataloginventoryStockItem::className(),
        ['stock_id' => 'stock_id']);
    }
}
