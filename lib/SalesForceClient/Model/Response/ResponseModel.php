<?php

namespace SalesForceClient\Model\Response;

/**
 * Class ResponseModel
 * @package SalesForceClient\Model
 */
class ResponseModel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var boolean
     */
    private $success;

    /**
     * @var array
     */
    private $errors;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ResponseModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @param bool $success
     * @return ResponseModel
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     * @return ResponseModel
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }
}