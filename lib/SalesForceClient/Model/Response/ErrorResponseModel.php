<?php

namespace SalesForceClient\Model\Response;

/**
 * Class ErrorResponseModel
 * @package SalesForceClient\Model
 */
class ErrorResponseModel
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $errorCode;

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return ErrorResponseModel
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     * @return ErrorResponseModel
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }


}