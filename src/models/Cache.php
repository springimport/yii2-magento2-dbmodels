<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%cache}}".
 *
 * @property string $id
 * @property string $data
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $expire_time
 */
class Cache extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cache}}';
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
            [['id'], 'required'],
            [['data'], 'string'],
            [['create_time', 'update_time', 'expire_time'], 'integer'],
            [['id'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('magento2-dbmodels', 'Cache Id'),
            'data' => Yii::t('magento2-dbmodels', 'Cache Data'),
            'create_time' => Yii::t('magento2-dbmodels', 'Cache Creation Time'),
            'update_time' => Yii::t('magento2-dbmodels', 'Time of Cache Updating'),
            'expire_time' => Yii::t('magento2-dbmodels', 'Cache Expiration Time'),
        ];
    }
}
