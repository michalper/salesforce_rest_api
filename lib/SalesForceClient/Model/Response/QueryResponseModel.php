<?php

namespace SalesForceClient\Model\Response;

/**
 * Class QueryResponseModel
 * @package SalesForceClient\Model\Response
 */
class QueryResponseModel
{
    /**
     * @var integer
     */
    private $totalSize;

    /**
     * @var boolean
     */
    private $done;

    /**
     * @var array
     */
    private $records;

    /**
     * @var string
     */
    private $nextRecordsUrl;

    /**
     * @return int
     */
    public function getTotalSize()
    {
        return $this->totalSize;
    }

    /**
     * @param int $totalSize
     * @return QueryResponseModel
     */
    public function setTotalSize($totalSize)
    {
        $this->totalSize = $totalSize;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDone()
    {
        return $this->done;
    }

    /**
     * @param bool $done
     * @return QueryResponseModel
     */
    public function setDone($done)
    {
        $this->done = $done;
        return $this;
    }

    /**
     * @return array
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param array $records
     * @return QueryResponseModel
     */
    public function setRecords($records)
    {
        $this->records = $records;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextRecordsUrl()
    {
        return $this->nextRecordsUrl;
    }

    /**
     * @param string $nextRecordsUrl
     * @return QueryResponseModel
     */
    public function setNextRecordsUrl($nextRecordsUrl)
    {
        $this->nextRecordsUrl = $nextRecordsUrl;
        return $this;
    }
}