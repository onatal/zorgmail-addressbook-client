<?php
namespace ZorgMail\AddressBook;

class Contact
{
    private $id;
    private $displayName;
    private $mailAddress;
    private $role;
    private $zvAgbCode;
    private $gender;
    private $surname;
    private $initials;
    private $prefix;
    private $department;
    private $organizationId;
    private $prAgbCode;
    private $organizationType;
    private $organization;
    private $street;
    private $houseNumber;
    private $postalCode;
    private $locality;
    private $country;
    private $telephoneNumber;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    public function setMailAddress($mailAddress)
    {
        $this->mailAddress = $mailAddress;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getZvAgbCode()
    {
        return $this->zvAgbCode;
    }

    public function setZvAgbCode($zvAgbCode)
    {
        $this->zvAgbCode = $zvAgbCode;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getInitials()
    {
        return $this->initials;
    }

    public function setInitials($initials)
    {
        $this->initials = $initials;
    }

    public function getPrefix()
    {
        return $this->prefix;
    }

    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
    }

    public function getPprAgbCode()
    {
        return $this->prAgbCode;
    }

    public function setPrAgbCode($prAgbCode)
    {
        $this->prAgbCode = $prAgbCode;
    }

    public function getOrganizationType()
    {
        return $this->organizationType;
    }

    public function setOrganizationType($organizationType)
    {
        $this->organizationType = $organizationType;
    }

    public function getOrganization()
    {
        return $this->organization;
    }

    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getLocality()
    {
        return $this->locality;
    }

    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;
    }
}
