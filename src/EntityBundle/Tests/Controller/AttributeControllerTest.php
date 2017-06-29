<?php

namespace EntityBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AttributeControllerTest extends WebTestCase
{
    public function testAll()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/attribute/all');
    }

    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/attribute/create');
    }

    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/attribute/view');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/attribute/delete');
    }

}
