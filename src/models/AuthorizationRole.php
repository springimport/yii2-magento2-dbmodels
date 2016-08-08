<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%authorization_role}}".
 *
 * @property integer $role_id
 * @property integer $parent_id
 * @property integer $tree_level
 * @property integer $sort_order
 * @property string $role_type
 * @property integer $user_id
 * @property string $user_type
 * @property string $role_name
 *
 * @property AuthorizationRule[] $authorizationRules
 */
class AuthorizationRole extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%authorization_role}}';
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
            [['parent_id', 'tree_level', 'sort_order', 'user_id'], 'integer'],
            [['role_type'], 'string', 'max' => 1],
            [['user_type'], 'string', 'max' => 16],
            [['role_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'role_id' => Yii::t('magento2-dbmodels', 'Role ID'),
            'parent_id' => Yii::t('magento2-dbmodels', 'Parent Role ID'),
            'tree_level' => Yii::t('magento2-dbmodels', 'Role Tree Level'),
            'sort_order' => Yii::t('magento2-dbmodels', 'Role Sort Order'),
            'role_type' => Yii::t('magento2-dbmodels', 'Role Type'),
            'user_id' => Yii::t('magento2-dbmodels', 'User ID'),
            'user_type' => Yii::t('magento2-dbmodels', 'User Type'),
            'role_name' => Yii::t('magento2-dbmodels', 'Role Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthorizationRules()
    {
        return $this->hasMany(AuthorizationRule::className(),
        ['role_id' => 'role_id']);
    }
}
