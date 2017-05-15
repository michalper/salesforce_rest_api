<?php

namespace SalesForceClient\Model\Nested;

/**
 * Class AuthorizationResponseModel
 * @package Encja\Component\Bogdan\SalesForce
 */
class AuthorizationResponseModel
{
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
    private $signature;

    /**
     * @var string
     */
    private $scope;

    /**
     * @var string
     */
    private $idToken;

    /**
     * @var string
     */
    private $instanceUrl;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $tokenType;

    /**
     * @var integer
     */
    private $issuedAt;

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return AuthorizationResponseModel
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
     * @return AuthorizationResponseModel
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return AuthorizationResponseModel
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     * @return AuthorizationResponseModel
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdToken()
    {
        return $this->idToken;
    }

    /**
     * @param string $idToken
     * @return AuthorizationResponseModel
     */
    public function setIdToken($idToken)
    {
        $this->idToken = $idToken;
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
     * @return AuthorizationResponseModel
     */
    public function setInstanceUrl($instanceUrl)
    {
        $this->instanceUrl = $instanceUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return AuthorizationResponseModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @param string $tokenType
     * @return AuthorizationResponseModel
     */
    public function setTokenType($tokenType)
    {
        $this->tokenType = $tokenType;
        return $this;
    }

    /**
     * @return int
     */
    public function getIssuedAt()
    {
        return $this->issuedAt;
    }

    /**
     * @param int $issuedAt
     * @return AuthorizationResponseModel
     */
    public function setIssuedAt($issuedAt)
    {
        $this->issuedAt = $issuedAt;
        return $this;
    }

}