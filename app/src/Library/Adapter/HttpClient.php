<?php

namespace Library\Adapter;

interface HttpClient {

    /**
     * @param $uri
     * @param $options
     * @return mixed
     */
    public function get($uri, array $options);

} 
