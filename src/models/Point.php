<?php

namespace Brezgalov\PortTransitCommon\Models;

use Brezgalov\PortTransitCommon\Models\Traits\IPointEqualsTrait;

/**
 * Class represents a point with coords
 */
class Point implements IPoint
{
    use IPointEqualsTrait;

    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $lon;

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @return float
     */
    public function getLon()
    {
        return $this->lat;
    }
}