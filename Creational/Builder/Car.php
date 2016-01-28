<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 18:23
 */

namespace Creational\Builder;


class Car extends AbstractVehicle
{
    public function run()
    {
        echo __NAMESPACE__;
    }

}