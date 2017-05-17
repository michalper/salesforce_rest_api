<?php

namespace SalesForceClient\Model;

/**
 * Class LeadModel
 * @package SalesForceClient\Model
 */
class LeadModel
{
    /**
     * @var array
     */
    private $attributes;

    /**
     * @var string
     */
    private $Id;

    /**
     * @var boolean
     */
    private $IsDeleted;

    /**
     * @var string
     */
    private $MasterRecordId;

    /**
     * @var string
     */
    private $LastName;

    /**
     * @var string
     */
    private $FirstName;

    /**
     * @var string
     */
    private $Salutation;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $Company;

    /**
     * @var string
     */
    private $Street;

    /**
     * @var string
     */
    private $City;

    /**
     * @var string
     */
    private $State;

    /**
     * @var string
     */
    private $PostalCode;

    /**
     * @var string
     */
    private $Country;

    /**
     * @var string
     */
    private $Latitude;

    /**
     * @var string
     */
    private $Longitude;

    /**
     * @var string
     */
    private $GeocodeAccuracy;

    /**
     * @var string
     */
    private $Address;

    /**
     * @var string
     */
    private $Phone;

    /**
     * @var string
     */
    private $MobilePhone;

    /**
     * @var string
     */
    private $Fax;

    /**
     * @var string
     */
    private $Email;

    /**
     * @var string
     */
    private $Website;

    /**
     * @var string
     */
    private $PhotoUrl;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $LeadSource;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var string
     */
    private $Industry;

    /**
     * @var string
     */
    private $Rating;

    /**
     * @var string
     */
    private $AnnualRevenue;

    /**
     * @var string
     */
    private $NumberOfEmployees;

    /**
     * @var string
     */
    private $OwnerId;

    /**
     * @var boolean
     */
    private $IsConverted;

    /**
     * @var \DateTime
     */
    private $ConvertedDate;

    /**
     * @var string
     */
    private $ConvertedAccountId;

    /**
     * @var string
     */
    private $ConvertedContactId;

    /**
     * @var string
     */
    private $ConvertedOpportunityId;

    /**
     * @var boolean
     */
    private $IsUnreadByOwner;

    /**
     * @var \DateTime
     */
    private $CreatedDate;

    /**
     * @var string
     */
    private $CreatedById;

    /**
     * @var \DateTime
     */
    private $LastModifiedDate;

    /**
     * @var string
     */
    private $LastModifiedById;

    /**
     * @var \DateTime
     */
    private $SystemModstamp;

    /**
     * @var \DateTime
     */
    private $LastActivityDate;

    /**
     * @var \DateTime
     */
    private $LastViewedDate;

    /**
     * @var \DateTime
     */
    private $LastReferencedDate;

    /**
     * @var string
     */
    private $Jigsaw;

    /**
     * @var string
     */
    private $JigsawContactId;

    /**
     * @var string
     */
    private $CleanStatus;

    /**
     * @var string
     */
    private $CompanyDunsNumber;

    /**
     * @var string
     */
    private $DandbCompanyId;

    /**
     * @var string
     */
    private $EmailBouncedReason;

    /**
     * @var \DateTime
     */
    private $EmailBouncedDate;

    /**
     * @var string
     */
    private $SICCode__c;

    /**
     * @var string
     */
    private $ProductInterest__c;

    /**
     * @var string
     */
    private $Primary__c;

    /**
     * @var string
     */
    private $CurrentGenerators__c;

    /**
     * @var string
     */
    private $NumberofLocations__c;

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     * @return LeadModel
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return LeadModel
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * @param bool $IsDeleted
     * @return LeadModel
     */
    public function setIsDeleted($IsDeleted)
    {
        $this->IsDeleted = $IsDeleted;
        return $this;
    }

    /**
     * @return string
     */
    public function getMasterRecordId()
    {
        return $this->MasterRecordId;
    }

