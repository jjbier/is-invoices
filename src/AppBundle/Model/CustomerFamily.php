<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 13/02/16
 * Time: 22:03
 */

namespace AppBundle\Model;

/**
 * Class CustomerFamily
 * @package AppBundle\Model
 */
class CustomerFamily
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}