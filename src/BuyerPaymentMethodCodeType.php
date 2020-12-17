<?php

namespace InTradeSys\eBay\trading;

/*
 * This class was generated from a WSDL file from November 27, 2020, 4:13 pm.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 */

/**
 * This enumerated type defines different payment methods that can be used by buyers to pay sellers for purchases.
 * Supported payment methods vary by eBay marketplace, by eBay Category, and even by listing format. If a seller is
 * listing, revising, or relisting an item with a Trading API call, the seller should use one of the following
 * metadata calls to see which payment methods are supported at the site and category level:
 * <ul>
 * <li>
 * GeteBayDetails
 * : through
 * PaymentOptionDetails
 * containers in the response, this call will show the seller all of the payment methods that are available for the
 * specified marketplace. To retrieve this metadata, the seller should include the
 * DetailName
 * field in the request, and set its value to <code>PaymentOptionDetails</code></li>
 * <li>
 * GetCategoryFeatures
 * : through
 * PaymentMethod
 * fields that are returned under the
 * SiteDefaults
 * container or under one or more
 * Category
 * containers in the response, this call will show the seller all of the payment methods that are available for the
 * specified marketplace, including any category exceptions. To retrieve this metadata, the seller should include
 * the
 * FeatureID
 * field in the request, and set its value to <code>PaymentMethods</code>. Note that
 * Category
 * containers will only be returned for categories that differ from Site Defaults as far as supported payment
 * methods are concerned. </li>
 * </ul>
 * 
 * <span class="tablenote">
 * Note:
 * If a seller's account is enabled for eBay Managed Payments, a payment method does not need to be specified
 * at listing time, as eBay manages the payment methods that are available to the buyer. Any payment method that is
 * specified at listing time (or defined in a payment business policy) will be ignored and dropped from the listing,
 * and the seller will get a warning message in the response. eBay managed payments is currently only available to a
 * limited number of sellers on the US and Germany sites, but will start becoming available to some sellers in the
 * Canada, UK, and Australia marketplaces in July 2020. Eventually, throughout 2021 and beyond, all sellers on all
 * eBay marketplaces will be onboarded to eBay managed payments.
 * </span>
 **/
class BuyerPaymentMethodCodeType extends EbatNs_EnumType
{
    const TAG = 'BuyerPaymentMethodCodeType';
    const NAME = 'BuyerPaymentMethodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that no payment method has been specified for the listing. This may be the case
     * for a classified ad listing, since payment happens outside of the eBay platform.
     **/
    const CodeType_None = 'None';

    /**
     * This enumeration value indicates that a money order or cashiers check is accepted for payment.
     **/
    const CodeType_MOCC = 'MOCC';

    /**
     * This enumeration value indicates that American Express is accepted for payment.
     **/
    const CodeType_AmEx = 'AmEx';

    /**
     * This enumeration value indicates that buyers should check the listing description for more details on payment.
     * This may be the case for a classified ad listing, since payment happens outside of the eBay platform.
     **/
    const CodeType_PaymentSeeDescription = 'PaymentSeeDescription';

    /**
     * This enumeration value indicates that credit cards are accepted for payment.
     * 
     * <span class="tablenote">
     * Note:
     * This enumeration value is also returned in the response of order management calls if the seller is opted
     * in to eBay Managed Payments, and the buyer used an eBay gift card to pay the full or partial balance of the
     * order.
     * </span>
     **/
    const CodeType_CCAccepted = 'CCAccepted';

    /**
     * This enumeration value indicates that a personal check is accepted for payment.
     **/
    const CodeType_PersonalCheck = 'PersonalCheck';

    /**
     * This enumeration value indicates that cash on delivery of item is accepted for payment.
     **/
    const CodeType_COD = 'COD';

    /**
     * This enumeration value indicates that Visa or MasterCard are accepted for payment.
     **/
    const CodeType_VisaMC = 'VisaMC';

    /**
     * This enumeration value indicates that PaisaPay is accepted for payment. This form of payment is only available to
     * buyers in India.
     **/
    const CodeType_PaisaPayAccepted = 'PaisaPayAccepted';

    /**
     * This enumeration value may be returned if the payment method is unknown.
     **/
    const CodeType_Other = 'Other';

