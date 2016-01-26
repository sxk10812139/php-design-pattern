<?php

/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/26 11:24
 */
namespace Creational\FactoryMethod;
class Audi implements VehicleInterface
{
    public function run()
    {
        echo "Audi!!";
    }

}