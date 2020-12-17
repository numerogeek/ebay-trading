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
 * Specifies the Selling Manager email type enumeration values.
 **/
class SellingManagerEmailTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SellingManagerEmailTypeCodeType';
    const NAME = 'SellingManagerEmailTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Email logged manually. For example, the seller manually adds an entry to
     * track email sent to a buyer offline.
     **/
    const CodeType_ManualEntry = 'ManualEntry';

    /**
     * Winning Buyer Notification.
     **/
    const CodeType_WinningBuyerEmail = 'WinningBuyerEmail';

    /**
     * Payment Reminder emails.
     **/
    const CodeType_PaymentReminderEmail = 'PaymentReminderEmail';

    /**
     * Payment received notification.
     **/
    const CodeType_PaymentReceivedEmail = 'PaymentReceivedEmail';

    /**
     * Request shipping address email.
     **/
    const CodeType_RequestForShippingAddressEmail = 'RequestForShippingAddressEmail';

    /**
     * Feedback Reminder emails.
     **/
    const CodeType_FeedbackReminderEmail = 'FeedbackReminderEmail';

    /**
     * Shipment sent email.
     **/
    const CodeType_ShipmentSentEmail = 'ShipmentSentEmail';

    /**
     * Personalized emails.
     **/
    const CodeType_PersonalizedEmail = 'PersonalizedEmail';

    /**
     * Invoice notification emails.
     **/
    const CodeType_InvoiceNotification = 'InvoiceNotification';

    /**
     * Custom email template 1.
     **/
    const CodeType_CustomEmailTemplate1 = 'CustomEmailTemplate1';

    /**
     * Custom email template 2.
     **/
    const CodeType_CustomEmailTemplate2 = 'CustomEmailTemplate2';

    /**
     * Custom email template 3.
     **/
    const CodeType_CustomEmailTemplate3 = 'CustomEmailTemplate3';

    /**
     * Custom email template 4.
     **/
    const CodeType_CustomEmailTemplate4 = 'CustomEmailTemplate4';

    /**
     * Custom email template 5.
     **/
    const CodeType_CustomEmailTemplate5 = 'CustomEmailTemplate5';

    /**
     * Custom email template 6.
     **/
    const CodeType_CustomEmailTemplate6 = 'CustomEmailTemplate6';

    /**
     * Custom email template 7.
     **/
    const CodeType_CustomEmailTemplate7 = 'CustomEmailTemplate7';

    /**
     * Custom email template 8.
     **/
    const CodeType_CustomEmailTemplate8 = 'CustomEmailTemplate8';

    /**
     * Custom email template 9.
     **/
    const CodeType_CustomEmailTemplate9 = 'CustomEmailTemplate9';

    /**
     * Custom email template 10.
     **/
    const CodeType_CustomEmailTemplate10 = 'CustomEmailTemplate10';

    /**
     * Custom email template 11.
     **/
    const CodeType_CustomEmailTemplate11 = 'CustomEmailTemplate11';

    /**
     * Custom email template 12.
     **/
    const CodeType_CustomEmailTemplate12 = 'CustomEmailTemplate12';

    /**
     * Custom email template 13.
     **/
    const CodeType_CustomEmailTemplate13 = 'CustomEmailTemplate13';

    /**
     * Custom email template 14.
     **/
    const CodeType_CustomEmailTemplate14 = 'CustomEmailTemplate14';

    /**
     * Custom email template 15.
     **/
    const CodeType_CustomEmailTemplate15 = 'CustomEmailTemplate15';

    /**
     * Custom email template 16.
     **/
    const CodeType_CustomEmailTemplate16 = 'CustomEmailTemplate16';

    /**
     * Custom email template 17.
     **/
    const CodeType_CustomEmailTemplate17 = 'CustomEmailTemplate17';

    /**
     * Custom email template 18.
     **/
    const CodeType_CustomEmailTemplate18 = 'CustomEmailTemplate18';

    /**
     * Custom email template 19.
     **/
    const CodeType_CustomEmailTemplate19 = 'CustomEmailTemplate19';

    /**
     * Custom email template 20.
     **/
    const CodeType_CustomEmailTemplate20 = 'CustomEmailTemplate20';

    /**
     * (out) Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
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
     * @return SellingManagerEmailTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellingManagerEmailTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isManualEntry()
    {
        return $this->_value === self::CodeType_ManualEntry;
    }

    /**
     * @return bool
     */
    public function isWinningBuyerEmail()
    {
        return $this->_value === self::CodeType_WinningBuyerEmail;
    }

    /**
     * @return bool
     */
    public function isPaymentReminderEmail()
    {
        return $this->_value === self::CodeType_PaymentReminderEmail;
    }

    /**
     * @return bool
     */
    public function isPaymentReceivedEmail()
    {
        return $this->_value === self::CodeType_PaymentReceivedEmail;
    }

    /**
     * @return bool
     */
    public function isRequestForShippingAddressEmail()
    {
        return $this->_value === self::CodeType_RequestForShippingAddressEmail;
    }

    /**
     * @return bool
     */
    public function isFeedbackReminderEmail()
    {
        return $this->_value === self::CodeType_FeedbackReminderEmail;
    }

    /**
     * @return bool
     */
    public function isShipmentSentEmail()
    {
        return $this->_value === self::CodeType_ShipmentSentEmail;
    }

    /**
     * @return bool
     */
    public function isPersonalizedEmail()
    {
        return $this->_value === self::CodeType_PersonalizedEmail;
    }

    /**
     * @return bool
     */
    public function isInvoiceNotification()
    {
        return $this->_value === self::CodeType_InvoiceNotification;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate1()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate1;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate2()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate2;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate3()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate3;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate4()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate4;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate5()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate5;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate6()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate6;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate7()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate7;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate8()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate8;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate9()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate9;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate10()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate10;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate11()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate11;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate12()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate12;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate13()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate13;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate14()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate14;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate15()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate15;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate16()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate16;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate17()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate17;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate18()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate18;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate19()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate19;
    }

    /**
     * @return bool
     */
    public function isCustomEmailTemplate20()
    {
        return $this->_value === self::CodeType_CustomEmailTemplate20;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
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

SellingManagerEmailTypeCodeType::_register();
