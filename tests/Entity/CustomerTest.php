<?php

use Kolina\CustomerBundle\Entity\Customer;
use Kolina\CustomerBundle\Entity\CustomerInterface;
use Kolina\CustomerBundle\Tests\BaseTest;

class CustomerTest extends BaseTest
{
    const SERVICE_MANAGER = 'kolina_customer.manager';

    /**
     * @test
     */
    public function testCompleteInstanceScenario()
    {
        $customer = $this->getCustomer();

        $this->assertInstanceOf(CustomerInterface::class, $customer);

        $this->assertEquals('Claudinei', $customer->getFirstname());
    }

    /**
     * @test
     */
    public function testCompleteManagerScenario()
    {
        $this->markTestSkipped();
        $manager = $this->getCustomerManager();

        $customers = $manager->findAll();
        $lastId = 0;

        if (count($customers)) {
            $lastCustomer = $customers[0];
            $lastId = $lastCustomer->getId();
        }

        $customer = $manager->create();

        $this->assertInstanceOf(CustomerInterface::class, $customer);

        // Test Fluent Setters
        foreach ($this->getDataValues() as $property => $value) {
            $setter = 'set' . ucfirst(strtolower($property));
            $getter = 'get' . ucfirst(strtolower($property));

            $this->assertEquals($value, $customer->$setter($value)->$getter());
        }

        $manager->save($customer);

        $this->assertTrue($lastId < $customer->getId());
    }

    /**
     * @test
     */
    public function testCascadePersistWithFOSUser()
    {
        $this->markTestIncomplete();
        if (class_exists('\FOS\UserBundle\Model\User')) {
            $user = $this->createUser('cascade');

            $customer = $this->createCustomer();

            $customer->setUser($user);

            $this->getCustomerManager()->save($customer);
        }
    }

    public function testAggregateExistentUser()
    {
        $this->markTestSkipped();
        /*$user = $this->createUser('direct', true);

        $customer = $this->createCustomer(true);

        $customer->setUser($user);

        $this->getCustomerManager()->save($customer);*/
    }

    /**
     * @return mixed
     */
    private function getCustomer()
    {
        $customer = $this->createMock(Customer::class);

        foreach ($this->getPropertySets() as $propertySet) {
            $method = $propertySet['method'];
            $return = $propertySet['will'];

            $customer->method($method)->will($this->returnValue($return));
        }

        return $customer;
    }

    /**
     * @return array
     */
    private function getPropertySets()
    {
        $propertySets = [];

        foreach ($this->getDataValues() as $property => $value) {
            $propertySets[] = [
                'method' => 'get'.ucfirst(strtolower($property)),
                'will' => $value
            ];
        }

        return $propertySets;
    }

    /**
     * @return array
     */
    private function getDataValues()
    {
        return [
            'firstname' => 'Claudinei',
            'lastname' => 'Machado',
            'document' => '555.777.888-85',

            'email' => 'claudinei@kolinalabs.com',
            'website' => 'http://kolinalabs.com',
            'mobile' => pow(time(), 5) * 100,
            'phone' => '9999-9999',
            'fax' => '2222-2222',

            'country' => 'Brazil',
            'postcode' => '77777-777',
            'state' => 'PR',
            'city' => 'Guarapuava',
            'district' => 'Vila Real',
            'street' => 'Rua das Palmeiras',
            'number' => uniqid(time())
        ];
    }

    /**
     * @param $prefix
     * @param bool $persist
     * @return mixed
     */
    private function createUser($prefix, $persist = false)
    {
        $manager = $this->getService('fos_user.user_manager');

        /** @var \FOS\UserBundle\Model\User $user */
        $user = $manager->createUser();

        $base = md5($prefix . uniqid(time()));

        $user->setEmail($base . '@kolinalabs.com')
            ->setUsername(ucfirst($base))
            ->setPlainPassword($base)
            ->setEnabled(true);

        if ($persist) {
            $manager->updateUser($user);
        }

        return $user;
    }

    /**
     * @param bool $persist
     * @return mixed|object
     */
    private function createCustomer($persist = false)
    {
        $manager = $this->getCustomerManager();

        $customer = $manager->create();

        foreach ($this->getDataValues() as $property => $value) {
            $setter = 'set' . ucfirst(strtolower($property));

            $customer->$setter($value);
        }

        if ($persist) {
            $manager->save($customer);
        }

        return $customer;
    }

    /**
     * @return object
     */
    private function getCustomerManager()
    {
        return $this->getService(self::SERVICE_MANAGER);
    }
}
