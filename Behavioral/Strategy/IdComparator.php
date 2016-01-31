<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/29 12:03
 */

namespace Behavioral\Strategy;


class IdComparator implements Strategy
{
    public function algorithm($a, $b)
    {
        return $a['id']>$b['id']?1:0;
    }

}