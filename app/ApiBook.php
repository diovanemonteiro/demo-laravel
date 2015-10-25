<?php

namespace DemoLaravel;

class ApiBook
{
    private $http;
    private $url = 'http://it-ebooks-api.info/v1/';

    public function __construct()
    {
        $this->http = new \GuzzleHttp\Client();
    }

    public function getBooks($query = 'php', $page = 1)
    {
        $response = $this->http->request('GET', $this->url . 'search/' . $query .  '/page/' . $page);

        return json_decode($response->getBody());
    }

    public function getBook($id)
    {
        $response = $this->http->request('GET', $this->url . '/book/' . $id);

        return json_decode($response->getBody());
    }
}
