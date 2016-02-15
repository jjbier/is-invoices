<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 13/02/16
 * Time: 21:52
 */

namespace AppBundle\Model;

/**
 * Class Country
 * @package AppBundle\Model
 */
class Country
{
    /**
     * @var integer
     */
    protected $numericCode;

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
     * @return int
     */
    public function getNumericCode()
    {
        return $this->numericCode;
    }

    /**
     * @param int $numericCode
     */
    public function setNumericCode($numericCode)
    {
        $this->numericCode = $numericCode;
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