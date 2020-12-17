<?php

namespace InTradeSys\eBay\trading;


class EbatNs_Client extends EbatNs_AbstractClient
{
    protected $selectorModels = [];
    protected $activeSelectorModel = null;

    /**
    * @param string $method
    * @param AbstractRequestType|AbstractRequestType[] $request
    * @return EbatNs_ResponseError|AbstractResponseType|array
    */
    public function call($method, $request)
    {
        $responses = [];

        foreach ($this->callEach($method, $request) as $response) {
            $responses[] = $response->getObject();
        }

        return is_array($request) ? $responses : $responses[0];
    }

    /**
     * @param string $method
     * @param AbstractRequestType $request
     * @return EbatNs_Curler
     */
    protected function prepareCall($method, $request)
    {
        $this->reportApiCall($method);

        if ($method === 'UploadSiteHostedPictures') {
            return $this->prepareCallXmlStyle($method, $request);
        }

        $selectorModel = $this->activeSelectorModel;
        if ($selectorModel && $this->selectorModels[$selectorModel][$method]) {
            $request->setOutputSelector($this->selectorModels[$selectorModel][$method]->getSelectorArray());
        }

        $session = $this->getSession();
        $soapHeader = $session->getSoapHeader();

        return $this->curlRequestType($request, $method)
            ->withSoapAction()
            ->withSoapEnvelope($soapHeader)
            ->withQueryString('callname=' . $method)
            ->withQueryString('siteid=' . $session->getSiteId())
            ->withQueryString('appid=' . $session->getAppId())
            ->withQueryString('version=' . $this->getWsdlVersion())
            ->withQueryString('routing=default')
            ->request();
    }

    /**
     * @param string $method
     * @param UploadSiteHostedPicturesRequestType $request
     * @return EbatNs_Curler
    */
    public function prepareCallXmlStyle($method, $request)
    {
        $request::assignElement('RequesterCredentials', [
            'required' => false,
            'enum' => false,
            'type' => 'EbatNs_RequesterCredentialType',
            'xmlns' => 'urn:ebay:apis:eBLBaseComponents',
            'cardinality' => '0..1'
        ]);

        $session = $this->getSession();
        $request->setRequesterCredentials($session->getCredentialType());

        $multiPartData = $request->getPictureData();
        $request->setPictureData(null);

        $credentialHeaders = $session->getXmlCredentialHeaders();

        return $this->curlRequestType($request, $method)
            ->withHeaders($credentialHeaders)
            ->withApiUrl('https://api.sandbox.ebay.com/ws/api.dll')
            ->withMultipartOctetStream($multiPartData, 'dummy', 'dummy')
            ->request();
    }

    public function addSelectorModel($callName, $selectorModel, $active)
    {
        $this->selectorModels[$selectorModel->getName()][$callName] = $selectorModel;

        if ($active) {
            $this->setActiveSelectorModel($selectorModel->getName());
        }
    }

    public function setActiveSelectorModel($selectorName)
    {
        $this->activeSelectorModel = $selectorName;

        foreach ($this->selectorModels as $selectorModel) {
            foreach ($selectorModel as $selectorModelCall) {
                $selectorModelCall->setActive($selectorModelCall->getName() === $selectorName);
            }
        }
    }
    public function _buildNotificationMessage($response, $simulatedMessageName, $tns, $addData = null)
    {
        if ($addData) {
            foreach ($addData as $key => $value) {
                $response->_setProperty($key, $value);
            }
        }

        $response->setTypeAttribute('xmlns', $tns);
        $msgBody = $response->serialize($simulatedMessageName, $response, isset($response->attributeValues) ? $response->attributeValues : null, true, null, $this->_dataConverter);

        $soap = '<?xml version="1.0" encoding="utf-8"?>';
        $soap .= '<soapenv:Envelope';
        $soap .= ' xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"';
        $soap .= ' xmlns:xsd="http://www.w3.org/2001/XMLSchema"';
        $soap .= ' xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
        $soap .= '>';
        $soap .= '<soapenv:Header>';
        $soap .= '<ebl:RequesterCredentials soapenv:mustUnderstand="0" xmlns:ns="urn:ebay:apis:eBLBaseComponents" xmlns:ebl="urn:ebay:apis:eBLBaseComponents">';
        $soap .= '<ebl:NotificationSignature xmlns:ebl="urn:ebay:apis:eBLBaseComponents">invalid_simulation</ebl:NotificationSignature>';
        $soap .= '</ebl:RequesterCredentials>';
        $soap .= '</soapenv:Header>';
        $soap .= '<soapenv:Body>';
        $soap .= $msgBody;
        $soap .= '</soapenv:Body>';
        $soap .= '</soapenv:Envelope>';

        return $soap;
    }
}
