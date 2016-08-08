<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%admin_user}}".
 *
 * @property integer $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $created
 * @property string $modified
 * @property string $logdate
 * @property integer $lognum
 * @property integer $reload_acl_flag
 * @property integer $is_active
 * @property string $extra
 * @property string $rp_token
 * @property string $rp_token_created_at
 * @property string $interface_locale
 * @property integer $failures_num
 * @property string $first_failure
 * @property string $lock_expires
 *
 * @property AdminPasswords[] $adminPasswords
 * @property OauthToken[] $oauthTokens
 * @property UiBookmark[] $uiBookmarks
 */
class AdminUser extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin_user}}';
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
            [['password'], 'required'],
            [['created', 'modified', 'logdate', 'rp_token_created_at', 'first_failure',
                    'lock_expires'], 'safe'],
            [['lognum', 'reload_acl_flag', 'is_active', 'failures_num'], 'integer'],
            [['extra', 'rp_token'], 'string'],
            [['firstname', 'lastname'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 128],
            [['username'], 'string', 'max' => 40],
            [['password'], 'string', 'max' => 255],
            [['interface_locale'], 'string', 'max' => 16],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('magento2-dbmodels', 'User ID'),
            'firstname' => Yii::t('magento2-dbmodels', 'User First Name'),
            'lastname' => Yii::t('magento2-dbmodels', 'User Last Name'),
            'email' => Yii::t('magento2-dbmodels', 'User Email'),
            'username' => Yii::t('magento2-dbmodels', 'User Login'),
            'password' => Yii::t('magento2-dbmodels', 'User Password'),
            'created' => Yii::t('magento2-dbmodels', 'User Created Time'),
            'modified' => Yii::t('magento2-dbmodels', 'User Modified Time'),
            'logdate' => Yii::t('magento2-dbmodels', 'User Last Login Time'),
            'lognum' => Yii::t('magento2-dbmodels', 'User Login Number'),
            'reload_acl_flag' => Yii::t('magento2-dbmodels', 'Reload ACL'),
            'is_active' => Yii::t('magento2-dbmodels', 'User Is Active'),
            'extra' => Yii::t('magento2-dbmodels', 'User Extra Data'),
            'rp_token' => Yii::t('magento2-dbmodels',
            'Reset Password Link Token'),
            'rp_token_created_at' => Yii::t('magento2-dbmodels',
            'Reset Password Link Token Creation Date'),
            'interface_locale' => Yii::t('magento2-dbmodels',
            'Backend interface locale'),
            'failures_num' => Yii::t('magento2-dbmodels', 'Failure Number'),
            'first_failure' => Yii::t('magento2-dbmodels', 'First Failure'),
            'lock_expires' => Yii::t('magento2-dbmodels',
            'Expiration Lock Dates'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdminPasswords()
    {
        return $this->hasMany(AdminPasswords::className(),
        ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOauthTokens()
    {
        return $this->hasMany(OauthToken::className(), ['admin_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUiBookmarks()
    {
        return $this->hasMany(UiBookmark::className(), ['user_id' => 'user_id']);
    }
}
