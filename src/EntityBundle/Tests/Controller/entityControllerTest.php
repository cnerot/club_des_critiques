<?php

namespace EntityBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class entityControllerTest extends WebTestCase
{
    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/entity/create');
    }

    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/entity/view');
    }

    public function testFrontview()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/view');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/entity/edit');
    }

}
