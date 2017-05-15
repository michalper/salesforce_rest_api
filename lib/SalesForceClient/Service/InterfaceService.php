<?php

namespace SalesForceClient\Service;

use Itav\Component\Serializer\Serializer;

/**
 * Interface InterfaceService
 * @package SalesForceClient\Service
 */
interface InterfaceService
{
    /**
     * InterfaceService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer);
}