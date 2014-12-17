<?php
namespace ZorgMail\AddressBook;

class Contact
{
    private $id;
    private $displayName;
    private $mailAddress;
    private $role;
    private $gender;
    private $surname;
    private $organizationId;
    private $prAgbCode;
    private $organizationType;
    private $organization;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}
