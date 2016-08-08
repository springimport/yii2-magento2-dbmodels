<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%sales_order_address}}".
 *
 * @property integer $entity_id
 * @property integer $parent_id
 * @property integer $customer_address_id
 * @property integer $quote_address_id
 * @property integer $region_id
 * @property integer $customer_id
 * @property string $fax
 * @property string $region
 * @property string $postcode
 * @property string $lastname
 * @property string $street
 * @property string $city
 * @property string $email
 * @property string $telephone
 * @property string $country_id
 * @property string $firstname
 * @property string $address_type
 * @property string $prefix
 * @property string $middlename
 * @property string $suffix
 * @property string $company
 * @property string $vat_id
 * @property integer $vat_is_valid
 * @property string $vat_request_id
 * @property string $vat_request_date
 * @property integer $vat_request_success
 *
 * @property SalesOrder $parent
 */
class SalesOrderAddress extends \yii\db\ActiveRecord
{
    const BILLING_ADDRESS  = 'billing';
    const SHIPPING_ADDRESS = 'shipping';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sales_order_address}}';
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
            [['parent_id', 'customer_address_id', 'quote_address_id', 'region_id', 'customer_id', 'vat_is_valid', 'vat_request_success'], 'integer'],
            [['vat_id', 'vat_request_id', 'vat_request_date'], 'string'],
            [['fax', 'region', 'postcode', 'lastname', 'street', 'city', 'email', 'telephone', 'firstname', 'address_type', 'prefix', 'middlename', 'suffix', 'company'], 'string', 'max' => 255],
            [['country_id'], 'string', 'max' => 2],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => SalesOrder::className(), 'targetAttribute' => ['parent_id' => 'entity_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'entity_id' => Yii::t('magento2-dbmodels', 'Entity Id'),
            'parent_id' => Yii::t('magento2-dbmodels', 'Parent Id'),
            'customer_address_id' => Yii::t('magento2-dbmodels', 'Customer Address Id'),
            'quote_address_id' => Yii::t('magento2-dbmodels', 'Quote Address Id'),
            'region_id' => Yii::t('magento2-dbmodels', 'Region Id'),
            'customer_id' => Yii::t('magento2-dbmodels', 'Customer Id'),
            'fax' => Yii::t('magento2-dbmodels', 'Fax'),
            'region' => Yii::t('magento2-dbmodels', 'Region'),
            'postcode' => Yii::t('magento2-dbmodels', 'Postcode'),
            'lastname' => Yii::t('magento2-dbmodels', 'Lastname'),
            'street' => Yii::t('magento2-dbmodels', 'Street'),
            'city' => Yii::t('magento2-dbmodels', 'City'),
            'email' => Yii::t('magento2-dbmodels', 'Email'),
            'telephone' => Yii::t('magento2-dbmodels', 'Phone Number'),
            'country_id' => Yii::t('magento2-dbmodels', 'Country Id'),
            'firstname' => Yii::t('magento2-dbmodels', 'Firstname'),
            'address_type' => Yii::t('magento2-dbmodels', 'Address Type'),
            'prefix' => Yii::t('magento2-dbmodels', 'Prefix'),
            'middlename' => Yii::t('magento2-dbmodels', 'Middlename'),
            'suffix' => Yii::t('magento2-dbmodels', 'Suffix'),
            'company' => Yii::t('magento2-dbmodels', 'Company'),
            'vat_id' => Yii::t('magento2-dbmodels', 'Vat Id'),
            'vat_is_valid' => Yii::t('magento2-dbmodels', 'Vat Is Valid'),
            'vat_request_id' => Yii::t('magento2-dbmodels', 'Vat Request Id'),
            'vat_request_date' => Yii::t('magento2-dbmodels', 'Vat Request Date'),
            'vat_request_success' => Yii::t('magento2-dbmodels', 'Vat Request Success'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(SalesOrder::className(), ['entity_id' => 'parent_id']);
    }
}
