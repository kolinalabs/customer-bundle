# KolinaCustomerBundle
Simplified management clients, extensible and integrated with FOSUserBundle

## 1. Installation and Configuration
##### Caution: This package is under development!
##
#### 1.1 Download KolinaCustomerBundle using composer
```sh
$ composer require kolinalabs/customer-bundle "dev-master"
```
After downloading the package
#### 1.2 Enable the bundle
```sh
<?php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        // ...
        new Kolina\CustomerBundle\KolinaCustomerBundle(),
        // ...
    );
}
```
#### 1.3 Create your customer class [Tested with xml mapping](http://doctrine-orm.readthedocs.io/projects/doctrine-orm/en/latest/reference/xml-mapping.html)

```sh
<?php
// src/AppBundle/Entity/Customer.php
namespace AppBundle\Entity;

use Kolina\CustomerBundle\Entity\Customer as AbstractCustomer;

/**
 * Customer
 */
class Customer extends AbstractCustomer
{
    // Your custom properties and methods
}
```

#### 1.4 Configure app/config.yml

```sh
# app/config.yml
kolina_customer:
    entity: AppBundle\Entity\Customer
```

## 2. CRUD
#####
### 2.1 Access the service manager in the controller
```sh
/**
 * @return \Kolina\CustomerBundle\Entity\CustomerManager
 */
private function getCustomerManager()
{
    return $this->get('kolina_customer.manager');
}
```

### 2.2 Example usage
```sh
// Create Customer Object
...
$manager = $this->getCustomerManager();
$customer = $manager->create();

$customer
        ->setFirstname('Foo')
        ->setLastname('Bar')
        //... other setter methods - 
        //... see \Kolina\CustomerBundle\Entity\CustomerInterface
        ;

$manager->save($customer);
...
```

