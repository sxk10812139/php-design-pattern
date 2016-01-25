<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/25 17:39
 */

namespace Creational\SimpleFactory;

use Creational\SimpleFactory\VehicleInterface;

class Bus implements VehicleInterface
{
    public function run()
    {
        echo '公共汽车启动';
    }
}