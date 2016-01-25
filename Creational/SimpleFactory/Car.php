<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/25 17:40
 */

namespace Creational\SimpleFactory;

use Creational\SimpleFactory\VehicleInterface;
class Car implements VehicleInterface
{
    public function run()
    {
        echo "小汽车启动...";
    }
}