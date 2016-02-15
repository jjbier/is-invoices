<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 14/02/16
 * Time: 11:04
 */

namespace AppBundle\Model;


class Subdivision
{
    /**
     * @var integer
     */
    protected $geonameId;

    /**
     * @var string
     */
    protected $isoCode;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var Subdivision
     */
    protected $parent;

    /**
     * @return int
     */
    public function getGeonameId()
    {
        return $this->geonameId;
    }

    /**
     * @param int $geonameId
     */
    public function setGeonameId($geonameId)
    {
        $this->geonameId = $geonameId;
    }

    /**
     * @return string
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;
    }

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