<?php

namespace EntityBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategorieControllerTest extends WebTestCase
{
    public function testAll()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/all');
    }

    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/view');
    }

    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/create');
    }

    public function testRemove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/remove');
    }

}
