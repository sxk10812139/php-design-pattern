<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/29 12:03
 */

namespace Behavioral\Strategy;


class DateComparator implements Strategy
{
    public function algorithm($a, $b)
    {
        return $a['date']>$b['date']?1:0;
    }

}