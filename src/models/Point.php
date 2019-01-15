<?php

namespace brezgalov\common\utils;

/**
 * Class represents a point with coords
 */
class Point
{
    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $lon;

    /**
     * Create class instance from array
     * @param array $coords - [34.7, 38.45]
     * @return Point
     */
    public static function createFromArray(array $coords)
    {
        list($lat, $lon) = $coords;
        return new Point($lat, $lon);
    }

    /**
     * is Point equal
     * @param Point $point
     * @return bool
     */
    public function equals(Point $point)
    {
        return $this->lat == $point->lat && $this->lon == $point->lon;
    }

    /**
     * Point constructor. Exapm
     * @param null|array $lat
     * @param null $lon
     */
    public function __construct($lat = null, $lon = null)
    {
        $this->lat = $lat;
        $this->lon = $lon;
    }
}