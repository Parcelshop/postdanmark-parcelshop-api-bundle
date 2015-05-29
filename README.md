Postdanmark parcelshop (for Denmark) - Symfony Bundle
=============================================

Install
-------

### Composer

Add this to your composer

````
"lsv/pddk-parcelshop-api-bundle": "~1.0"
````

Or run

````
composer require lsv/pddk-parcelshop-api-bundle
````

### AppKernel

Add this to your AppKernel.php

````
new Lsv\LsvPddkApiBundle\LsvPddkApiBundle()
````

### Configuration

Add your consumer id to the config file

[You can get your consumer id from here](http://www.postdanmark.dk/da/Logistik/netbutikker/vaelg-selv-udleveringssted/Sider/Implementer-vaelg-selv.aspx#tab2)

````yml
lsv_pddk_api:
    consumerid: xxx-xxxx-xxxx
````

Usage
-----

### Service

````
$this->get('lsv_pddk_api.parcelshop')
````

### Methods

````
$this->get('lsv_pddk_api.parcelshop')->getParcelshop( ZIPCODE, ID )

$this->get('lsv_pddk_api.parcelshop')->getParcelshopsFromZipcode( ZIPCODE )

$this->get('lsv_pddk_api.parcelshop')->getParcelshopsNearAddress( STREET, ZIPCODE, LIMIT )
````

Learn more about what the methods do at the [bundles homepage](https://github.com/lsv/postdanmark-parcelshop)

### Adding your own guzzle client, fx if you want cache or retry service

Overwrite the parameter ````lsv_pddk_api.client```` with your own client

Or you can overwrite the whole class with the parameter ````lsv_pddk_api.class````