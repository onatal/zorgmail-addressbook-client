<?php

namespace ZorgMail\AddressBook\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use ZorgMail\AddressBook\Client;

class SearchCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('addressbook:search')
            ->setDescription('Search the api')
            ->addArgument(
                'username',
                InputArgument::REQUIRED,
                'Username'
            )
            ->addArgument(
                'password',
                InputArgument::REQUIRED,
                'Password'
            )
            ->addArgument(
                'keyword',
                InputArgument::REQUIRED,
                'Keyword'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $c = new Client($input->getArgument('username'), $input->getArgument('password'));
        $results = $c->search($input->getArgument('keyword'));
        print_r($results);
    }
}
