ZF2 Zencoder Service Module
===========================

Introduction
------------
Load up Zencoder (Service_Zencoder) through the ZF2 Service Locator.

Installation
------------

1. require in composer.json
2. add 'Zencoder' to your list of required modules in application.config.php
3. Copy over vendor/thesisplanet/zencoder/config/zencoder.local.dist.php to config/autoload/zencoder.local.php

Configuration
-------------
1. Set correct api key in config/autoload/zencoder.local.php


Usage
-----

To access Zencoder from a class which implements the `ServiceLocatorAwareInterface`:

```
  $zencoder = $this->getServiceLocator()->get('ThesisPlanet\ZencoderService');
  This will return an instance of Services_Zencoder.
  
  From there, you can interact with all of the Zencoder goodness as briefly documented at
  https://github.com/zencoder/zencoder-php
  
  
```
