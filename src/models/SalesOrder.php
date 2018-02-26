<?php

namespace SpringImport\yii2\magento2\dbmodels\models;

use Yii;

/**
 * This is the model class for table "{{%sales_order}}".
 *
 * @property integer $entity_id
 * @property string $state
 * @property string $status
 * @property string $coupon_code
 * @property string $protect_code
 * @property string $shipping_description
 * @property integer $is_virtual
 * @property integer $store_id
 * @property integer $customer_id
 * @property string $base_discount_amount
 * @property string $base_discount_canceled
 * @property string $base_discount_invoiced
 * @property string $base_discount_refunded
 * @property string $base_grand_total
 * @property string $base_shipping_amount
 * @property string $base_shipping_canceled
 * @property string $base_shipping_invoiced
 * @property string $base_shipping_refunded
 * @property string $base_shipping_tax_amount
 * @property string $base_shipping_tax_refunded
 * @property string $base_subtotal
 * @property string $base_subtotal_canceled
 * @property string $base_subtotal_invoiced
 * @property string $base_subtotal_refunded
 * @property string $base_tax_amount
 * @property string $base_tax_canceled
 * @property string $base_tax_invoiced
 * @property string $base_tax_refunded
 * @property string $base_to_global_rate
 * @property string $base_to_order_rate
 * @property string $base_total_canceled
 * @property string $base_total_invoiced
 * @property string $base_total_invoiced_cost
 * @property string $base_total_offline_refunded
 * @property string $base_total_online_refunded
 * @property string $base_total_paid
 * @property string $base_total_qty_ordered
 * @property string $base_total_refunded
 * @property string $discount_amount
 * @property string $discount_canceled
 * @property string $discount_invoiced
 * @property string $discount_refunded
 * @property string $grand_total
 * @property string $shipping_amount
 * @property string $shipping_canceled
 * @property string $shipping_invoiced
 * @property string $shipping_refunded
 * @property string $shipping_tax_amount
 * @property string $shipping_tax_refunded
 * @property string $store_to_base_rate
 * @property string $store_to_order_rate
 * @property string $subtotal
 * @property string $subtotal_canceled
 * @property string $subtotal_invoiced
 * @property string $subtotal_refunded
 * @property string $tax_amount
 * @property string $tax_canceled
 * @property string $tax_invoiced
 * @property string $tax_refunded
 * @property string $total_canceled
 * @property string $total_invoiced
 * @property string $total_offline_refunded
 * @property string $total_online_refunded
 * @property string $total_paid
 * @property string $total_qty_ordered
 * @property string $total_refunded
 * @property integer $can_ship_partially
 * @property integer $can_ship_partially_item
 * @property integer $customer_is_guest
 * @property integer $customer_note_notify
 * @property integer $billing_address_id
 * @property integer $customer_group_id
 * @property integer $edit_increment
 * @property integer $email_sent
 * @property integer $send_email
 * @property integer $forced_shipment_with_invoice
 * @property integer $payment_auth_expiration
 * @property integer $quote_address_id
 * @property integer $quote_id
 * @property integer $shipping_address_id
 * @property string $adjustment_negative
 * @property string $adjustment_positive
 * @property string $base_adjustment_negative
 * @property string $base_adjustment_positive
 * @property string $base_shipping_discount_amount
 * @property string $base_subtotal_incl_tax
 * @property string $base_total_due
 * @property string $payment_authorization_amount
 * @property string $shipping_discount_amount
 * @property string $subtotal_incl_tax
 * @property string $total_due
 * @property string $weight
 * @property string $customer_dob
 * @property string $increment_id
 * @property string $applied_rule_ids
 * @property string $base_currency_code
 * @property string $customer_email
 * @property string $customer_firstname
 * @property string $customer_lastname
 * @property string $customer_middlename
 * @property string $customer_prefix
 * @property string $customer_suffix
 * @property string $customer_taxvat
 * @property string $discount_description
 * @property string $ext_customer_id
 * @property string $ext_order_id
 * @property string $global_currency_code
 * @property string $hold_before_state
 * @property string $hold_before_status
 * @property string $order_currency_code
 * @property string $original_increment_id
 * @property string $relation_child_id
 * @property string $relation_child_real_id
 * @property string $relation_parent_id
 * @property string $relation_parent_real_id
 * @property string $remote_ip
 * @property string $shipping_method
 * @property string $store_currency_code
 * @property string $store_name
 * @property string $x_forwarded_for
 * @property string $customer_note
 * @property string $created_at
 * @property string $updated_at
 * @property integer $total_item_count
 * @property integer $customer_gender
 * @property string $discount_tax_compensation_amount
 * @property string $base_discount_tax_compensation_amount
 * @property string $shipping_discount_tax_compensation_amount
 * @property string $base_shipping_discount_tax_compensation_amnt
 * @property string $discount_tax_compensation_invoiced
 * @property string $base_discount_tax_compensation_invoiced
 * @property string $discount_tax_compensation_refunded
 * @property string $base_discount_tax_compensation_refunded
 * @property string $shipping_incl_tax
 * @property string $base_shipping_incl_tax
 * @property string $coupon_rule_name
 * @property integer $gift_message_id
 * @property integer $paypal_ipn_customer_notified
 *
 * @property DownloadableLinkPurchased[] $downloadableLinkPurchaseds
 * @property PaypalBillingAgreementOrder[] $paypalBillingAgreementOrders
 * @property PaypalBillingAgreement[] $agreements
 * @property SalesCreditmemo[] $salesCreditmemos
 * @property SalesInvoice[] $salesInvoices
 * @property CustomerEntity $customer
 * @property Store $store
 * @property SalesOrderAddress[] $salesOrderAddresses
 * @property SalesOrderItem[] $salesOrderItems
 * @property SalesOrderPayment[] $salesOrderPayments
 * @property SalesOrderStatusHistory[] $salesOrderStatusHistories
 * @property SalesPaymentTransaction[] $salesPaymentTransactions
 * @property SalesShipment[] $salesShipments
 */
class SalesOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sales_order}}';
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
            [['is_virtual', 'store_id', 'customer_id', 'can_ship_partially', 'can_ship_partially_item', 'customer_is_guest', 'customer_note_notify', 'billing_address_id', 'customer_group_id', 'edit_increment', 'email_sent', 'send_email', 'forced_shipment_with_invoice', 'payment_auth_expiration', 'quote_address_id', 'quote_id', 'shipping_address_id', 'total_item_count', 'customer_gender', 'gift_message_id', 'paypal_ipn_customer_notified'], 'integer'],
            [['base_discount_amount', 'base_discount_canceled', 'base_discount_invoiced', 'base_discount_refunded', 'base_grand_total', 'base_shipping_amount', 'base_shipping_canceled', 'base_shipping_invoiced', 'base_shipping_refunded', 'base_shipping_tax_amount', 'base_shipping_tax_refunded', 'base_subtotal', 'base_subtotal_canceled', 'base_subtotal_invoiced', 'base_subtotal_refunded', 'base_tax_amount', 'base_tax_canceled', 'base_tax_invoiced', 'base_tax_refunded', 'base_to_global_rate', 'base_to_order_rate', 'base_total_canceled', 'base_total_invoiced', 'base_total_invoiced_cost', 'base_total_offline_refunded', 'base_total_online_refunded', 'base_total_paid', 'base_total_qty_ordered', 'base_total_refunded', 'discount_amount', 'discount_canceled', 'discount_invoiced', 'discount_refunded', 'grand_total', 'shipping_amount', 'shipping_canceled', 'shipping_invoiced', 'shipping_refunded', 'shipping_tax_amount', 'shipping_tax_refunded', 'store_to_base_rate', 'store_to_order_rate', 'subtotal', 'subtotal_canceled', 'subtotal_invoiced', 'subtotal_refunded', 'tax_amount', 'tax_canceled', 'tax_invoiced', 'tax_refunded', 'total_canceled', 'total_invoiced', 'total_offline_refunded', 'total_online_refunded', 'total_paid', 'total_qty_ordered', 'total_refunded', 'adjustment_negative', 'adjustment_positive', 'base_adjustment_negative', 'base_adjustment_positive', 'base_shipping_discount_amount', 'base_subtotal_incl_tax', 'base_total_due', 'payment_authorization_amount', 'shipping_discount_amount', 'subtotal_incl_tax', 'total_due', 'weight', 'discount_tax_compensation_amount', 'base_discount_tax_compensation_amount', 'shipping_discount_tax_compensation_amount', 'base_shipping_discount_tax_compensation_amnt', 'discount_tax_compensation_invoiced', 'base_discount_tax_compensation_invoiced', 'discount_tax_compensation_refunded', 'base_discount_tax_compensation_refunded', 'shipping_incl_tax', 'base_shipping_incl_tax'], 'number'],
            [['customer_dob', 'created_at', 'updated_at'], 'safe'],
            [['customer_note'], 'string'],
            [['state', 'status', 'increment_id', 'customer_prefix', 'customer_suffix', 'customer_taxvat', 'ext_customer_id', 'ext_order_id', 'hold_before_state', 'hold_before_status', 'original_increment_id', 'relation_child_id', 'relation_child_real_id', 'relation_parent_id', 'relation_parent_real_id', 'remote_ip', 'shipping_method', 'store_name', 'x_forwarded_for'], 'string', 'max' => 32],
            [['coupon_code', 'protect_code', 'shipping_description', 'discount_description', 'coupon_rule_name'], 'string', 'max' => 255],
            [['applied_rule_ids', 'customer_email', 'customer_firstname', 'customer_lastname', 'customer_middlename'], 'string', 'max' => 128],
            [['base_currency_code', 'global_currency_code', 'order_currency_code', 'store_currency_code'], 'string', 'max' => 3],
            [['increment_id', 'store_id'], 'unique', 'targetAttribute' => ['increment_id', 'store_id'], 'message' => 'The combination of Store Id and Increment Id has already been taken.'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerEntity::class, 'targetAttribute' => ['customer_id' => 'entity_id']],
            [['store_id'], 'exist', 'skipOnError' => true, 'targetClass' => Store::class, 'targetAttribute' => ['store_id' => 'store_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'entity_id' => Yii::t('magento2-dbmodels', 'Entity Id'),
            'state' => Yii::t('magento2-dbmodels', 'State'),
            'status' => Yii::t('magento2-dbmodels', 'Status'),
            'coupon_code' => Yii::t('magento2-dbmodels', 'Coupon Code'),
            'protect_code' => Yii::t('magento2-dbmodels', 'Protect Code'),
            'shipping_description' => Yii::t('magento2-dbmodels', 'Shipping Description'),
            'is_virtual' => Yii::t('magento2-dbmodels', 'Is Virtual'),
            'store_id' => Yii::t('magento2-dbmodels', 'Store Id'),
            'customer_id' => Yii::t('magento2-dbmodels', 'Customer Id'),
            'base_discount_amount' => Yii::t('magento2-dbmodels', 'Base Discount Amount'),
            'base_discount_canceled' => Yii::t('magento2-dbmodels', 'Base Discount Canceled'),
            'base_discount_invoiced' => Yii::t('magento2-dbmodels', 'Base Discount Invoiced'),
            'base_discount_refunded' => Yii::t('magento2-dbmodels', 'Base Discount Refunded'),
            'base_grand_total' => Yii::t('magento2-dbmodels', 'Base Grand Total'),
            'base_shipping_amount' => Yii::t('magento2-dbmodels', 'Base Shipping Amount'),
            'base_shipping_canceled' => Yii::t('magento2-dbmodels', 'Base Shipping Canceled'),
            'base_shipping_invoiced' => Yii::t('magento2-dbmodels', 'Base Shipping Invoiced'),
            'base_shipping_refunded' => Yii::t('magento2-dbmodels', 'Base Shipping Refunded'),
            'base_shipping_tax_amount' => Yii::t('magento2-dbmodels', 'Base Shipping Tax Amount'),
            'base_shipping_tax_refunded' => Yii::t('magento2-dbmodels', 'Base Shipping Tax Refunded'),
            'base_subtotal' => Yii::t('magento2-dbmodels', 'Base Subtotal'),
            'base_subtotal_canceled' => Yii::t('magento2-dbmodels', 'Base Subtotal Canceled'),
            'base_subtotal_invoiced' => Yii::t('magento2-dbmodels', 'Base Subtotal Invoiced'),
            'base_subtotal_refunded' => Yii::t('magento2-dbmodels', 'Base Subtotal Refunded'),
            'base_tax_amount' => Yii::t('magento2-dbmodels', 'Base Tax Amount'),
            'base_tax_canceled' => Yii::t('magento2-dbmodels', 'Base Tax Canceled'),
            'base_tax_invoiced' => Yii::t('magento2-dbmodels', 'Base Tax Invoiced'),
            'base_tax_refunded' => Yii::t('magento2-dbmodels', 'Base Tax Refunded'),
            'base_to_global_rate' => Yii::t('magento2-dbmodels', 'Base To Global Rate'),
            'base_to_order_rate' => Yii::t('magento2-dbmodels', 'Base To Order Rate'),
            'base_total_canceled' => Yii::t('magento2-dbmodels', 'Base Total Canceled'),
            'base_total_invoiced' => Yii::t('magento2-dbmodels', 'Base Total Invoiced'),
            'base_total_invoiced_cost' => Yii::t('magento2-dbmodels', 'Base Total Invoiced Cost'),
            'base_total_offline_refunded' => Yii::t('magento2-dbmodels', 'Base Total Offline Refunded'),
            'base_total_online_refunded' => Yii::t('magento2-dbmodels', 'Base Total Online Refunded'),
            'base_total_paid' => Yii::t('magento2-dbmodels', 'Base Total Paid'),
            'base_total_qty_ordered' => Yii::t('magento2-dbmodels', 'Base Total Qty Ordered'),
            'base_total_refunded' => Yii::t('magento2-dbmodels', 'Base Total Refunded'),
            'discount_amount' => Yii::t('magento2-dbmodels', 'Discount Amount'),
            'discount_canceled' => Yii::t('magento2-dbmodels', 'Discount Canceled'),
            'discount_invoiced' => Yii::t('magento2-dbmodels', 'Discount Invoiced'),
            'discount_refunded' => Yii::t('magento2-dbmodels', 'Discount Refunded'),
            'grand_total' => Yii::t('magento2-dbmodels', 'Grand Total'),
            'shipping_amount' => Yii::t('magento2-dbmodels', 'Shipping Amount'),
            'shipping_canceled' => Yii::t('magento2-dbmodels', 'Shipping Canceled'),
            'shipping_invoiced' => Yii::t('magento2-dbmodels', 'Shipping Invoiced'),
            'shipping_refunded' => Yii::t('magento2-dbmodels', 'Shipping Refunded'),
            'shipping_tax_amount' => Yii::t('magento2-dbmodels', 'Shipping Tax Amount'),
            'shipping_tax_refunded' => Yii::t('magento2-dbmodels', 'Shipping Tax Refunded'),
            'store_to_base_rate' => Yii::t('magento2-dbmodels', 'Store To Base Rate'),
            'store_to_order_rate' => Yii::t('magento2-dbmodels', 'Store To Order Rate'),
            'subtotal' => Yii::t('magento2-dbmodels', 'Subtotal'),
            'subtotal_canceled' => Yii::t('magento2-dbmodels', 'Subtotal Canceled'),
            'subtotal_invoiced' => Yii::t('magento2-dbmodels', 'Subtotal Invoiced'),
            'subtotal_refunded' => Yii::t('magento2-dbmodels', 'Subtotal Refunded'),
            'tax_amount' => Yii::t('magento2-dbmodels', 'Tax Amount'),
            'tax_canceled' => Yii::t('magento2-dbmodels', 'Tax Canceled'),
            'tax_invoiced' => Yii::t('magento2-dbmodels', 'Tax Invoiced'),
            'tax_refunded' => Yii::t('magento2-dbmodels', 'Tax Refunded'),
            'total_canceled' => Yii::t('magento2-dbmodels', 'Total Canceled'),
            'total_invoiced' => Yii::t('magento2-dbmodels', 'Total Invoiced'),
            'total_offline_refunded' => Yii::t('magento2-dbmodels', 'Total Offline Refunded'),
            'total_online_refunded' => Yii::t('magento2-dbmodels', 'Total Online Refunded'),
            'total_paid' => Yii::t('magento2-dbmodels', 'Total Paid'),
            'total_qty_ordered' => Yii::t('magento2-dbmodels', 'Total Qty Ordered'),
            'total_refunded' => Yii::t('magento2-dbmodels', 'Total Refunded'),
            'can_ship_partially' => Yii::t('magento2-dbmodels', 'Can Ship Partially'),
            'can_ship_partially_item' => Yii::t('magento2-dbmodels', 'Can Ship Partially Item'),
            'customer_is_guest' => Yii::t('magento2-dbmodels', 'Customer Is Guest'),
            'customer_note_notify' => Yii::t('magento2-dbmodels', 'Customer Note Notify'),
            'billing_address_id' => Yii::t('magento2-dbmodels', 'Billing Address Id'),
            'customer_group_id' => Yii::t('magento2-dbmodels', 'Customer Group Id'),
            'edit_increment' => Yii::t('magento2-dbmodels', 'Edit Increment'),
            'email_sent' => Yii::t('magento2-dbmodels', 'Email Sent'),
            'send_email' => Yii::t('magento2-dbmodels', 'Send Email'),
            'forced_shipment_with_invoice' => Yii::t('magento2-dbmodels', 'Forced Do Shipment With Invoice'),
            'payment_auth_expiration' => Yii::t('magento2-dbmodels', 'Payment Authorization Expiration'),
            'quote_address_id' => Yii::t('magento2-dbmodels', 'Quote Address Id'),
            'quote_id' => Yii::t('magento2-dbmodels', 'Quote Id'),
            'shipping_address_id' => Yii::t('magento2-dbmodels', 'Shipping Address Id'),
            'adjustment_negative' => Yii::t('magento2-dbmodels', 'Adjustment Negative'),
            'adjustment_positive' => Yii::t('magento2-dbmodels', 'Adjustment Positive'),
            'base_adjustment_negative' => Yii::t('magento2-dbmodels', 'Base Adjustment Negative'),
            'base_adjustment_positive' => Yii::t('magento2-dbmodels', 'Base Adjustment Positive'),
            'base_shipping_discount_amount' => Yii::t('magento2-dbmodels', 'Base Shipping Discount Amount'),
            'base_subtotal_incl_tax' => Yii::t('magento2-dbmodels', 'Base Subtotal Incl Tax'),
            'base_total_due' => Yii::t('magento2-dbmodels', 'Base Total Due'),
            'payment_authorization_amount' => Yii::t('magento2-dbmodels', 'Payment Authorization Amount'),
            'shipping_discount_amount' => Yii::t('magento2-dbmodels', 'Shipping Discount Amount'),
            'subtotal_incl_tax' => Yii::t('magento2-dbmodels', 'Subtotal Incl Tax'),
            'total_due' => Yii::t('magento2-dbmodels', 'Total Due'),
            'weight' => Yii::t('magento2-dbmodels', 'Weight'),
            'customer_dob' => Yii::t('magento2-dbmodels', 'Customer Dob'),
            'increment_id' => Yii::t('magento2-dbmodels', 'Increment Id'),
            'applied_rule_ids' => Yii::t('magento2-dbmodels', 'Applied Rule Ids'),
            'base_currency_code' => Yii::t('magento2-dbmodels', 'Base Currency Code'),
            'customer_email' => Yii::t('magento2-dbmodels', 'Customer Email'),
            'customer_firstname' => Yii::t('magento2-dbmodels', 'Customer Firstname'),
            'customer_lastname' => Yii::t('magento2-dbmodels', 'Customer Lastname'),
            'customer_middlename' => Yii::t('magento2-dbmodels', 'Customer Middlename'),
            'customer_prefix' => Yii::t('magento2-dbmodels', 'Customer Prefix'),
            'customer_suffix' => Yii::t('magento2-dbmodels', 'Customer Suffix'),
            'customer_taxvat' => Yii::t('magento2-dbmodels', 'Customer Taxvat'),
            'discount_description' => Yii::t('magento2-dbmodels', 'Discount Description'),
            'ext_customer_id' => Yii::t('magento2-dbmodels', 'Ext Customer Id'),
            'ext_order_id' => Yii::t('magento2-dbmodels', 'Ext Order Id'),
            'global_currency_code' => Yii::t('magento2-dbmodels', 'Global Currency Code'),
            'hold_before_state' => Yii::t('magento2-dbmodels', 'Hold Before State'),
            'hold_before_status' => Yii::t('magento2-dbmodels', 'Hold Before Status'),
            'order_currency_code' => Yii::t('magento2-dbmodels', 'Order Currency Code'),
            'original_increment_id' => Yii::t('magento2-dbmodels', 'Original Increment Id'),
            'relation_child_id' => Yii::t('magento2-dbmodels', 'Relation Child Id'),
            'relation_child_real_id' => Yii::t('magento2-dbmodels', 'Relation Child Real Id'),
            'relation_parent_id' => Yii::t('magento2-dbmodels', 'Relation Parent Id'),
            'relation_parent_real_id' => Yii::t('magento2-dbmodels', 'Relation Parent Real Id'),
            'remote_ip' => Yii::t('magento2-dbmodels', 'Remote Ip'),
            'shipping_method' => Yii::t('magento2-dbmodels', 'Shipping Method'),
            'store_currency_code' => Yii::t('magento2-dbmodels', 'Store Currency Code'),
            'store_name' => Yii::t('magento2-dbmodels', 'Store Name'),
            'x_forwarded_for' => Yii::t('magento2-dbmodels', 'X Forwarded For'),
            'customer_note' => Yii::t('magento2-dbmodels', 'Customer Note'),
            'created_at' => Yii::t('magento2-dbmodels', 'Created At'),
            'updated_at' => Yii::t('magento2-dbmodels', 'Updated At'),
            'total_item_count' => Yii::t('magento2-dbmodels', 'Total Item Count'),
            'customer_gender' => Yii::t('magento2-dbmodels', 'Customer Gender'),
            'discount_tax_compensation_amount' => Yii::t('magento2-dbmodels', 'Discount Tax Compensation Amount'),
            'base_discount_tax_compensation_amount' => Yii::t('magento2-dbmodels', 'Base Discount Tax Compensation Amount'),
            'shipping_discount_tax_compensation_amount' => Yii::t('magento2-dbmodels', 'Shipping Discount Tax Compensation Amount'),
            'base_shipping_discount_tax_compensation_amnt' => Yii::t('magento2-dbmodels', 'Base Shipping Discount Tax Compensation Amount'),
            'discount_tax_compensation_invoiced' => Yii::t('magento2-dbmodels', 'Discount Tax Compensation Invoiced'),
            'base_discount_tax_compensation_invoiced' => Yii::t('magento2-dbmodels', 'Base Discount Tax Compensation Invoiced'),
            'discount_tax_compensation_refunded' => Yii::t('magento2-dbmodels', 'Discount Tax Compensation Refunded'),
            'base_discount_tax_compensation_refunded' => Yii::t('magento2-dbmodels', 'Base Discount Tax Compensation Refunded'),
            'shipping_incl_tax' => Yii::t('magento2-dbmodels', 'Shipping Incl Tax'),
            'base_shipping_incl_tax' => Yii::t('magento2-dbmodels', 'Base Shipping Incl Tax'),
            'coupon_rule_name' => Yii::t('magento2-dbmodels', 'Coupon Sales Rule Name'),
            'gift_message_id' => Yii::t('magento2-dbmodels', 'Gift Message Id'),
            'paypal_ipn_customer_notified' => Yii::t('magento2-dbmodels', 'Paypal Ipn Customer Notified'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDownloadableLinkPurchaseds()
    {
        return $this->hasMany(DownloadableLinkPurchased::class, ['order_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaypalBillingAgreementOrders()
    {
        return $this->hasMany(PaypalBillingAgreementOrder::class, ['order_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgreements()
    {
        return $this->hasMany(PaypalBillingAgreement::class, ['agreement_id' => 'agreement_id'])->viaTable('{{%paypal_billing_agreement_order}}', ['order_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalesCreditmemos()
    {
        return $this->hasMany(SalesCreditmemo::class, ['order_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalesInvoices()
    {
        return $this->hasMany(SalesInvoice::class, ['order_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(CustomerEntity::class, ['entity_id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStore()
    {
        return $this->hasOne(Store::class, ['store_id' => 'store_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalesOrderAddresses()
    {
        return $this->hasMany(SalesOrderAddress::class, ['parent_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalesOrderItems()
    {
        return $this->hasMany(SalesOrderItem::class, ['order_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalesOrderPayments()
    {
        return $this->hasMany(SalesOrderPayment::class, ['parent_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalesOrderStatusHistories()
    {
        return $this->hasMany(SalesOrderStatusHistory::class, ['parent_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalesPaymentTransactions()
    {
        return $this->hasMany(SalesPaymentTransaction::class, ['order_id' => 'entity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalesShipments()
    {
        return $this->hasMany(SalesShipment::class, ['order_id' => 'entity_id']);
    }
}
