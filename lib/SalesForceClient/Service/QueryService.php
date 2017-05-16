<?php

namespace SalesForceClient\Service;

use Itav\Component\Serializer\Serializer;
use SalesForceClient\Model\QueryModel;
use SalesForceClient\Model\Response\QueryResponseModel;
use Tools\Tools;

/**
 * Class QueryService
 * @package SalesForceClient\Service
 */
class QueryService implements InterfaceService
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
     * QueryService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

    /**
     * @param QueryModel $model
     * @return bool|QueryResponseModel
     */
    public function query(QueryModel $model)
    {
        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->setGetParams(['q' => $model->getQuery()])
            ->request('query');

        if ($data = json_decode($ret->getBody()->getContents(), true)) {
            return $this->serializer->denormalize($data, QueryResponseModel::class);
        }
        return false;
    }

    /**
     * @param $queryNextRecordsUrl
     * @return bool|mixed
     * @throws \Exception
     */
    public function next($queryNextRecordsUrl)
    {
        if (!$queryNextRecordsUrl) {
            throw new \Exception('Query next records url is missing.');
        }

        $ret = $this->service
            ->setRequestMethod(Service::REQUEST_METHOD_GET)
            ->request('query' . $queryNextRecordsUrl);

        if ($data = json_decode($ret->getBody()->getContents(), true)) {
            return $this->serializer->denormalize($data, QueryResponseModel::class);
        }
        return false;
    }
}