    /**
     * This enumeration value indicates that PayPal is accepted as a payment method. If PayPal is set by the seller as
     * an accepted payment method, the seller must also supply their PayPal email address through the
     * Item.PayPalEmailAddress
     * field in an Add/Revise/Relist call.
     * 
     * If you don't pass PayPal in the listing request but the seller's eBay
     * preferences are set to accept PayPal on all listings,
     * eBay will add PayPal as a payment method for you in most cases,
     * and we may return a warning.
     * 
     * Except for sellers using eBay managed payments, PayPal must be the only accepted payment method to enable
     * the immediate payment feature (Item.AutoPay). PayPal must be accepted for charitable listings. PayPal must be
     * accepted for event ticket listings when the venue is in New York state or Illinois, so that eBay can offer buyer
     * protection (per state law). (For some applications, it may be simplest to use errors returned from VerifyAddItem
     * to flag the PayPal requirement for New York and Illinois ticket listings.) PayPal must be accepted for US eBay
     * Motors listings that require a deposit (and it will not be set automatically based on the seller's preferences).
     * Conversely, if PayPal is specified for US eBay Motors listings, deposit attributes must be specified.
     **/
    const CodeType_PayPal = 'PayPal';

    /**
     * This enumeration value indicates that Discover Card is accepted for payment.
     **/
    const CodeType_Discover = 'Discover';

    /**
     * This enumeration value indicates that cash on pickup is accepted for payment.
     **/
    const CodeType_CashOnPickup = 'CashOnPickup';

    /**
     * This enumeration value indicates that a direct transfer of money is accepted for payment.
     **/
    const CodeType_MoneyXferAccepted = 'MoneyXferAccepted';

    /**
     * This enumeration value indicates that a direct transfer of money during checkout is accepted for payment.
     **/
    const CodeType_MoneyXferAcceptedInCheckout = 'MoneyXferAcceptedInCheckout';

    /**
     * This enumeration value may be returned if the payment method is unknown.
     **/
    const CodeType_OtherOnlinePayments = 'OtherOnlinePayments';

    /**
     * Reserved for future use.
     **/
    const CodeType_Escrow = 'Escrow';

    /**
     * Reserved for future use.
     **/
    const CodeType_PrePayDelivery = 'PrePayDelivery';

    /**
     * Reserved for future use.
     **/
    const CodeType_CODPrePayDelivery = 'CODPrePayDelivery';

    /**
     * Reserved for future use.
     **/
    const CodeType_PostalTransfer = 'PostalTransfer';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This enumeration value indicates that a loan check is accepted for payment. This option is generally only
     * applicable to motor vehicle listings.
     **/
    const CodeType_LoanCheck = 'LoanCheck';

    /**
     * This enumeration value indicates that cash is accepted for payment. This option is generally only applicable to
     * motor vehicle listings on the US and Canada sites.
     **/
    const CodeType_CashInPerson = 'CashInPerson';

    /**
     * Elektronisches Lastschriftverfahren (direct debit).
     * Only applicable to the Express Germany site, which has been shut down.
     **/
    const CodeType_ELV = 'ELV';

    /**
     * This payment type is no longer applicable since eBay India is no longer a functioning site.
     **/
    const CodeType_PaisaPayEscrow = 'PaisaPayEscrow';

    /**
     * This payment type is no longer applicable since eBay India is no longer a functioning site.
     **/
    const CodeType_PaisaPayEscrowEMI = 'PaisaPayEscrowEMI';

    /**
     * <span class="tablenote">
     * Note:
     * This enumeration value should no longer be passed in as an accepted payment method on any eBay
     * marketplace. If this value is specified in an Add/Revise/Relist call, it will be ignored and dropped. eBay no
     * longer supports electronic payments through Integrated Merchant Credit Card accounts. To accept online credit
     * card payments from buyers, a seller must use specify 'PayPal' as a payment method, and the buyer can pay by
     * credit card through their PayPal account, or the seller must opt in to eBay managed payments program, and eBay
     * will process credit card payments.
     * </span>
     **/
    const CodeType_IntegratedMerchantCreditCard = 'IntegratedMerchantCreditCard';

    /**
     * <span class="tablenote">
     * Note:
     * This payment method is no longer an acceptable form of payment. Sellers may no longer offer this payment
     * method to buyers when creating new listings.
     * </span>
     * 
     * The Moneybookers payment method.
     * For more information, see http://www.moneybookers.com/partners/us/ebay.
     * Only applicable to the US site (and
     * to the Parts and Accessories category of the US eBay Motors site).
     **/
    const CodeType_Moneybookers = 'Moneybookers';

