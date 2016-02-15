<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 13/02/16
 * Time: 23:32
 */

namespace AppBundle\Entity;

use AppBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;

/**
 * Class User
 * @package AppBundle\Entity
 *
 * @Entity
 * @Table(name="users")
 */
class User extends BaseUser
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