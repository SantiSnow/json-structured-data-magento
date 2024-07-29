# Mage2 Module Osaka StructuredData

A simple module for Magento 2, version 2.4.x, that will help you add structured data to your product pages. The plugin does not add any configuration to your ecommerce dashboard, and it does not require any customization from your side. 

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

 - Check your PHP and apache/nginx dependencies and update them if necessary.
 - Install the module with composer by running `composer require osaka/module-structureddata`
 - enable the module by running `php bin/magento module:enable Osaka_StructuredData`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

Configuration is not necessary.

## Attributes

An example of the attributes:

      {
         "@context":"https://schema.org/","@type":"Product",
         "name":"product one",
         "sku":"fo83hqfehdfhi3h3",
         "description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
         "image":
            ["http://local.magento.co/media/catalog/product/example.jpg"]
      }

