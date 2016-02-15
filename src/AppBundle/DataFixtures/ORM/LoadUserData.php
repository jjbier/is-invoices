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
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class LoadUserData
 * @package AppBundle\DataFixtures\ORM
 */
class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;

    }


    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $userAdmin = $this->container->get('fos_user.user_manager')->createUser();
        $userAdmin->setUsername('admin');
        $userAdmin->setPlainPassword('admin');
        $userAdmin->setEmail('admin@sayma.lo');
        $userAdmin->setEnabled(true);
        $userAdmin->setRoles(array('ROLE_ADMIN','ROLE_USER'));
        $manager->persist($userAdmin);

        $userDemo = $this->container->get('fos_user.user_manager')->createUser();

        $userDemo->setUsername('demo');
        $userDemo->setPlainPassword('demo');
        $userDemo->setRoles(array('ROLE_USER'));
        $userDemo->setEmail('demo@sayma.lo');
        $userDemo->setEnabled(true);
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