    /**
     * <span class="tablenote">
     * Note:
     * This payment method is no longer an acceptable form of payment. Sellers may no longer offer this payment
     * method to buyers when creating new listings.
     * </span>
     * 
     * The Paymate payment method. This payment method is only accepted on the eBay Australia site. For more
     * information on setting up Paymate as an accepted payment method on the eBay Australia site,
     * see the <a href="http://www.paymate.com/cms/index.php/sellers/sell-on-ebay/selling-on-ebay"
     * target="_blank">Sell with Paymate on eBay.com.au</a> help page.
     **/
    const CodeType_Paymate = 'Paymate';

    /**
     * <span class="tablenote">
     * Note:
     * This payment method is no longer an acceptable form of payment. Sellers may no longer offer this payment
     * method to buyers when creating new listings.
     * </span>
     * 
     * The ProPay payment method. US site only. For more information,
     * see http://www.Propay.com/eBay.
     **/
    const CodeType_ProPay = 'ProPay';

    /**
     * PayOnPickup payment method. PayOnPickup is the same as CashOnPickup.
     * For listings on the eBay US site, the user interface refers to this feature as Pay on pickup.
     * In the user interface of your application, please refer to the feature as Pay on pickup so that
     * the name in your user interface corresponds to the name on the eBay US site.
     **/
    const CodeType_PayOnPickup = 'PayOnPickup';

    /**
     * This enumeration value indicates that the Diners Club credit card is accepted for payment.
     **/
    const CodeType_Diners = 'Diners';

    /**
     * This value is no longer used.
     **/
    const CodeType_StandardPayment = 'StandardPayment';

    /**
     * This value indicates that a debit card can be used/was used to pay for the order. This payment method value must
     * be passed in one of the
     * Item.PaymentMethods
     * fields if the seller is making the item available for eBay Now delivery. For eBay Now orders, the eBay Now valet
     * accepts debit cards as a form of payment. This value is only applicable for eBay Now orders.
     **/
    const CodeType_DirectDebit = 'DirectDebit';

    /**
     * This enumeration value is returned in the response of order management calls if the seller is opted in to eBay
     * managed payments, and the buyer has paid for the order with any accepted payment method except an eBay gift card.
     * If the buyer used an eBay gift card to pay the full or partial balance of the order, the <code>CCAccepted</code>
     * value will be returned instead.
     * 
     * This is not an enumeration value that a seller would pass in as an accepted payment method.
     **/
    const CodeType_CreditCard = 'CreditCard';

    /**
     * This buyer payment method is only applicable for the Germany site and is associated with the rollout of
     * Progressive Checkout and the Pay Upon Invoice feature. 'PayUponInvoice' is not a payment method that is offered
     * to the buyer, but instead, eBay/PayPal makes the determination (based on several factors) during checkout whether
     * the buyer is eligible for 'Pay Upon Invoice'. If the buyer is offered the 'Pay Upon Invoice' option, that buyer
     * is not required to pay for the order until an order invoice is sent by the seller. The seller must offer PayPal
     * as a payment option or the 'Pay Upon Invoice' option will not be made available to the buyer under any
     * circumstance.
     * 
     * Only select categories on the Germany site will support the 'Pay Upon Invoice' option, and orders going
     * above the two-thousand dollar EURO mark will not be eligible for 'Pay Upon Invoice'.
     * 
     * Since the seller can not specify 'Pay Upon Invoice' as a payment method, this enumeration value cannot be
     * passed into a
     * Item.PaymentMethods
     * field in an Add/Revise/Relist call.
     **/
    const CodeType_PayUponInvoice = 'PayUponInvoice';

    /**
     * This value indicates that QIWI can be used/was used by Russian buyers to pay for the order. This payment method
     * value must be passed in one of the
     * Item.PaymentMethods
     * fields in an Add/Revise/Relist API call if the seller wants to make QIWI an available payment method for Russian
     * buyers. QIWI works in conjunction with PayPal, so if 'QIWI' is set as an available payment method, 'PayPal' must
     * be specified as well. This value can only be specified on the eBay US site, and it is only applicable for Russian
     * buyers.
     **/
    const CodeType_QIWI = 'QIWI';

    /**
     * This value indicates that a PayPal credit card can be used/was used to pay for the order.
     **/
    const CodeType_PayPalCredit = 'PayPalCredit';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return BuyerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BuyerPaymentMethodCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isMOCC()
    {
        return $this->_value === self::CodeType_MOCC;
    }

    /**
     * @return bool
     */
    public function isAmEx()
    {
        return $this->_value === self::CodeType_AmEx;
    }

    /**
     * @return bool
     */
    public function isPaymentSeeDescription()
    {
        return $this->_value === self::CodeType_PaymentSeeDescription;
    }

    /**
     * @return bool
     */
    public function isCCAccepted()
    {
        return $this->_value === self::CodeType_CCAccepted;
    }

