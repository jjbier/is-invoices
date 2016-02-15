<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 13/02/16
 * Time: 21:47
 */

namespace AppBundle\Model;

/**
 * Class Currency
 * @package AppBundle\Model
 */
class Currency
{
    /**
     * @var integer
     */
    protected $numberCode;

    /**
     * @var string
     */
    protected $alphabeticCode;

    /**
     * @var integer
     */
    protected $minorUnit;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var String
     */
    protected $entity;

    /**
     * @var string
     */
    protected $badge;

}