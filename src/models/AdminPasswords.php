<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%admin_passwords}}".
 *
 * @property integer $password_id
 * @property integer $user_id
 * @property string $password_hash
 * @property integer $expires
 * @property integer $last_updated
 *
 * @property AdminUser $user
 */
class AdminPasswords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin_passwords}}';
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
            [['user_id', 'expires', 'last_updated'], 'integer'],
            [['password_hash'], 'string', 'max' => 100],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdminUser::class, 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'password_id' => Yii::t('magento2-dbmodels', 'Password Id'),
            'user_id' => Yii::t('magento2-dbmodels', 'User Id'),
            'password_hash' => Yii::t('magento2-dbmodels', 'Password Hash'),
            'expires' => Yii::t('magento2-dbmodels', 'Expires'),
            'last_updated' => Yii::t('magento2-dbmodels', 'Last Updated'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(AdminUser::class, ['user_id' => 'user_id']);
    }
}
