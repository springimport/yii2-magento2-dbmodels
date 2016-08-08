<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%cache_tag}}".
 *
 * @property string $tag
 * @property string $cache_id
 */
class CacheTag extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cache_tag}}';
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
            [['tag', 'cache_id'], 'required'],
            [['tag'], 'string', 'max' => 100],
            [['cache_id'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tag' => Yii::t('magento2-dbmodels', 'Tag'),
            'cache_id' => Yii::t('magento2-dbmodels', 'Cache Id'),
        ];
    }
}
