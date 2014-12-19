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
                    if (isset($row['id'])) {
                        $contact->setId($row['id']);
                    }
                    if (isset($row['displayName'])) {
                        $contact->setDisplayName($row['displayName']);
                    }
                    if (isset($row['mailAddress'])) {
                        $contact->setMailAddress($row['mailAddress']);
                    }
                    if (isset($row['role'])) {
                        $contact->setRole($row['role']);
                    }
                    if (isset($row['zvAgbCode'])) {
                        $contact->setZvAgbCode($row['zvAgbCode']);
                    }
                    if (isset($row['gender'])) {
                        $contact->setGender($row['gender']);
                    }
                    if (isset($row['surname'])) {
                        $contact->setSurname($row['surname']);
                    }
                    if (isset($row['initials'])) {
                        $contact->setInitials($row['initials']);
                    }
                    if (isset($row['prefix'])) {
                        $contact->setPrefix($row['prefix']);
                    }
                    if (isset($row['department'])) {
                        $contact->setDepartment($row['department']);
                    }
                    if (isset($row['organizationId'])) {
                        $contact->setOrganizationId($row['organizationId']);
                    }
                    if (isset($row['prAgbCode'])) {
                        $contact->setPrAgbCode($row['prAgbCode']);
                    }
                    if (isset($row['organizationType'])) {
                        $contact->setOrganizationType($row['organizationType']);
                    }
                    if (isset($row['organization'])) {
                        $contact->setOrganization($row['organization']);
                    }
                    if (isset($row['street'])) {
                        $contact->setStreet($row['street']);
                    }
                    if (isset($row['houseNumber'])) {
                        $contact->setHouseNumber($row['houseNumber']);
                    }
                    if (isset($row['postalCode'])) {
                        $contact->setPostalCode($row['postalCode']);
                    }
                    if (isset($row['locality'])) {
                        $contact->setLocality($row['locality']);
                    }
                    if (isset($row['country'])) {
                        $contact->setCountry($row['country']);
                    }
                    if (isset($row['telephoneNumber'])) {
                        $contact->setTelephoneNumber($row['telephoneNumber']);
                    }
                    $contacts[] = $contact;
                }
            }
            $start += $rows;
        }
        return $contacts;
    }
}
