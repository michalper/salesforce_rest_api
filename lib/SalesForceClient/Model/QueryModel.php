<?php

namespace SalesForceClient\Model;

/**
 * Class QueryModel
 * @package SalesForceClient\Model
 */
class QueryModel
{
    /**
     * SORT order ASC
     */
    const SORT_ORDER_ASC = 'asc';
    /**
     * SORT order DESC
     */
    const SORT_ORDER_DESC = 'desc';

    /**
     * @var int
     */
    private $page = 1;
    /**
     * @var int
     */
    private $rowsOnPage = 10;
    /**
     * @var string
     */
    private $sortIndex;
    /**
     * @var string
     */
    private $sortOrder = self::SORT_ORDER_ASC;
    /**
     * @var array
     */
    private $selectFields = [];
    /**
     * @var string
     */
    private $fromStatement;
    /**
     * @var string
     */
    private $whereStatement;

    /**
     * @param int $page
     * @return QueryModel
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param int $rowsOnPage
     * @return QueryModel
     */
    public function setRowsOnPage($rowsOnPage)
    {
        $this->rowsOnPage = $rowsOnPage;
        return $this;
    }

    /**
     * @param string $sortIndex
     * @return QueryModel
     */
    public function setSortIndex($sortIndex)
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }

    /**
     * @param string $sortOrder
     * @return QueryModel
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * @param array $selectFields
     * @return QueryModel
     */
    public function setSelectFields($selectFields)
    {
        $this->selectFields = $selectFields;
        return $this;
    }

    /**
     * @param string $selectField
     * @return QueryModel
     */
    public function addSelectField($selectField)
    {
        $this->selectFields[] = $selectField;
        return $this;
    }

    /**
     * @param string $fromStatement
     * @return QueryModel
     */
    public function setFromStatement($fromStatement)
    {
        $this->fromStatement = $fromStatement;
        return $this;
    }

    /**
     * @param string $whereStatement
     * @return QueryModel
     */
    public function setWhereStatement($whereStatement)
    {
        $this->whereStatement = $whereStatement;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        $fields = implode(', ', $this->selectFields);
        $sql = 'SELECT ' . $fields . ' FROM ' . $this->fromStatement . ' ' . $this->whereStatement;

        return $sql;

    }

}