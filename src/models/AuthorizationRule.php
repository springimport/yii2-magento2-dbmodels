<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%authorization_rule}}".
 *
 * @property integer $rule_id
 * @property integer $role_id
 * @property string $resource_id
 * @property string $privileges
 * @property string $permission
 *
 * @property AuthorizationRole $role
 */
class AuthorizationRule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%authorization_rule}}';
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
            [['role_id'], 'integer'],
            [['resource_id'], 'string', 'max' => 255],
            [['privileges'], 'string', 'max' => 20],
            [['permission'], 'string', 'max' => 10],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => AuthorizationRole::class, 'targetAttribute' => ['role_id' => 'role_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rule_id' => Yii::t('magento2-dbmodels', 'Rule ID'),
            'role_id' => Yii::t('magento2-dbmodels', 'Role ID'),
            'resource_id' => Yii::t('magento2-dbmodels', 'Resource ID'),
            'privileges' => Yii::t('magento2-dbmodels', 'Privileges'),
            'permission' => Yii::t('magento2-dbmodels', 'Permission'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(AuthorizationRole::class, ['role_id' => 'role_id']);
    }
}
