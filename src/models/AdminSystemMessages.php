<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%admin_system_messages}}".
 *
 * @property string $identity
 * @property integer $severity
 * @property string $created_at
 */
class AdminSystemMessages extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin_system_messages}}';
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
            [['identity'], 'required'],
            [['severity'], 'integer'],
            [['created_at'], 'safe'],
            [['identity'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'identity' => Yii::t('magento2-dbmodels', 'Message id'),
            'severity' => Yii::t('magento2-dbmodels', 'Problem type'),
            'created_at' => Yii::t('magento2-dbmodels', 'Create date'),
        ];
    }
}
