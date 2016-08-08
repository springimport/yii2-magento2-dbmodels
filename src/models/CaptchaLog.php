<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%captcha_log}}".
 *
 * @property string $type
 * @property string $value
 * @property integer $count
 * @property string $updated_at
 */
class CaptchaLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%captcha_log}}';
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
            [['type', 'value'], 'required'],
            [['count'], 'integer'],
            [['updated_at'], 'safe'],
            [['type', 'value'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type' => Yii::t('magento2-dbmodels', 'Type'),
            'value' => Yii::t('magento2-dbmodels', 'Value'),
            'count' => Yii::t('magento2-dbmodels', 'Count'),
            'updated_at' => Yii::t('magento2-dbmodels', 'Update Time'),
        ];
    }
}
