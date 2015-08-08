<?php
namespace Library\Http\Mapper;

use Library\Http\Query;

interface HttpGetMapper
{

    public function getEndPoint(Query $query);

    public function execute();

} 
