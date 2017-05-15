<?php

namespace SalesForceClient\Model;

/**
 * Class AuthorizationModel
 * @package SalesForceClient\Model
 */
class AuthorizationModel
{

    /**
     * @var string
     */
    private $consumerKey;

    /**
     * @var string
     */
    private $consumerSecret;

    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $refreshToken;

    /**
     * @var string
     */
    private $instanceUrl;

    /**
     * @var string
     */
    private $redirectUrl;

    /**
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * @param string $consumerKey
     * @return AuthorizationModel
     */
    public function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }

    /**
     * @param string $consumerSecret
     * @return AuthorizationModel
     */
    public function setConsumerSecret($consumerSecret)
    {
        $this->consumerSecret = $consumerSecret;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return AuthorizationModel
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param string $refreshToken
     * @return AuthorizationModel
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstanceUrl()
    {
        return $this->instanceUrl;
    }

    /**
     * @param string $instanceUrl
     * @return AuthorizationModel
     */
    public function setInstanceUrl($instanceUrl)
    {
        $this->instanceUrl = $instanceUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     * @return AuthorizationModel
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
}