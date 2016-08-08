<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%adminnotification_inbox}}".
 *
 * @property integer $notification_id
 * @property integer $severity
 * @property string $date_added
 * @property string $title
 * @property string $description
 * @property string $url
 * @property integer $is_read
 * @property integer $is_remove
 */
class AdminnotificationInbox extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%adminnotification_inbox}}';
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
            [['severity', 'is_read', 'is_remove'], 'integer'],
            [['date_added'], 'safe'],
            [['title'], 'required'],
            [['description'], 'string'],
            [['title', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'notification_id' => Yii::t('magento2-dbmodels', 'Notification id'),
            'severity' => Yii::t('magento2-dbmodels', 'Problem type'),
            'date_added' => Yii::t('magento2-dbmodels', 'Create date'),
            'title' => Yii::t('magento2-dbmodels', 'Title'),
            'description' => Yii::t('magento2-dbmodels', 'Description'),
            'url' => Yii::t('magento2-dbmodels', 'Url'),
            'is_read' => Yii::t('magento2-dbmodels', 'Flag if notification read'),
            'is_remove' => Yii::t('magento2-dbmodels',
            'Flag if notification might be removed'),
        ];
    }
}
