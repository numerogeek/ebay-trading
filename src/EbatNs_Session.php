<?php

namespace InTradeSys\eBay\trading;


class EbatNs_Session extends EbatNs_AbstractAuthSession
{
    /**
    * @param string|null $configFile
    */
    public function __construct($configFile = null)
    {
        parent::__construct($configFile, [
            'https://api.ebay.com/wsapi',
            'https://api.sandbox.ebay.com/wsapi'
        ]);
    }

    public function getCredentialType()
    {
        $isTokenModeEnabled = $this->getTokenMode() === 1;
        $isAuthorizeAndAuthenticate = $this->getAuthType() === self::AUTHTYPE_AUTHNAUTH;
        $requestToken = $this->getRequestToken();

        $passwordType = new UserIdPasswordType();
        $credentialType = new EbatNs_RequesterCredentialType();
        $credentialType->setCredentials($passwordType);

        $passwordType->setAppId($this->getAppId());
        $passwordType->setDevId($this->getDevId());
        $passwordType->setAuthCert($this->getCertId());

        if (!$isTokenModeEnabled) {
            $passwordType->setUsername($this->getRequestUser());
            $passwordType->setPassword($this->getRequestPassword());
        } elseif ($isAuthorizeAndAuthenticate) {
            $credentialType->setEBayAuthToken($requestToken);
        }

        return $credentialType;
    }

    public function getSoapHeader()
    {
        $header = new EbatNs_RequestHeaderType();
        $tokenMode = $this->getTokenMode();
        $isAuthorizeAndAuthenticate = $this->getAuthType() === self::AUTHTYPE_AUTHNAUTH;

        if ($isAuthorizeAndAuthenticate || $tokenMode === 0) {
            $header->setRequesterCredentials($this->getCredentialType());
        }

        return $header;
    }
}
