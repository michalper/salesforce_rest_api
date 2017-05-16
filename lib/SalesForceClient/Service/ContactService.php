<?php

namespace SalesForceClient\Service;

use Itav\Component\Serializer\Serializer;
use SalesForceClient\Model\ContactModel;
use SalesForceClient\Model\Response\ResponseModel;

/**
 * Class ContactService
 * @package SalesForceClient\Service
 */
class ContactService implements InterfaceService
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
            ->request('sobjects/Contact/' . $idContact);

        if ($data = json_decode($ret->getBody()->getContents(), true)) {
            return $this->serializer->denormalize($data, ContactModel::class);
        }
        return false;
    }

    /**
     * @param ContactModel $contactModel
     * @return bool|mixed
     */
    public function create(ContactModel $contactModel)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_POST)
            ->setPostData($this->serializer->normalize($contactModel, false, false))
            ->request('sobjects/Contact/');

        if ($data = json_decode($ret->getBody()->getContents(), true)) {
            return $this->serializer->denormalize($data, ResponseModel::class);
        }
        return false;
    }

    /**
     * @param string $idContact
     * @param ContactModel $contactModel
     * @return bool
     * @throws \Exception
     */
    public function update($idContact, ContactModel $contactModel)
    {
        if (!$idContact) {
            throw new \Exception('Contact ID is missing.');
        }

        $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_PATCH)
            ->setPostData($this->serializer->normalize($contactModel, false, false))
            ->request('sobjects/Contact/' . $idContact);

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
            throw new \Exception('Contact ID is missing.');
        }

        $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_DELETE)
            ->request('sobjects/Contact/' . $idContact);

        return true;
    }


}