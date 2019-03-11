<?php

namespace Brezgalov\PortTransitCommon\Models;

interface IPoint
{
    /**
     * @return float
     */
    public function getLat();

    /**
     * @return float
     */
    public function getLon();

    /**
     * @param IPoint $point
     * @return bool
     */
    public function equals(IPoint $point);
}