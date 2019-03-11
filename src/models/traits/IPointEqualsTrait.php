<?php

namespace Brezgalov\PortTransitCommon\Models\Traits;

use Brezgalov\PortTransitCommon\Models\IPoint;

/**
 * Trait IPointEqualsTrait used to create IPoint class easily
 * @package Brezgalov\PortTransitCommon\Models\Traits
 */
trait IPointEqualsTrait
{
    /**
     * is Point equal
     * @param IPoint $point
     * @return bool
     */
    public function equals(IPoint $point)
    {
        return $this->getLat() == $point->getLat() && $this->getLon() == $point->getLon();
    }
}