<?php

namespace SalesForceClient\Service;

use Itav\Component\Serializer\Serializer;
use SalesForceClient\Model\ContactModel;
use SalesForceClient\Model\LeadModel;
use SalesForceClient\Model\Response\ResponseModel;
use Tools\Tools;

/**
 * Class ContactService
 * @package SalesForceClient\Service
 */
class LeadService implements InterfaceService
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
     * ContactService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

    /**
     * @param string $idContact
     * @return false|ContactModel
     */
    public function get($idContact)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->request('sobjects/Lead/' . $idContact);

        Tools::dump(1, json_decode($ret->getBody()->getContents(), true));
        if ($data = json_decode($ret->getBody()->getContents(), true)) {
            return $this->serializer->denormalize($data, LeadModel::class);
        }
        return false;
    }

    /**
     * @param LeadModel $contactModel
     * @return bool|mixed
     */
    public function create(LeadModel $contactModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setPostData($this->serializer->normalize($contactModel, false, false))
            ->request('sobjects/Lead/');

        if ($data = json_decode($ret->getBody()->getContents(), true)) {
            return $this->serializer->denormalize($data, ResponseModel::class);
        }
        return false;
    }

    /**
     * @param string $idContact
     * @param LeadModel $contactModel
     * @return bool
     * @throws \Exception
     */
    public function update($idContact, LeadModel $contactModel)
    {
        if (!$idContact) {
            throw new \Exception('Lead ID is missing.');
        }

        $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_PATCH)
            ->setPostData($this->serializer->normalize($contactModel, false, false))
            ->request('sobjects/Lead/' . $idContact);

        return true;
    }

    /**
     * @param string $idContact
     * @return bool
     * @throws \Exception
     */
    public function delete($idContact)
    {
        if (!$idContact) {
            throw new \Exception('Lead ID is missing.');
        }

        $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_DELETE)
            ->request('sobjects/Lead/' . $idContact);

        return true;
    }


}