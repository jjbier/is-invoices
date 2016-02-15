<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 13/02/16
 * Time: 22:08
 */

namespace AppBundle\Model;
use AppBundle\Entity\Country;

/**
 * Class City
 * @package AppBundle\Model
 */
class City
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $geonameId;

    /**
     * @var Country
     */
    protected $county;

    /**
     * @var Location
     */
    protected $location;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var Subdivision[]
     */
    protected $subdivisions;

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
     * @return Country
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param Country $county
     */
    public function setCounty($county)
    {
        $this->county = $county;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return Subdivision[]
     */
    public function getSubdivisions()
    {
        return $this->subdivisions;
    }

    /**
     * @param Subdivision[] $subdivisions
     */
    public function setSubdivisions($subdivisions)
    {
        $this->subdivisions = $subdivisions;
    }

}