<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%customer_address_entity}}".
 *
 * @property integer $entity_id
 * @property string $increment_id
 * @property integer $parent_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $is_active
 * @property string $city
 * @property string $company
 * @property string $country_id
 * @property string $fax
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property string $postcode
 * @property string $prefix
 * @property string $region
 * @property integer $region_id
 * @property string $street
 * @property string $suffix
 * @property string $telephone
 * @property string $vat_id
 * @property integer $vat_is_valid
 * @property string $vat_request_date
 * @property string $vat_request_id
 * @property integer $vat_request_success
 *
 * @property CustomerEntity $parent
 * @property CustomerAddressEntityDatetime[] $customerAddressEntityDatetimes
 * @property EavAttribute[] $attributes
 * @property CustomerAddressEntityDecimal[] $customerAddressEntityDecimals
 * @property EavAttribute[] $attributes0
 * @property CustomerAddressEntityInt[] $customerAddressEntityInts
 * @property EavAttribute[] $attributes1
 * @property CustomerAddressEntityText[] $customerAddressEntityTexts
 * @property EavAttribute[] $attributes2
 * @property CustomerAddressEntityVarchar[] $customerAddressEntityVarchars
 * @property EavAttribute[] $attributes3
 */
class CustomerAddressEntity extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%customer_address_entity}}';
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
            [['parent_id', 'is_active', 'region_id', 'vat_is_valid', 'vat_request_success'],
                'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['city', 'country_id', 'firstname', 'lastname', 'street', 'telephone'],
                'required'],
            [['street'], 'string'],
            [['increment_id'], 'string', 'max' => 50],
            [['city', 'company', 'country_id', 'fax', 'firstname', 'lastname', 'middlename',
                    'postcode', 'region', 'telephone', 'vat_id', 'vat_request_date',
                    'vat_request_id'], 'string', 'max' => 255],
            [['prefix', 'suffix'], 'string', 'max' => 40],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerEntity::className(),
                'targetAttribute' => ['parent_id' => 'entity_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'entity_id' => Yii::t('magento2-dbmodels', 'Entity Id'),
            'increment_id' => Yii::t('magento2-dbmodels', 'Increment Id'),
            'parent_id' => Yii::t('magento2-dbmodels', 'Parent Id'),
            'created_at' => Yii::t('magento2-dbmodels', 'Created At'),
            'updated_at' => Yii::t('magento2-dbmodels', 'Updated At'),
            'is_active' => Yii::t('magento2-dbmodels', 'Is Active'),
            'city' => Yii::t('magento2-dbmodels', 'City'),
            'company' => Yii::t('magento2-dbmodels', 'Company'),
            'country_id' => Yii::t('magento2-dbmodels', 'Country'),
            'fax' => Yii::t('magento2-dbmodels', 'Fax'),
            'firstname' => Yii::t('magento2-dbmodels', 'First Name'),
            'lastname' => Yii::t('magento2-dbmodels', 'Last Name'),
            'middlename' => Yii::t('magento2-dbmodels', 'Middle Name'),
            'postcode' => Yii::t('magento2-dbmodels', 'Zip/Postal Code'),
            'prefix' => Yii::t('magento2-dbmodels', 'Prefix'),
            'region' => Yii::t('magento2-dbmodels', 'State/Province'),
            'region_id' => Yii::t('magento2-dbmodels', 'State/Province'),
            'street' => Yii::t('magento2-dbmodels', 'Street Address'),
            'suffix' => Yii::t('magento2-dbmodels', 'Suffix'),
            'telephone' => Yii::t('magento2-dbmodels', 'Phone Number'),
            'vat_id' => Yii::t('magento2-dbmodels', 'VAT number'),
            'vat_is_valid' => Yii::t('magento2-dbmodels', 'VAT number validity'),
            'vat_request_date' => Yii::t('magento2-dbmodels',
            'VAT number validation request date'),
            'vat_request_id' => Yii::t('magento2-dbmodels',
            'VAT number validation request ID'),
            'vat_request_success' => Yii::t('magento2-dbmodels',
            'VAT number validation request success'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(CustomerEntity::className(),
        ['entity_id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAddressEntityDatetimes()
    {
        return $this->hasMany(CustomerAddressEntityDatetime::className(),
        ['entity_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributes()
    {
        return $this->hasMany(EavAttribute::className(),
        ['attribute_id' => 'attribute_id'])->viaTable('{{%customer_address_entity_datetime}}',
        ['entity_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAddressEntityDecimals()
    {
        return $this->hasMany(CustomerAddressEntityDecimal::className(),
        ['entity_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributes0()
    {
        return $this->hasMany(EavAttribute::className(),
        ['attribute_id' => 'attribute_id'])->viaTable('{{%customer_address_entity_decimal}}',
        ['entity_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAddressEntityInts()
    {
        return $this->hasMany(CustomerAddressEntityInt::className(),
        ['entity_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributes1()
    {
        return $this->hasMany(EavAttribute::className(),
        ['attribute_id' => 'attribute_id'])->viaTable('{{%customer_address_entity_int}}',
        ['entity_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAddressEntityTexts()
    {
        return $this->hasMany(CustomerAddressEntityText::className(),
        ['entity_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributes2()
    {
        return $this->hasMany(EavAttribute::className(),
        ['attribute_id' => 'attribute_id'])->viaTable('{{%customer_address_entity_text}}',
        ['entity_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAddressEntityVarchars()
    {
        return $this->hasMany(CustomerAddressEntityVarchar::className(),
        ['entity_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributes3()
    {
        return $this->hasMany(EavAttribute::className(),
        ['attribute_id' => 'attribute_id'])->viaTable('{{%customer_address_entity_varchar}}',
        ['entity_id' => 'entity_id']);
    }
}
