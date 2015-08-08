<?php

namespace Provider\OpenWeather\Mapper;

use Library\Http\Mapper\HttpGetMapper;
use Library\Http\Query;

class WeatherMapper implements HttpGetMapper
{


    const WEATHER_API_URI = 'api.openweathermap.org/data/2.5/weather?q=';

    public function getEndPoint(Query $query)
    {
        foreach (['a', 'b'] as $i) {

        }
    }

    public function execute($x, $y)
    {
        // TODO: Implement execute() method.
    }

} 
