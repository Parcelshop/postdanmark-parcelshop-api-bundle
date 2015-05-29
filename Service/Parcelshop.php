<?php
namespace Lsv\PddkApiBundle\Service;

use GuzzleHttp\Client;

class Parcelshop extends \Lsv\PdDk\ParcelShop
{

    public function __construct($consumerId, $country, Client $client = null)
    {
        parent::__construct($consumerId, $country, $client);
    }

}
