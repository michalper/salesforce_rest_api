<?php

namespace SalesForceClient\Model;

use SalesForceClient\Model\Nested\AddressModel;

/**
 * Class ContactModel
 * @package SalesForceClient\Model
 */
class ContactModel
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
    private $isDeleted;

    /**
     * @var string
     */
    private $MasterRecordId;

    /**
     * @var string
     */
    private $accountId;

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
    private $OtherStreet;

    /**
     * @var string
     */
    private $OtherCity;

    /**
     * @var string
     */
    private $OtherState;

    /**
     * @var string
     */
    private $OtherPostalCode;

    /**
     * @var string
     */
    private $OtherCountry;

    /**
     * @var string
     */
    private $OtherLatitude;

    /**
     * @var string
     */
    private $OtherLongitude;

    /**
     * @var string
     */
    private $OtherGeocodeAccuracy;

    /**
     * @var AddressModel
     */
    private $OtherAddress;

    /**
     * @var string
     */
    private $MailingStreet;

    /**
     * @var string
     */
    private $MailingCity;

    /**
     * @var string
     */
    private $MailingState;

    /**
     * @var string
     */
    private $MailingPostalCode;

    /**
     * @var string
     */
    private $MailingCountry;

    /**
     * @var string
     */
    private $MailingLatitude;

    /**
     * @var string
     */
    private $MailingLongitude;

    /**
     * @var string
     */
    private $MailingGeocodeAccuracy;

    /**
     * @var AddressModel
     */
    private $MailingAddress;

    /**
     * @var string
     */
    private $Phone;

    /**
     * @var string
     */
    private $Fax;

    /**
     * @var string
     */
    private $MobilePhone;

    /**
     * @var string
     */
    private $HomePhone;

    /**
     * @var string
     */
    private $OtherPhone;

    /**
     * @var string
     */
    private $AssistantPhone;

    /**
     * @var string
     */
    private $ReportsToId;

    /**
     * @var string
     */
    private $Email;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $Department;

    /**
     * @var string
     */
    private $AssistantName;

    /**
     * @var string
     */
    private $LeadSource;

    /**
     * @var \DateTime
     */
    private $Birthdate;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $OwnerId;

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
    private $LastCURequestDate;

    /**
     * @var \DateTime
     */
    private $LastCUUpdateDate;

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
    private $EmailBouncedReason;

    /**
     * @var \DateTime
     */
    private $EmailBouncedDate;

    /**
     * @var boolean
     */
    private $IsEmailBounced;

    /**
     * @var string
     */
    private $PhotoUrl;

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
    private $Level__c;

    /**
     * @var string
     */
    private $Languages__c;

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     * @return ContactModel
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
     * @return ContactModel
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
        return $this->isDeleted;
    }

    /**
     * @param bool $isDeleted
     * @return ContactModel
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
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
     * @return ContactModel
     */
    public function setMasterRecordId($MasterRecordId)
    {
        $this->MasterRecordId = $MasterRecordId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return ContactModel
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
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
     * @return ContactModel
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
     * @return ContactModel
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
     * @return ContactModel
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
     * @return ContactModel
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherStreet()
    {
        return $this->OtherStreet;
    }

    /**
     * @param string $OtherStreet
     * @return ContactModel
     */
    public function setOtherStreet($OtherStreet)
    {
        $this->OtherStreet = $OtherStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherCity()
    {
        return $this->OtherCity;
    }

    /**
     * @param string $OtherCity
     * @return ContactModel
     */
    public function setOtherCity($OtherCity)
    {
        $this->OtherCity = $OtherCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherState()
    {
        return $this->OtherState;
    }

    /**
     * @param string $OtherState
     * @return ContactModel
     */
    public function setOtherState($OtherState)
    {
        $this->OtherState = $OtherState;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherPostalCode()
    {
        return $this->OtherPostalCode;
    }

    /**
     * @param string $OtherPostalCode
     * @return ContactModel
     */
    public function setOtherPostalCode($OtherPostalCode)
    {
        $this->OtherPostalCode = $OtherPostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherCountry()
    {
        return $this->OtherCountry;
    }

    /**
     * @param string $OtherCountry
     * @return ContactModel
     */
    public function setOtherCountry($OtherCountry)
    {
        $this->OtherCountry = $OtherCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherLatitude()
    {
        return $this->OtherLatitude;
    }

    /**
     * @param string $OtherLatitude
     * @return ContactModel
     */
    public function setOtherLatitude($OtherLatitude)
    {
        $this->OtherLatitude = $OtherLatitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherLongitude()
    {
        return $this->OtherLongitude;
    }

    /**
     * @param string $OtherLongitude
     * @return ContactModel
     */
    public function setOtherLongitude($OtherLongitude)
    {
        $this->OtherLongitude = $OtherLongitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherGeocodeAccuracy()
    {
        return $this->OtherGeocodeAccuracy;
    }

    /**
     * @param string $OtherGeocodeAccuracy
     * @return ContactModel
     */
    public function setOtherGeocodeAccuracy($OtherGeocodeAccuracy)
    {
        $this->OtherGeocodeAccuracy = $OtherGeocodeAccuracy;
        return $this;
    }

    /**
     * @return AddressModel
     */
    public function getOtherAddress()
    {
        return $this->OtherAddress;
    }

    /**
     * @param AddressModel $OtherAddress
     * @return ContactModel
     */
    public function setOtherAddress($OtherAddress)
    {
        $this->OtherAddress = $OtherAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailingStreet()
    {
        return $this->MailingStreet;
    }

    /**
     * @param string $MailingStreet
     * @return ContactModel
     */
    public function setMailingStreet($MailingStreet)
    {
        $this->MailingStreet = $MailingStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailingCity()
    {
        return $this->MailingCity;
    }

    /**
     * @param string $MailingCity
     * @return ContactModel
     */
    public function setMailingCity($MailingCity)
    {
        $this->MailingCity = $MailingCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailingState()
    {
        return $this->MailingState;
    }

    /**
     * @param string $MailingState
     * @return ContactModel
     */
    public function setMailingState($MailingState)
    {
        $this->MailingState = $MailingState;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailingPostalCode()
    {
        return $this->MailingPostalCode;
    }

    /**
     * @param string $MailingPostalCode
     * @return ContactModel
     */
    public function setMailingPostalCode($MailingPostalCode)
    {
        $this->MailingPostalCode = $MailingPostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailingCountry()
    {
        return $this->MailingCountry;
    }

    /**
     * @param string $MailingCountry
     * @return ContactModel
     */
    public function setMailingCountry($MailingCountry)
    {
        $this->MailingCountry = $MailingCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailingLatitude()
    {
        return $this->MailingLatitude;
    }

    /**
     * @param string $MailingLatitude
     * @return ContactModel
     */
    public function setMailingLatitude($MailingLatitude)
    {
        $this->MailingLatitude = $MailingLatitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailingLongitude()
    {
        return $this->MailingLongitude;
    }

    /**
     * @param string $MailingLongitude
     * @return ContactModel
     */
    public function setMailingLongitude($MailingLongitude)
    {
        $this->MailingLongitude = $MailingLongitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailingGeocodeAccuracy()
    {
        return $this->MailingGeocodeAccuracy;
    }

    /**
     * @param string $MailingGeocodeAccuracy
     * @return ContactModel
     */
    public function setMailingGeocodeAccuracy($MailingGeocodeAccuracy)
    {
        $this->MailingGeocodeAccuracy = $MailingGeocodeAccuracy;
        return $this;
    }

    /**
     * @return AddressModel
     */
    public function getMailingAddress()
    {
        return $this->MailingAddress;
    }

    /**
     * @param AddressModel $MailingAddress
     * @return ContactModel
     */
    public function setMailingAddress($MailingAddress)
    {
        $this->MailingAddress = $MailingAddress;
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
     * @return ContactModel
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
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
     * @return ContactModel
     */
    public function setFax($Fax)
    {
        $this->Fax = $Fax;
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
     * @return ContactModel
     */
    public function setMobilePhone($MobilePhone)
    {
        $this->MobilePhone = $MobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone()
    {
        return $this->HomePhone;
    }

    /**
     * @param string $HomePhone
     * @return ContactModel
     */
    public function setHomePhone($HomePhone)
    {
        $this->HomePhone = $HomePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherPhone()
    {
        return $this->OtherPhone;
    }

    /**
     * @param string $OtherPhone
     * @return ContactModel
     */
    public function setOtherPhone($OtherPhone)
    {
        $this->OtherPhone = $OtherPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssistantPhone()
    {
        return $this->AssistantPhone;
    }

    /**
     * @param string $AssistantPhone
     * @return ContactModel
     */
    public function setAssistantPhone($AssistantPhone)
    {
        $this->AssistantPhone = $AssistantPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getReportsToId()
    {
        return $this->ReportsToId;
    }

    /**
     * @param string $ReportsToId
     * @return ContactModel
     */
    public function setReportsToId($ReportsToId)
    {
        $this->ReportsToId = $ReportsToId;
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
     * @return ContactModel
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
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
     * @return ContactModel
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->Department;
    }

    /**
     * @param string $Department
     * @return ContactModel
     */
    public function setDepartment($Department)
    {
        $this->Department = $Department;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssistantName()
    {
        return $this->AssistantName;
    }

    /**
     * @param string $AssistantName
     * @return ContactModel
     */
    public function setAssistantName($AssistantName)
    {
        $this->AssistantName = $AssistantName;
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
     * @return ContactModel
     */
    public function setLeadSource($LeadSource)
    {
        $this->LeadSource = $LeadSource;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->Birthdate;
    }

    /**
     * @param \DateTime $Birthdate
     * @return ContactModel
     */
    public function setBirthdate($Birthdate)
    {
        $this->Birthdate = $Birthdate;
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
     * @return ContactModel
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
     * @return ContactModel
     */
    public function setOwnerId($OwnerId)
    {
        $this->OwnerId = $OwnerId;
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
     * @return ContactModel
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
     * @return ContactModel
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
     * @return ContactModel
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
     * @return ContactModel
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
     * @return ContactModel
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
     * @return ContactModel
     */
    public function setLastActivityDate($LastActivityDate)
    {
        $this->LastActivityDate = $LastActivityDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastCURequestDate()
    {
        return $this->LastCURequestDate;
    }

    /**
     * @param \DateTime $LastCURequestDate
     * @return ContactModel
     */
    public function setLastCURequestDate($LastCURequestDate)
    {
        $this->LastCURequestDate = $LastCURequestDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastCUUpdateDate()
    {
        return $this->LastCUUpdateDate;
    }

    /**
     * @param \DateTime $LastCUUpdateDate
     * @return ContactModel
     */
    public function setLastCUUpdateDate($LastCUUpdateDate)
    {
        $this->LastCUUpdateDate = $LastCUUpdateDate;
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
     * @return ContactModel
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
     * @return ContactModel
     */
    public function setLastReferencedDate($LastReferencedDate)
    {
        $this->LastReferencedDate = $LastReferencedDate;
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
     * @return ContactModel
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
     * @return ContactModel
     */
    public function setEmailBouncedDate($EmailBouncedDate)
    {
        $this->EmailBouncedDate = $EmailBouncedDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEmailBounced()
    {
        return $this->IsEmailBounced;
    }

    /**
     * @param bool $IsEmailBounced
     * @return ContactModel
     */
    public function setIsEmailBounced($IsEmailBounced)
    {
        $this->IsEmailBounced = $IsEmailBounced;
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
     * @return ContactModel
     */
    public function setPhotoUrl($PhotoUrl)
    {
        $this->PhotoUrl = $PhotoUrl;
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
     * @return ContactModel
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
     * @return ContactModel
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
     * @return ContactModel
     */
    public function setCleanStatus($CleanStatus)
    {
        $this->CleanStatus = $CleanStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getLevelC()
    {
        return $this->Level__c;
    }

    /**
     * @param string $Level__c
     * @return ContactModel
     */
    public function setLevelC($Level__c)
    {
        $this->Level__c = $Level__c;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguagesC()
    {
        return $this->Languages__c;
    }

    /**
     * @param string $Languages__c
     * @return ContactModel
     */
    public function setLanguagesC($Languages__c)
    {
        $this->Languages__c = $Languages__c;
        return $this;
    }
}