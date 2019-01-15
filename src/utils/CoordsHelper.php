<?php

namespace Brezgalov\PortTransitCommon\Utils;

use Brezgalov\PortTransitCommon\Models\Point;

class CoordsHelper
{
    /**
     * @param Point $p1
     * @param Point $p2
     * @param string $unit
     * @return float
     */
    public static function getDistance(Point $p1, Point $p2, $unit = 'K')
    {
        if ($p1->equals($p2)) {
            return 0;
        }
        $theta = $p1->lon - $p2->lon;
        $dist = sin(deg2rad($p1->lat)) * sin(deg2rad($p2->lat)) + cos(deg2rad($p1->lat)) * cos(deg2rad($p2->lat)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);


        if ($unit == 'K') {
            return ($miles * 1.609344);
        } elseif ($unit == 'N') {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }
}