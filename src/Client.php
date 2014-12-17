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
        $client = new GuzzleClient();
        $res = $client->get('https://api.zorgmail.nl/addressbook/v1/edi/?q='.$keyword.'&start=1&rows=100', ['auth' =>  [$this->username, $this->password]]);
        //echo $res->getStatusCode();
        //echo $res->getHeader('content-type');
        //echo $res->getBody();
        //var_export($res->json());
        $contacts = array();
        $data = $res->json();
        foreach ($data['addresses'] as $row) {
            echo $row['id'];
            $contact = new Contact();
            $contact->setId($row['id']);
            $contacts[] = $contact;
        }
        return $contacts;
    }
}
