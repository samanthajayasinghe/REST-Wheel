<?php
namespace Library\Mapper;

use Library\Http\Query;

interface HttpGetMapper
{

    public function getEndPoint(Query $query);

    public function execute();

} 
