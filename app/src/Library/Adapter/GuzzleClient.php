<?php


namespace RestWheel\Library\Adapter;

use GuzzleHttp\Client;

class GuzzleClient implements HttpClient
{

    /**
     * @var Client
     */
    private $guzzleClient = null;

    public function __construct(Client $guzzleClient)
    {
        $this->setGuzzleClient($guzzleClient);
    }

    /**
     * @param $uri
     * @param $options
     * @return mixed
     */
    public function get($uri, array $options)
    {
        $this->getGuzzleClient()->get($uri, $options);
    }

    /**
     * @return Client
     */
    public function getGuzzleClient()
    {
        return $this->guzzleClient;
    }

    /**
     * @param Client $guzzleClient
     * @return $this;
     */
    private function setGuzzleClient($guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
        return $this;
    }

} 
