<?php

/*
 * This file (LoadUserData.php) is part of the is-invoices project.
 *
 * 2014 (c) jjbier@gmail.com.
 * Created by Xabier Fernández Rodríguez <jjbier@gmail.com>
 * Date: 14/02/2016 - 19:45
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

/**
 * Class LoadUserData
 * @package AppBundle\DataFixtures\ORM
 */
class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPassword('admin');
        $userAdmin->setRoles(array('ROLE_ADMIN','ROLE_USER'));
        $manager->persist($userAdmin);
        $userDemo = new User();
        $userDemo->setUsername('demo');
        $userDemo->setPassword('demo');
        $userDemo->setRoles(array('ROLE_USER'));
        $manager->persist($userDemo);
        $manager->flush();
        $this->addReference('admin-user', $userAdmin);
        $this->addReference('demo-user', $userDemo);
    }
    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}