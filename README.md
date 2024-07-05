# Mage2 Module Osaka StructuredData

    ``osaka/module-structureddata``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


    composer require osaka/module-structureddata

## Main Functionalities
Module created to generate structured data in the product page

## Installation
\* = in production please use the `--keep-generated` option

### Requirements

- Requires PHP soap extension. To install it run `sudo apt-get install php-soap`
  and `sudo systemctl restart apache2` or `sudo service apache2 restart`

### Type 1: Zip file

 - Unzip the zip file in `app/code/Osaka`
 - Enable the module by running `php bin/magento module:enable Osaka_StructuredData`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require osaka/module-structureddata`
 - enable the module by running `php bin/magento module:enable Osaka_StructuredData`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Block
	- Product > product.phtml


## Attributes



