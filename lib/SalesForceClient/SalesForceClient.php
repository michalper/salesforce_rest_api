<?php

namespace SalesForceClient;

use Itav\Component\Serializer\Serializer;
use SalesForceClient\Model\AuthorizationModel;
use SalesForceClient\Service\ContactService;
use SalesForceClient\Service\LeadService;
use SalesForceClient\Service\QueryService;
use SalesForceClient\Service\Service;

/**
 * Class SalesForceClient
 * @package SalesForceClient
 */
class SalesForceClient
{
    /**
     * @var Service
     */
    private $service;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var ContactService
     */
    public $contact;

    /**
     * @var LeadService
     */
    public $lead;

    /**
     * @var QueryService
     */
    public $query;

    /**
     * ContactuallyClient constructor.
     */
    public function __construct()
    {
        $this->service = new Service();
        $this->serializer = new Serializer();
        $this->contact = new ContactService($this->service, $this->serializer);
        $this->lead = new LeadService($this->service, $this->serializer);
        $this->query = new QueryService($this->service, $this->serializer);
    }

    /**
     * @param AuthorizationModel $authorizationModel
     * @return SalesForceClient
     */
    public function setAuthorizationModel(AuthorizationModel $authorizationModel)
    {
        $this->service->setAuthorizationModel($authorizationModel);
        return $this;
    }

    /**
     * @return AuthorizationModel
     */
    public function getAuthorizationModel()
    {
        return $this->service->getAuthorizationModel();
    }
}