<?php

/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/26 11:24
 */
namespace Creational\FactoryMethod;
class Benz implements VehicleInterface
{
    protected $color;

    /**
     * Benz constructor.
     * @param $color
     */
    public function __construct()
    {
        $this->color = "red";
    }

    public function run()
    {
        echo "Benz!!";
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
    

}