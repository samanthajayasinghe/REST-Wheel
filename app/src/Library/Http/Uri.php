<?php

namespace Library\Http;

class Uri {

    /**
     * @var string
     */
    private $domain = '';

    /**
     * @var string
     */
    private $path = '';

    /**
     * @var string
     */
    private $query = '';

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return $this;
     */
    private function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return $this;
     */
    private function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param string $query
     * @return $this;
     */
    private function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }
}