    /**
     * @param string $MasterRecordId
     * @return LeadModel
     */
    public function setMasterRecordId($MasterRecordId)
    {
        $this->MasterRecordId = $MasterRecordId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return LeadModel
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return LeadModel
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalutation()
    {
        return $this->Salutation;
    }

    /**
     * @param string $Salutation
     * @return LeadModel
     */
    public function setSalutation($Salutation)
    {
        $this->Salutation = $Salutation;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return LeadModel
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return LeadModel
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $Company
     * @return LeadModel
     */
    public function setCompany($Company)
    {
        $this->Company = $Company;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return LeadModel
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return LeadModel
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return LeadModel
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return LeadModel
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return LeadModel
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return LeadModel
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return LeadModel
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getGeocodeAccuracy()
    {
        return $this->GeocodeAccuracy;
    }

    /**
     * @param string $GeocodeAccuracy
     * @return LeadModel
     */
    public function setGeocodeAccuracy($GeocodeAccuracy)
    {
        $this->GeocodeAccuracy = $GeocodeAccuracy;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     * @return LeadModel
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return LeadModel
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->MobilePhone;
    }

    /**
     * @param string $MobilePhone
     * @return LeadModel
     */
    public function setMobilePhone($MobilePhone)
    {
        $this->MobilePhone = $MobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return LeadModel
     */
    public function setFax($Fax)
    {
        $this->Fax = $Fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return LeadModel
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * @param string $Website
     * @return LeadModel
     */
    public function setWebsite($Website)
    {
        $this->Website = $Website;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->PhotoUrl;
    }

    /**
     * @param string $PhotoUrl
     * @return LeadModel
     */
    public function setPhotoUrl($PhotoUrl)
    {
        $this->PhotoUrl = $PhotoUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return LeadModel
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeadSource()
    {
        return $this->LeadSource;
    }

    /**
     * @param string $LeadSource
     * @return LeadModel
     */
    public function setLeadSource($LeadSource)
    {
        $this->LeadSource = $LeadSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return LeadModel
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndustry()
    {
        return $this->Industry;
    }

    /**
     * @param string $Industry
     * @return LeadModel
     */
    public function setIndustry($Industry)
    {
        $this->Industry = $Industry;
        return $this;
    }

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->Rating;
    }

    /**
     * @param string $Rating
     * @return LeadModel
     */
    public function setRating($Rating)
    {
        $this->Rating = $Rating;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnnualRevenue()
    {
        return $this->AnnualRevenue;
    }

    /**
     * @param string $AnnualRevenue
     * @return LeadModel
     */
    public function setAnnualRevenue($AnnualRevenue)
    {
        $this->AnnualRevenue = $AnnualRevenue;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumberOfEmployees()
    {
        return $this->NumberOfEmployees;
    }

    /**
     * @param string $NumberOfEmployees
     * @return LeadModel
     */
    public function setNumberOfEmployees($NumberOfEmployees)
    {
        $this->NumberOfEmployees = $NumberOfEmployees;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerId()
    {
        return $this->OwnerId;
    }

    /**
     * @param string $OwnerId
     * @return LeadModel
     */
    public function setOwnerId($OwnerId)
    {
        $this->OwnerId = $OwnerId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isConverted()
    {
        return $this->IsConverted;
    }

    /**
     * @param bool $IsConverted
     * @return LeadModel
     */
    public function setIsConverted($IsConverted)
    {
        $this->IsConverted = $IsConverted;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getConvertedDate()
    {
        return $this->ConvertedDate;
    }

    /**
     * @param \DateTime $ConvertedDate
     * @return LeadModel
     */
    public function setConvertedDate($ConvertedDate)
    {
        $this->ConvertedDate = $ConvertedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getConvertedAccountId()
    {
        return $this->ConvertedAccountId;
    }

    /**
     * @param string $ConvertedAccountId
     * @return LeadModel
     */
    public function setConvertedAccountId($ConvertedAccountId)
    {
        $this->ConvertedAccountId = $ConvertedAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getConvertedContactId()
    {
        return $this->ConvertedContactId;
    }

    /**
     * @param string $ConvertedContactId
     * @return LeadModel
     */
    public function setConvertedContactId($ConvertedContactId)
    {
        $this->ConvertedContactId = $ConvertedContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getConvertedOpportunityId()
    {
        return $this->ConvertedOpportunityId;
    }

    /**
     * @param string $ConvertedOpportunityId
     * @return LeadModel
     */
    public function setConvertedOpportunityId($ConvertedOpportunityId)
    {
        $this->ConvertedOpportunityId = $ConvertedOpportunityId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUnreadByOwner()
    {
        return $this->IsUnreadByOwner;
    }

    /**
     * @param bool $IsUnreadByOwner
     * @return LeadModel
     */
    public function setIsUnreadByOwner($IsUnreadByOwner)
    {
        $this->IsUnreadByOwner = $IsUnreadByOwner;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->CreatedDate;
    }

    /**
     * @param \DateTime $CreatedDate
     * @return LeadModel
     */
    public function setCreatedDate($CreatedDate)
    {
        $this->CreatedDate = $CreatedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedById()
    {
        return $this->CreatedById;
    }

    /**
     * @param string $CreatedById
     * @return LeadModel
     */
    public function setCreatedById($CreatedById)
    {
        $this->CreatedById = $CreatedById;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->LastModifiedDate;
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return LeadModel
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
        $this->LastModifiedDate = $LastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedById()
    {
        return $this->LastModifiedById;
    }

    /**
     * @param string $LastModifiedById
     * @return LeadModel
     */
    public function setLastModifiedById($LastModifiedById)
    {
        $this->LastModifiedById = $LastModifiedById;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSystemModstamp()
    {
        return $this->SystemModstamp;
    }

    /**
     * @param \DateTime $SystemModstamp
     * @return LeadModel
     */
    public function setSystemModstamp($SystemModstamp)
    {
        $this->SystemModstamp = $SystemModstamp;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastActivityDate()
    {
        return $this->LastActivityDate;
    }

    /**
     * @param \DateTime $LastActivityDate
     * @return LeadModel
     */
    public function setLastActivityDate($LastActivityDate)
    {
        $this->LastActivityDate = $LastActivityDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastViewedDate()
    {
        return $this->LastViewedDate;
    }

    /**
     * @param \DateTime $LastViewedDate
     * @return LeadModel
     */
    public function setLastViewedDate($LastViewedDate)
    {
        $this->LastViewedDate = $LastViewedDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastReferencedDate()
    {
        return $this->LastReferencedDate;
    }

    /**
     * @param \DateTime $LastReferencedDate
     * @return LeadModel
     */
    public function setLastReferencedDate($LastReferencedDate)
    {
        $this->LastReferencedDate = $LastReferencedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getJigsaw()
    {
        return $this->Jigsaw;
    }

    /**
     * @param string $Jigsaw
     * @return LeadModel
     */
    public function setJigsaw($Jigsaw)
    {
        $this->Jigsaw = $Jigsaw;
        return $this;
    }

    /**
     * @return string
     */
    public function getJigsawContactId()
    {
        return $this->JigsawContactId;
    }

    /**
     * @param string $JigsawContactId
     * @return LeadModel
     */
    public function setJigsawContactId($JigsawContactId)
    {
        $this->JigsawContactId = $JigsawContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCleanStatus()
    {
        return $this->CleanStatus;
    }

    /**
     * @param string $CleanStatus
     * @return LeadModel
     */
    public function setCleanStatus($CleanStatus)
    {
        $this->CleanStatus = $CleanStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyDunsNumber()
    {
        return $this->CompanyDunsNumber;
    }

    /**
     * @param string $CompanyDunsNumber
     * @return LeadModel
     */
    public function setCompanyDunsNumber($CompanyDunsNumber)
    {
        $this->CompanyDunsNumber = $CompanyDunsNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDandbCompanyId()
    {
        return $this->DandbCompanyId;
    }

    /**
     * @param string $DandbCompanyId
     * @return LeadModel
     */
    public function setDandbCompanyId($DandbCompanyId)
    {
        $this->DandbCompanyId = $DandbCompanyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailBouncedReason()
    {
        return $this->EmailBouncedReason;
    }

    /**
     * @param string $EmailBouncedReason
     * @return LeadModel
     */
    public function setEmailBouncedReason($EmailBouncedReason)
    {
        $this->EmailBouncedReason = $EmailBouncedReason;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEmailBouncedDate()
    {
        return $this->EmailBouncedDate;
    }

    /**
     * @param \DateTime $EmailBouncedDate
     * @return LeadModel
     */
    public function setEmailBouncedDate($EmailBouncedDate)
    {
        $this->EmailBouncedDate = $EmailBouncedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSICCodeC()
    {
        return $this->SICCode__c;
    }

    /**
     * @param string $SICCode__c
     * @return LeadModel
     */
    public function setSICCodeC($SICCode__c)
    {
        $this->SICCode__c = $SICCode__c;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductInterestC()
    {
        return $this->ProductInterest__c;
    }

    /**
     * @param string $ProductInterest__c
     * @return LeadModel
     */
    public function setProductInterestC($ProductInterest__c)
    {
        $this->ProductInterest__c = $ProductInterest__c;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryC()
    {
        return $this->Primary__c;
    }

    /**
     * @param string $Primary__c
     * @return LeadModel
     */
    public function setPrimaryC($Primary__c)
    {
        $this->Primary__c = $Primary__c;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentGeneratorsC()
    {
        return $this->CurrentGenerators__c;
    }

    /**
     * @param string $CurrentGenerators__c
     * @return LeadModel
     */
    public function setCurrentGeneratorsC($CurrentGenerators__c)
    {
        $this->CurrentGenerators__c = $CurrentGenerators__c;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumberofLocationsC()
    {
        return $this->NumberofLocations__c;
    }

    /**
     * @param string $NumberofLocations__c
     * @return LeadModel
     */
    public function setNumberofLocationsC($NumberofLocations__c)
    {
        $this->NumberofLocations__c = $NumberofLocations__c;
        return $this;
    }


}