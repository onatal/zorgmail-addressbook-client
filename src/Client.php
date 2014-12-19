<?php
namespace ZorgMail\AddressBook;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function search($keyword)
    {
        $start = 1;
        $rows = 100;
        $data = false;
        $contacts = array();
        while ($start==1 || $data['numFound']>$start) {
            $client = new GuzzleClient();
            $res = $client->get('https://api.zorgmail.nl/addressbook/v1/edi/?q='.$keyword.'&start='.$start.'&rows='.$rows, ['auth' =>  [$this->username, $this->password]]);
            //echo $res->getStatusCode();
            //echo $res->getHeader('content-type');
            //echo $res->getBody();
            $data = $res->json();
            if ($data['numFound']>0) {
                foreach ($data['addresses'] as $row) {
                    $contact = new Contact();
                    $contact->setId($row['id']);
                    $contact->setDisplayName($row['displayName']);
                    $contact->setMailAddress($row['mailAddress']);
                    $contact->setRole($row['role']);
                    $contact->setZvAgbCode($row['zvAgbCode']);
                    $contact->setGender($row['gender']);
                    $contact->setSurname($row['surname']);
                    $contact->setInitials($row['initials']);
                    $contact->setPrefix($row['prefix']);
                    $contact->setDepartment($row['department']);
                    $contact->setOrganizationId($row['organizationId']);
                    $contact->setPrAgbCode($row['prAgbCode']);
                    $contact->setOrganizationType($row['organizationType']);
                    $contact->setOrganization($row['organization']);
                    $contact->setStreet($row['street']);
                    $contact->setHouseNumber($row['houseNumber']);
                    $contact->setPostalCode($row['postalCode']);
                    $contact->setLocality($row['locality']);
                    $contact->setCountry($row['country']);
                    $contact->setTelephoneNumber($row['telephoneNumber']);
                    $contacts[] = $contact;
                }
            }
            $start += $rows;
        }
        return $contacts;
    }
}