    /**
     * @return bool
     */
    public function isPersonalCheck()
    {
        return $this->_value === self::CodeType_PersonalCheck;
    }

    /**
     * @return bool
     */
    public function isCOD()
    {
        return $this->_value === self::CodeType_COD;
    }

    /**
     * @return bool
     */
    public function isVisaMC()
    {
        return $this->_value === self::CodeType_VisaMC;
    }

    /**
     * @return bool
     */
    public function isPaisaPayAccepted()
    {
        return $this->_value === self::CodeType_PaisaPayAccepted;
    }

    /**
     * @return bool
     */
    public function isOther()
    {
        return $this->_value === self::CodeType_Other;
    }

    /**
     * @return bool
     */
    public function isPayPal()
    {
        return $this->_value === self::CodeType_PayPal;
    }

    /**
     * @return bool
     */
    public function isDiscover()
    {
        return $this->_value === self::CodeType_Discover;
    }

    /**
     * @return bool
     */
    public function isCashOnPickup()
    {
        return $this->_value === self::CodeType_CashOnPickup;
    }

    /**
     * @return bool
     */
    public function isMoneyXferAccepted()
    {
        return $this->_value === self::CodeType_MoneyXferAccepted;
    }

    /**
     * @return bool
     */
    public function isMoneyXferAcceptedInCheckout()
    {
        return $this->_value === self::CodeType_MoneyXferAcceptedInCheckout;
    }

    /**
     * @return bool
     */
    public function isOtherOnlinePayments()
    {
        return $this->_value === self::CodeType_OtherOnlinePayments;
    }

    /**
     * @return bool
     */
    public function isEscrow()
    {
        return $this->_value === self::CodeType_Escrow;
    }

    /**
     * @return bool
     */
    public function isPrePayDelivery()
    {
        return $this->_value === self::CodeType_PrePayDelivery;
    }

    /**
     * @return bool
     */
    public function isCODPrePayDelivery()
    {
        return $this->_value === self::CodeType_CODPrePayDelivery;
    }

    /**
     * @return bool
     */
    public function isPostalTransfer()
    {
        return $this->_value === self::CodeType_PostalTransfer;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isLoanCheck()
    {
        return $this->_value === self::CodeType_LoanCheck;
    }

    /**
     * @return bool
     */
    public function isCashInPerson()
    {
        return $this->_value === self::CodeType_CashInPerson;
    }

    /**
     * @return bool
     */
    public function isELV()
    {
        return $this->_value === self::CodeType_ELV;
    }

    /**
     * @return bool
     */
    public function isPaisaPayEscrow()
    {
        return $this->_value === self::CodeType_PaisaPayEscrow;
    }

    /**
     * @return bool
     */
    public function isPaisaPayEscrowEMI()
    {
        return $this->_value === self::CodeType_PaisaPayEscrowEMI;
    }

    /**
     * @return bool
     */
    public function isIntegratedMerchantCreditCard()
    {
        return $this->_value === self::CodeType_IntegratedMerchantCreditCard;
    }

    /**
     * @return bool
     */
    public function isMoneybookers()
    {
        return $this->_value === self::CodeType_Moneybookers;
    }

    /**
     * @return bool
     */
    public function isPaymate()
    {
        return $this->_value === self::CodeType_Paymate;
    }

    /**
     * @return bool
     */
    public function isProPay()
    {
        return $this->_value === self::CodeType_ProPay;
    }

    /**
     * @return bool
     */
    public function isPayOnPickup()
    {
        return $this->_value === self::CodeType_PayOnPickup;
    }

    /**
     * @return bool
     */
    public function isDiners()
    {
        return $this->_value === self::CodeType_Diners;
    }

    /**
     * @return bool
     */
    public function isStandardPayment()
    {
        return $this->_value === self::CodeType_StandardPayment;
    }

    /**
     * @return bool
     */
    public function isDirectDebit()
    {
        return $this->_value === self::CodeType_DirectDebit;
    }

    /**
     * @return bool
     */
    public function isCreditCard()
    {
        return $this->_value === self::CodeType_CreditCard;
    }

    /**
     * @return bool
     */
    public function isPayUponInvoice()
    {
        return $this->_value === self::CodeType_PayUponInvoice;
    }

    /**
     * @return bool
     */
    public function isQIWI()
    {
        return $this->_value === self::CodeType_QIWI;
    }

    /**
     * @return bool
     */
    public function isPayPalCredit()
    {
        return $this->_value === self::CodeType_PayPalCredit;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

BuyerPaymentMethodCodeType::_register();
