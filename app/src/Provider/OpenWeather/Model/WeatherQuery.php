<?php
namespace Provider\OpenWeather\Model;

use Library\Http\Query;

class WeatherQuery extends Query{

    /**
     * @var string
     */
    private $city = '';

    /**
     * @var string
     */
    private $country = '';


    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this;
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this;
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }


}
