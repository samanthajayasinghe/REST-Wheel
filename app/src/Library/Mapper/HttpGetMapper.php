<?php
namespace RestWheel\Library\Mapper;

use RestWheel\Library\Http\Query;

interface HttpGetMapper
{

    public function getEndPoint(Query $query);

    public function execute();

} 
