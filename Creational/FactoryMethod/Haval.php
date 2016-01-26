<?php

/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/26 11:25
 */
namespace Creational\FactoryMethod;
class Haval implements VehicleInterface
{
    public function run()
    {
        echo "Haval!!";
    }
}