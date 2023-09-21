<?php

//namespace App\Http\Controllers;
namespace App\Models;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class CaseController{

    function getAll(RequestInterface $req, ResponseInterface $res)
    {
        $incomingData = $req;
        $data = "inserting manaually";
        return $data;
        // dd($data);
        // dd($incomingData);
    }


}

?>