<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 14/02/16
 * Time: 11:27
 */

namespace AppBundle\Model;

/**
 * Class Location
 * @package AppBundle\Model
 */
class Location
{
    /**
     * @var integer
     */
    protected $accuracyRadius;

    /**
     * @var integer
     */
    protected $averageIncome;

    /**
     * @var integer
     */
    protected $latitude;

    /**
     * @var integer
     */
    protected $longitude;

    /**
     * @var integer
     */
    protected $metroCode;

    /**
     * @var integer
     */
    protected $populationDensity;

    /**
     * @var integer
     */
    protected $timeZone;

    /**
     * @return int
     */
    public function getAccuracyRadius()
    {
        return $this->accuracyRadius;
    }

    /**
     * @param int $accuracyRadius
     */
    public function setAccuracyRadius($accuracyRadius)
    {
        $this->accuracyRadius = $accuracyRadius;
    }

    /**
     * @return int
     */
    public function getAverageIncome()
    {
        return $this->averageIncome;
    }

    /**
     * @param int $averageIncome
     */
    public function setAverageIncome($averageIncome)
    {
        $this->averageIncome = $averageIncome;
    }

    /**
     * @return int
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param int $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return int
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param int $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return int
     */
    public function getMetroCode()
    {
        return $this->metroCode;
    }

    /**
     * @param int $metroCode
     */
    public function setMetroCode($metroCode)
    {
        $this->metroCode = $metroCode;
    }

    /**
     * @return int
     */
    public function getPopulationDensity()
    {
        return $this->populationDensity;
    }

    /**
     * @param int $populationDensity
     */
    public function setPopulationDensity($populationDensity)
    {
        $this->populationDensity = $populationDensity;
    }

    /**
     * @return int
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param int $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

}