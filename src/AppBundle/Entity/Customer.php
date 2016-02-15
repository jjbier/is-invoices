<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 14/02/16
 * Time: 1:20
 */

namespace AppBundle\Entity;

use AppBundle\Model\Customer as BaseCustomer;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;

/**
 * Class Customer
 * @package AppBundle\Entity
 *
 * @Entity()
 * @Table(name="customers")
 */
class Customer extends BaseCustomer
{
    /**
     * @var integer
     *
     * @Id()
     * @Column()
     * @GeneratedValue()
     */
    protected $id;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}