<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 13/02/16
 * Time: 21:35
 */

namespace AppBundle\Model;

/**
 * Class Customer
 * @package AppBundle\Model
 */
class Customer
{

    /**
     * @var string
     */
    protected $fiscalIdentify;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
   protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var City
     */
    protected $city;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $address2;


    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $fax;

    /**
     * @var string
     */
    protected $mobile;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $website;

    /**
     * @var Currency
     */
    protected $currency;

    /**
     * @var boolean
     */
    protected $isActive;

    /**
     * @var ClientFamily
     */
    protected $clientFamily;

    /**
     * @var ClientRole
     */
    protected $clientRole;

}