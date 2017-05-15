<?php

namespace SalesForceClient\Service;

use GuzzleHttp\Client;
use Itav\Component\Serializer\Serializer;
use SalesForceClient\Model\AuthorizationModel;
use SalesForceClient\Model\Nested\AuthorizationResponseModel;

/**
 * Class TokenService
 * @package SalesForceClient\Service
 */
class TokenService
{

    const MAIN_URL = "https://login.salesforce.com";
    const GRANT_TYPE_REFRESH_TOKEN = 'refresh_token';
    const GRANT_TYPE_AUTHORIZATION_CODE = 'authorization_code';

    const ENDPOINT_AUTHORIZE = '/services/oauth2/authorize';
    const ENDPOINT_TOKEN = '/services/oauth2/token';
    const ENDPOINT_REVOKE = '/services/oauth2/revoke';

    /**
     * @var AuthorizationModel
     */
    private $authorizationModel;

    /**
     * Connector constructor.
     * @param AuthorizationModel $authorizationModel
     */
    public function __construct(AuthorizationModel $authorizationModel)
    {
        $this->authorizationModel = $authorizationModel;
    }

    /**
     * @return string
     */
    public function getAuthorizationUrl()
    {
        $data = [
            'response_type' => 'code',
            'client_id' => $this->authorizationModel->getConsumerKey(),
            'redirect_uri' => $this->authorizationModel->getRedirectUrl()
        ];
        return self::MAIN_URL . self::ENDPOINT_AUTHORIZE . '?' . http_build_query($data);
    }

    /**
     * @see https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/intro_understanding_web_server_oauth_flow.htm
     * @param string $code
     * @return false|AuthorizationResponseModel
     */
    public function getAuthorizationToken($code)
    {
        $params = [
            'code' => $code,
            'grant_type' => self::GRANT_TYPE_AUTHORIZATION_CODE,
            'client_id' => $this->authorizationModel->getConsumerKey(),
            'client_secret' => $this->authorizationModel->getConsumerSecret(),
            'redirect_uri' => $this->authorizationModel->getRedirectUrl()
        ];

        $client = new Client(['base_uri' => self::MAIN_URL]);
        $ret = $client->post(self::ENDPOINT_TOKEN,
            [
                'form_params' => $params
            ]
        );

        $serializer = new Serializer();
        return $serializer->denormalize(json_decode($ret->getBody()->getContents(), true), AuthorizationResponseModel::class);
    }

    /**
     * @see https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/intro_understanding_refresh_token_oauth.htm
     * @return false|AuthorizationResponseModel
     */
    public function refreshToken()
    {
        $params = [
            'grant_type' => self::GRANT_TYPE_REFRESH_TOKEN,
            'client_id' => $this->authorizationModel->getConsumerKey(),
            'client_secret' => $this->authorizationModel->getConsumerSecret(),
            'refresh_token' => $this->authorizationModel->getRefreshToken(),
            'redirect_uri' => $this->authorizationModel->getRedirectUrl()
        ];

        $client = new Client(['base_uri' => self::MAIN_URL]);
        $ret = $client->post(self::ENDPOINT_TOKEN,
            [
                'form_params' => $params
            ]
        );

        $serializer = new Serializer();
        return $serializer->denormalize(json_decode($ret->getBody()->getContents(), true), AuthorizationResponseModel::class);
    }
}